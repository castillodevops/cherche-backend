<?php
/**
 * Created by PhpStorm.
 * Account: nerox
 * Date: 2/26/19
 * Time: 11:30 PM
 */
namespace Modules\Account\Domain\Service;


use Modules\Account\Domain\Model\Input\AccountDTO;

interface ICreateAccountService
{
    public function executeService(AccountDTO $accountDTO);
}