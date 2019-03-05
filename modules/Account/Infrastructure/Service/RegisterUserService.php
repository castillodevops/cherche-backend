<?php
/**
 * Created by PhpStorm.
 * User: nerox
 * Date: 3/5/19
 * Time: 3:17 AM
 */
use \Modules\Core\Domain\Service\CoreService;
use \Modules\Account\Domain\Model\Account ;
use \Illuminate\Support\Facades\Log;

class RegisterUserService extends CoreService implements IRegisterUserService
{

    public function __construct()
    {
    }

    public function executeService(Account $account): Account
    {
        try{

        }catch (Exception $exception){
            Log::error('Error: in User register '. $exception->getMessage(), [
                'User' => $account,
            ]);
            throw $exception;
        }

    }
}