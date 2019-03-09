<?php
/**
 * Created by PhpStorm.
 * User: nerox
 * Date: 3/5/19
 * Time: 3:27 AM
 */
namespace Modules\Account\Infrastructure\Mysql;

use Illuminate\Support\Facades\Log;
use \Modules\Account\Domain\Repository\IRegisterAccountRepository;
use \Modules\Core\Domain\Model\ModelSearchEntity;
use \Modules\Account\Domain\Model\Account ;
use Modules\Core\Infrastructure\Mysql\MysqlCoreRepository;


class MysqlRegisterAccountRepository extends MysqlCoreRepository implements IRegisterAccountRepository
{
    /**
     * @param ModelSearchEntity $modelSearchEntity
     * @return \Illuminate\Database\Eloquent\Collection|\Modules\Core\Domain\Model\ModelEntity[]
     * @throws \Exception
     */
    public function listAll(ModelSearchEntity $modelSearchEntity)
    {
        try {
            Log::info('List All User', [
                'Entity' => $modelSearchEntity->entity
            ]);

            return parent::listAll($modelSearchEntity);

        } catch (\Exception $exception){
            Log::error($exception->getMessage(),[
                'Entity' =>$modelSearchEntity->entity
                ]
            );
            throw $exception;
        }

    }

    /**
     * @param Account $account
     * @return bool
     */
    public function saveObject(Account $account)
    {
        try
        {
         return parent::basicSaveOne($account);

        }catch (\Exception $exception){
            Log::error('Error: '.$exception->getMessage(), [
                'Account' => $account
            ]);
        }

    }
}