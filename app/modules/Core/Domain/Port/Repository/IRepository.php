<?php
/**
 * Created by PhpStorm.
 * User: nerox
 * Date: 2/16/19
 * Time: 4:25 PM
 */

namespace App\modules\Core\Domain\Port\Repository;


use App\modules\Core\Domain\Model\ModelEntity;

interface IRepository
{
    public function basicSaveOne(ModelEntity $entity);
}


