<?php
/**
 * Created by PhpStorm.
 * Account: nerox
 * Date: 2/26/19
 * Time: 11:30 PM
 */
namespace Modules\Account\Domain\Service;


use Modules\Account\Domain\Model\Request\AccountRequestDTO;
use Modules\Account\Domain\Model\Response\AccountResponseDTO;

interface ICreateAccountService
{
    public function executeService(AccountRequestDTO $accountDTO):AccountResponseDTO;
}