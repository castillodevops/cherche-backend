<?php
/**
 * Created by PhpStorm.
 * Account: nerox
 * Date: 2/26/19
 * Time: 11:30 PM
 */
namespace Modules\Account\Domain\Service;


use Modules\Account\Domain\Model\Request\AccountRequestDTO;

interface ICreateAccountService
{
    public function executeService(AccountRequestDTO $accountDTO);
}