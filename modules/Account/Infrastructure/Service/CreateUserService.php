<?php
/**
 * Created by PhpStorm.
 * Account: nerox
 * Date: 2/28/19
 * Time: 12:14 AM
 */

use Modules\Core\Domain\Service\CoreService;
use Modules\Account\Domain\Model\Account;

class CreateUserService extends CoreService implements ICreateUserService
{
    public function executeService(Account $user)
    {
        // TODO: Implement executeService() method.
    }
}