<?php
/**
 * Created by PhpStorm.
 * User: nerox
 * Date: 3/5/19
 * Time: 3:27 AM
 */
namespace Mudules\Account\Infrastructure\Respository\Mysql;

use Illuminate\Support\Facades\Log;
use \Modules\Core\Infrastructure\Adapter\Repository\Mysql\MysqlCoreRepository;
use \Modules\Account\Domain\Repository\IRegisterUserRepository;
use \Modules\Core\Domain\Model\ModelSearchEntity;
use \Modules\Account\Domain\Model\Account ;

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
     * @param \Modules\Account\Domain\Model\Account $user
     * @return \Modules\Account\Domain\Model\Account
     * @throws Exception
     */
    public function saveObject(Account $user)
    {
        try
        {
            if (!empty($user)) {
                $this->basicSaveOne($user);
            }
            return $user;
        }catch (Exception $exception){
            Log::error('Error: '.$exception->getMessage(), [
                'Account' => $user
            ]);
        }

    }
}