<?php
/**
 * Created by PhpStorm.
 * Account: nerox
 * Date: 2/16/19
 * Time: 4:16 PM
 */

namespace Modules\Account\Domain\Repository;


use Modules\Account\Domain\Model\Account;
use Modules\Account\Domain\Model\Request\AccountRequestDTO;
use Modules\Core\Domain\Model\ModelEntity;
use Modules\Core\Domain\Model\ModelSearchEntity;

interface IAccountRepository
{
    public function saveObject(Account $user);
    public function listAll(ModelSearchEntity $modelSearchEntity);
    public function updateObject(AccountRequestDTO $accountDTO, $idAccount);
    public function deleteObject($idAccount);

}