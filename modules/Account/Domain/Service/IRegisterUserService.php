<?php
/**
 * Created by PhpStorm.
 * User: nerox
 * Date: 3/5/19
 * Time: 3:15 AM
 */
use \Modules\Account\Domain\Model\Account;

interface IRegisterUserService
{
    public function executeService(Account $account): Account;
}