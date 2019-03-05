<?php
/**
 * Created by PhpStorm.
 * Account: nerox
 * Date: 2/16/19
 * Time: 4:25 PM
 */

namespace Modules\Core\Domain\Port\Repository;


use Modules\Core\Domain\Model\ModelEntity;
use Modules\Core\Domain\Model\ModelSearchEntity;

interface ICoreRepository
{
    public function basicSaveOne(ModelEntity $entity);
    public function listAll(ModelSearchEntity $modelSearchEntity);
}


