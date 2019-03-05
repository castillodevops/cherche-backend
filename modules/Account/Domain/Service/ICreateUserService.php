<?php
/**
 * Created by PhpStorm.
 * Account: nerox
 * Date: 2/26/19
 * Time: 11:30 PM
 */
use Modules\Account\Domain\Model\Account;

interface ICreateUserService
{
    public function executeService(Account $user);
}