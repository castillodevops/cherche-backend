<?php
/**
 * Created by PhpStorm.
 * User: nerox
 * Date: 2/16/19
 * Time: 4:39 PM
 */

namespace Modules\Account\Infrastructure\Adapters\Repository\Mysql;


use Modules\Account\Domain\Model\User;
use Modules\Account\Domain\Ports\Repository\IUserRepository;
use Modules\Core\Domain\Model\ModelEntity;
use Modules\Core\Infrastructure\Adapter\Repository\Mysql\MysqlCoreRepository;
use Illuminate\Support\Facades\Log;

class MysqlUserRepository extends MysqlCoreRepository implements IUserRepository
{
    public function saveObject(User $user)
    {
         try
         {
            $this->basicSaveOne($user);
         }
         catch (\Exception $exception)
         {
             Log::error('User not inserted : '.$exception->getMessage(), [
                 'User' => $user,
             ]);
              throw $exception;
         }
    }
}