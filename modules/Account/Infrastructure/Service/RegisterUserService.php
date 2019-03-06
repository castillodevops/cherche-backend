<?php
/**
 * Created by PhpStorm.
 * User: nerox
 * Date: 3/5/19
 * Time: 3:17 AM
 */
namespace Modules\Account\Infrastructure\Service;

use Modules\Account\Domain\Model\Input\AccountDTO;
use Modules\Account\Domain\Repository\IRegisterUserRepository;
use Modules\Account\Domain\Service\IRegisterUserService;
use \Modules\Core\Domain\Service\CoreService;
use \Modules\Account\Domain\Model\Account ;
use \Illuminate\Support\Facades\Log;

class RegisterUserService extends CoreService implements IRegisterUserService
{
    private $registerUserRepository;

    public function __construct(IRegisterUserRepository $registerUserRepository)
    {
        parent::__construct();
        $this->registerUserRepository = $registerUserRepository;
    }

    /**
     * @param AccountDTO $accountDTO
     * @return Account
     * @throws \Exception
     */
    public function executeService(AccountDTO $accountDTO)
    {
        try{
          Log::info('Register User', [
              'Account' => $accountDTO,
          ]);
           //TODO: validate data
           $user = $this->registerUserRepository->saveObject($accountDTO);
            return $user;

        }catch (\Exception $exception){
            Log::error('Error: in User register '. $exception->getMessage(), [
                'User' => $accountDTO,
            ]);
            throw $exception;
        }

    }
}