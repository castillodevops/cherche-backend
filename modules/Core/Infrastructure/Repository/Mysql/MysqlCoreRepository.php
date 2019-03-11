<?php
/**
 * Created by PhpStorm.
 * Account: nerox
 * Date: 2/16/19
 * Time: 4:30 PM
 */

namespace Modules\Core\Infrastructure\Mysql;


use Modules\Core\Domain\Model\ModelEntity;
use Modules\Core\Domain\Model\ModelSearchEntity;
use Illuminate\Support\Facades\Log;
use Modules\Core\Domain\Repository\ICoreRepository;

class MysqlCoreRepository implements ICoreRepository
{
    /**
     * @param ModelEntity $entity
     * @throws \Exception
     */
   public function basicSaveObject(ModelEntity $entity)
   {
       try
       {
          Log::info("Save one entity", [
              'Entity' => $entity,
          ]);
          return $entity->save();
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
    public function basicListAll(ModelSearchEntity $modelSearchEntity)
   {
      try
      {
          Log::info('List of '.$modelSearchEntity->entity->getKeyName(),
              [
                  'Model Output' => $modelSearchEntity,
              ]);
          $response = $modelSearchEntity->entity::all();
          if (count($modelSearchEntity->andConditions) > 0) {
              foreach ($modelSearchEntity->andConditions as $condition){
                  $response = $response->where($condition[0], $condition[1], $condition[2]);
              }
              return $response;
          }
          return $response;

      }
      catch (\Exception $exception)
      {
          throw $exception;
      }
   }

    /**
     * @param ModelEntity $entity
     * @return bool
     * @throws \Exception
     */
   public function basicUpdateObject(ModelEntity $entity)
   {
      try{
          Log::info("Update".$entity->getKeyName(), [
              'Name' => $entity->getKeyName(),
              'Entity' => $entity
          ]);
          return $entity->update();

      } catch (\Exception $exception){
          Log::error($exception->getMessage(), [
              'Name' => $entity->getKeyName(),
              'Entity' => $entity
          ]);

           throw $exception;
      }
   }

    /**
     * @param ModelEntity $entity
     * @return bool|null
     * @throws \Exception
     */
   public function basicDeleteOneObject(ModelEntity $entity)
   {
      try {
          Log::info("Update".$entity->getKeyName(), [
              'Name' => $entity->getKeyName(),
              'Entity' => $entity
          ]);
          return $entity->delete();

      } catch (\Exception$exception) {
          Log::error($exception->getMessage(), [
              'Name' => $entity->getKeyName(),
              'Entity' => $entity
          ]);

          throw $exception;
      }
   }


}