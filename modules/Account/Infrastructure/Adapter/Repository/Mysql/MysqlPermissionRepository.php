<?php
/**
 * Created by PhpStorm.
 * User: nerox
 * Date: 2/17/19
 * Time: 12:52 AM
 */

namespace Modules\Account\Infrastructure\Adapters\Repository\Mysql;


use Modules\Core\Infrastructure\Adapter\Repository\Mysql\MysqlRepository;
use Modules\Account\Domain\Model\Permission;
use Modules\Account\Domain\Ports\Repository\IPermissionRepository;

class MysqlPermissionRepository extends MysqlRepository implements IPermissionRepository
{
public function saveObject(Permission $permission)
{
    // TODO: Implement saveObject() method.
}
}