<?php
/**
 * Created by PhpStorm.
 * User: nerox
 * Date: 3/5/19
 * Time: 3:15 AM
 */
namespace Modules\Account\Domain\Service;

use Modules\Account\Domain\Model\Account;
use Modules\Account\Domain\Model\Input\AccountDTO;
use Modules\Account\Domain\Model\Result\RegisterAccountDTO;

interface IRegisterAccountService
{
    public function executeService(AccountDTO $account): RegisterAccountDTO;
}