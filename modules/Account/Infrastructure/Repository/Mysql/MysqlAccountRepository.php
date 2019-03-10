<?php
/**
 * Created by PhpStorm.
 * User: nerox
 * Date: 3/9/19
 * Time: 6:10 PM
 */

namespace Modules\Account\Infrastructure\Repository\Mysql;


use Modules\Account\Domain\Model\Account;
use Modules\Account\Domain\Model\Request\AccountRequestDTO;
use Modules\Account\Domain\Repository\IAccountRepository;
use Modules\Core\Domain\Model\ModelEntity;
use Modules\Core\Domain\Model\ModelSearchEntity;
use Modules\Core\Infrastructure\Mysql\MysqlCoreRepository;

class MysqlAccountRepository extends MysqlCoreRepository implements IAccountRepository
{
    public function listAll(ModelSearchEntity $modelSearchEntity)
    {
       return parent::listAll($modelSearchEntity);
    }

    /**
     * @param Account $account
     * @throws \Exception
     */
    public function saveObject(Account $account)
    {
        try {
            parent::basicSaveObject($account);
        } catch (\Exception $e) {
             throw $e;
        }
    }

    /**
     * @param AccountRequestDTO $accountDTO
     * @param $idAccount
     * @return bool
     * @throws \Exception
     */
    public function updateObject(AccountRequestDTO $accountDTO, $idAccount)
    {
        $accountModel = Account::find($idAccount);
        if (!is_null($accountDTO->name))$accountModel->name = $accountDTO->name;
        if (!is_null($accountDTO->surName))$accountModel->surName = $accountDTO->surName;
        if (!is_null($accountDTO->email))$accountModel->email = $accountDTO->email;
        if (!is_null($accountDTO->phone))$accountModel->phone = $accountDTO->phone;
        if (!is_null($accountDTO->country))$accountModel->country = $accountDTO->country;

        return parent::basicUpdateObject($accountModel);

    }

    /**
     * @param ModelEntity $entity
     * @return bool|null
     * @throws \Exception
     */
    public function deleteObject($idAccount)
    {
        $account  = Account::find($idAccount);
        return parent::basicDeleteOneObject($account);
    }
}