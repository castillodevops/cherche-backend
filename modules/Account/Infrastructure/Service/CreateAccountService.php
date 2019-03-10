<?php
/**
 * Created by PhpStorm.
 * Account: nerox
 * Date: 2/28/19
 * Time: 12:14 AM
 */
namespace Modules\Account\Infrastructure\Service;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Modules\Account\Domain\Model\Request\AccountRequestDTO;
use Modules\Account\Domain\Model\Response\AccountResponseDTO;
use Modules\Account\Domain\Repository\IAccountRepository;
use Modules\Account\Domain\Service\ICreateAccountService;
use Modules\Core\Domain\Service\CoreService;
use Modules\Account\Domain\Model\Account;

class CreateAccountService extends CoreService implements ICreateAccountService
{
    private $accountRepository;

    public function __construct(IAccountRepository $accountRepository)
    {
        $this->accountRepository = $accountRepository;
    }

    /**
     * @param AccountRequestDTO $accountDTO
     * @return AccountResponseDTO
     * @throws \Exception
     */
    public function executeService(AccountRequestDTO $accountDTO)
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
            $newAccountResponse = new AccountResponseDTO($accountDTO);
            $result = $this->accountRepository->saveObject($account);
            if ($result)
                $newAccountResponse->statusResponse = true;

            return $newAccountResponse;

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