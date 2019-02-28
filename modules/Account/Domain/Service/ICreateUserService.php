<?php
/**
 * Created by PhpStorm.
 * User: nerox
 * Date: 2/26/19
 * Time: 11:30 PM
 */
use Modules\Account\Domain\Model\User;

interface ICreateUserService
{
    public function executeService(User $user);
}