<?php
/**
 * Created by PhpStorm.
 * User: nerox
 * Date: 3/9/19
 * Time: 6:10 PM
 */

namespace Modules\Account\Infrastructure\Repository\Mysql;


use Illuminate\Support\Facades\Log;
use Modules\Account\Domain\Model\Account;
use Modules\Account\Domain\Model\Request\AccountRequestDTO;
use Modules\Account\Domain\Repository\IAccountRepository;
use Modules\Core\Domain\Model\ModelEntity;
use Modules\Core\Domain\Model\ModelSearchEntity;
use Modules\Core\Domain\Model\Response\EntityResponseDTO;
use Modules\Core\Infrastructure\Mysql\MysqlCoreRepository;

class MysqlAccountRepository extends MysqlCoreRepository implements IAccountRepository
{
    /**
     * @param ModelSearchEntity $modelSearchEntity
     * @return \Illuminate\Database\Eloquent\Collection|ModelEntity[]
     * @throws \Exception
     */
    public function listAll(ModelSearchEntity $modelSearchEntity)
    {

       try
       {
           return parent::basicListAll($modelSearchEntity);

       } catch (\Exception $exception){
           throw $exception;
       }
    }

    /**
     * @param Account $account
     * @return bool
     * @throws \Exception
     */
    public function saveObject(Account $account)
    {
        try {

            return parent::basicSaveObject($account);

        } catch (\Exception $exception) {
            Log::error('Error: '.$exception->getMessage(), [
                'Account' => $account
            ]);
            throw $exception;

        }
    }

    /**
     * @param AccountRequestDTO $accountDTO
     * @param $idAccount
     * @return EntityResponseDTO
     * @throws \Exception
     */
    public function updateObject(AccountRequestDTO $accountDTO, $idAccount)
    {
        $errors = array();
        $accountModel = Account::find($idAccount);
        $responseUpdate = new EntityResponseDTO($idAccount, false, $errors);
        if (!$accountModel){
            $errors['errors'] = "Error: User not found";
            $responseUpdate->errors = $errors;
            return $responseUpdate;
        }
        if (!is_null($accountDTO->name))$accountModel->name = $accountDTO->name;
        if (!is_null($accountDTO->surName))$accountModel->surName = $accountDTO->surName;
        if (!is_null($accountDTO->email))$accountModel->email = $accountDTO->email;
        if (!is_null($accountDTO->phone))$accountModel->phone = $accountDTO->phone;
        if (!is_null($accountDTO->country))$accountModel->country = $accountDTO->country;
        $response = parent::basicUpdateObject($accountModel);
        $responseUpdate->response = $response;

        return $responseUpdate;

    }

    /**
     * @param $idAccount
     * @return EntityResponseDTO
     * @throws \Exception
     */
    public function deleteObject($idAccount)
    {
        $errors = array();
        /**
         * @var Account $account
         */
        $account  = Account::find($idAccount);
        $responseDelete = new EntityResponseDTO($idAccount, false, $errors);
        if (!$account){
            $errors['errors'] = "Error: User not found";
            $responseDelete->errors = $errors;
            return $responseDelete;
        }
        $response = parent::basicDeleteOneObject($account);
        $responseDelete->response = $response;
        return $responseDelete;
    }
}