<?php
/**
 * Created by PhpStorm.
 * User: nerox
 * Date: 3/5/19
 * Time: 3:15 AM
 */
namespace Modules\Account\Domain\Service;

use Modules\Account\Domain\Model\Account;
use Modules\Account\Domain\Model\Request\AccountRequestDTO;
use Modules\Account\Domain\Model\Response\AccountResponseDTO;

interface IRegisterAccountService
{
    public function executeService(AccountRequestDTO $account): AccountResponseDTO;
}