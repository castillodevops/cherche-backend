<?php
/**
 * Created by PhpStorm.
 * Account: nerox
 * Date: 2/16/19
 * Time: 4:25 PM
 */

namespace Modules\Core\Domain\Repository;


use Modules\Account\Domain\Model\Account;
use Modules\Core\Domain\Model\ModelEntity;
use Modules\Core\Domain\Model\ModelSearchEntity;

interface ICoreRepository
{
    public function basicSaveObject(ModelEntity $entity);
    public function basicListAll(ModelSearchEntity $modelSearchEntity);
    public function basicUpdateObject(ModelEntity  $entity);
    public function basicDeleteOneObject(ModelEntity $entity);
}


