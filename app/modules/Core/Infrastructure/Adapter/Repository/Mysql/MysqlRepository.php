<?php
/**
 * Created by PhpStorm.
 * User: nerox
 * Date: 2/16/19
 * Time: 4:30 PM
 */

namespace App\modules\Core\Infrastructure\Adapter\Repository\Mysql;


use App\modules\Core\Domain\Model\ModelEntity;
use App\modules\Core\Domain\Port\Repository\IRepository;
use Illuminate\Support\Facades\Log;

class MysqlRepository implements IRepository
{
    /**
     * @param ModelEntity $entity
     * @throws \Exception
     */
   public function basicSaveOne(ModelEntity $entity)
   {
       try
       {
          Log::info("Save one entity", [
              'Entity' => $entity,
          ]);
          $entity->save();
       }
       catch (\Exception $exception)
       {

           Log::error($exception->getMessage(),[
               'Entity' => $entity,
           ]);
           throw $exception;
       }
   }
}