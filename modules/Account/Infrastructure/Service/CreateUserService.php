<?php
/**
 * Created by PhpStorm.
 * User: nerox
 * Date: 2/28/19
 * Time: 12:14 AM
 */

use Modules\Core\Domain\Service\CoreService;


class CreateUserService extends CoreService implements ICreateUserService
{
    public function executeService(\Modules\Account\Domain\Model\User $user)
    {
        // TODO: Implement executeService() method.
    }
}