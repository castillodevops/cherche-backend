<?php
/**
 * Created by PhpStorm.
 * User: nerox
 * Date: 2/24/19
 * Time: 10:32 PM
 */

namespace Modules\Core\Domain\Model;


use Illuminate\Database\Eloquent\Collection;

class ModelSearchEntity
{
   public  $entity;
   public  $fields;
   public  $andConditions;
   public  $orConditions;
   public $collectionResponse;

   public function __construct(ModelEntity $entity, Array $fields = [], Array $andConditions = [], $orConditions = [])
   {
       $this->entity = $entity;
       $this->fields = $fields;
       $this->andConditions = $andConditions;
       $this->orConditions = $orConditions;
       $this->collectionResponse = new Collection();
   }
}