<?php
/**
 * Created by PhpStorm.
 * User: nerox
 * Date: 3/5/19
 * Time: 3:27 AM
 */
namespace Modules\Account\Infrastructure\Mysql;

use Illuminate\Support\Facades\Log;
use Modules\Account\Domain\Model\Input\AccountDTO;
use \Modules\Account\Domain\Repository\IRegisterUserRepository;
use \Modules\Core\Domain\Model\ModelSearchEntity;
use \Modules\Account\Domain\Model\Account ;
use Modules\Core\Infrastructure\Mysql\MysqlCoreRepository;


class MysqlRegisterUserRepository extends MysqlCoreRepository implements IRegisterUserRepository
{
    /**
     * @param ModelSearchEntity $modelSearchEntity
     * @return \Illuminate\Database\Eloquent\Collection|\Modules\Core\Domain\Model\ModelEntity[]|void
     */
    public function listAll(ModelSearchEntity $modelSearchEntity)
    {
        // TODO: Implement listAll() method.
    }

    /**
     * @param AccountDTO $accountDTO
     * @return Account|null
     */
    public function saveObject(AccountDTO $accountDTO)
    {
        try
        {
            if (!empty($accountDTO)) {

                $user = new Account();
                $user->name = $accountDTO->name;
                $user->surName = $accountDTO->surName;
                $user->email = $accountDTO->email;
                $user->password = $accountDTO->password;
                $user->phone = $accountDTO->phone;
                $user->status = $accountDTO->status;
                $user->save();
                return $user;
            }
            return null;

        }catch (Exception $exception){
            Log::error('Error: '.$exception->getMessage(), [
                'Account' => $user
            ]);
        }

    }
}