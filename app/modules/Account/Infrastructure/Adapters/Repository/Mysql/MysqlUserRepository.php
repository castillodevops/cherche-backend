<?php
/**
 * Created by PhpStorm.
 * User: nerox
 * Date: 2/16/19
 * Time: 4:39 PM
 */

namespace App\modules\Account\Infrastructure\Adapters\Repository\Mysql;


use App\modules\Account\Domain\Model\User;
use App\modules\Account\Domain\Ports\Repository\IUserRepository;
use App\modules\Core\Domain\Model\ModelEntity;
use App\modules\Core\Infrastructure\Adapter\Repository\Mysql\MysqlRepository;
use Illuminate\Support\Facades\Log;

class MysqlUserRepository extends MysqlRepository implements IUserRepository
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