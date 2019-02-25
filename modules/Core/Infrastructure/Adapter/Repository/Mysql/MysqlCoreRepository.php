<?php
/**
 * Created by PhpStorm.
 * User: nerox
 * Date: 2/16/19
 * Time: 4:30 PM
 */

namespace Modules\Core\Infrastructure\Adapter\Repository\Mysql;


use Modules\Core\Domain\Model\ModelEntity;
use Modules\Core\Domain\Model\ModelSearchEntity;
use Modules\Core\Domain\Port\Repository\ICoreRepository;
use Illuminate\Support\Facades\Log;

class MysqlCoreRepository implements ICoreRepository
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

    /**
     * @param ModelSearchEntity $modelSearchEntity
     * @return \Illuminate\Database\Eloquent\Collection|ModelEntity[]
     * @throws \Exception
     */
    public function listAll(ModelSearchEntity $modelSearchEntity)
   {
      try
      {
          Log::info('List of '.$modelSearchEntity->entity->getKeyName(),
              [
                  'Model Search' => $modelSearchEntity,
              ]);


          if (count($modelSearchEntity->fields) > 0)
          {
              if (count($modelSearchEntity->andConditions) > 0)
              {
                  if (count($modelSearchEntity->orConditions) > 0)
                  {

                          return $modelSearchEntity->entity::all($modelSearchEntity->fields)
                              ->where($modelSearchEntity->andConditions);

                  }
              }
          }

      }
      catch (\Exception $exception)
      {
          throw $exception;
      }
   }
}