<?php
/**
 * Created by PhpStorm.
 * User: nerox
 * Date: 3/5/19
 * Time: 3:17 AM
 */
namespace Modules\Account\Infrastructure\Service;

use App\User;
use Illuminate\Support\Facades\Validator;
use Modules\Account\Domain\Model\Request\AccountRequestDTO;
use Modules\Account\Domain\Model\Response\AccountResponseDTO;
use Modules\Account\Domain\Repository\IRegisterAccountRepository;
use Modules\Account\Domain\Service\IRegisterAccountService;
use \Modules\Core\Domain\Service\CoreService;
use \Modules\Account\Domain\Model\Account ;
use \Illuminate\Support\Facades\Log;

class RegisterAccountService extends CoreService implements IRegisterAccountService
{
    private $registerUserRepository;

    public function __construct(IRegisterAccountRepository $registerUserRepository)
    {
        parent::__construct();
        $this->registerUserRepository = $registerUserRepository;
    }

    /**
     * @param AccountRequestDTO $accountDTO
     * @return Account
     * @throws \Exception
     */
    public function executeService(AccountRequestDTO $accountDTO) :AccountResponseDTO
    {
        try{
          Log::info('Register User', [
              'Account' => $accountDTO,
          ]);
            $validate =  $this->validateFields($accountDTO);
            if ($validate->fails())
            {
                Log::error($validate->errors(), [
                    'Account' => $accountDTO,
                ]);
            }

            $account = new Account($accountDTO->toArray());
            $registerUser = new AccountResponseDTO($accountDTO);
            $result = $this->registerUserRepository->saveObject($account);
            if ($result)
                $registerUser->statusResponse = true;

            return $registerUser;

        }catch (\Exception $exception){
            Log::error('Error: in User register '. $exception->getMessage(), [
                'User' => $accountDTO,
            ]);
            throw $exception;
        }

    }

   private function validateFields(AccountRequestDTO $accountDTO)
   {
       $validate = Validator::make($accountDTO->toArray(),[
           'name' => 'required',
           'surName' => 'required',
           'email' => 'required|email|unique:accounts',
           'password' => 'required',
           'phone' => 'required',
           'status' => 'required',
           'country' => 'required'
       ]);
     return $validate;
   }
}