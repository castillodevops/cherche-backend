<?php
/**
 * Created by PhpStorm.
 * User: nerox
 * Date: 2/17/19
 * Time: 12:51 AM
 */

namespace Modules\Account\Domain\Ports\Repository;


use Modules\Account\Domain\Model\Permission;

interface IPermissionRepository
{
    public function saveObject(Permission $permission);
}