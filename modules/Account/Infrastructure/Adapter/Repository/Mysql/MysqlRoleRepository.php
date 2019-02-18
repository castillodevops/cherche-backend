<?php
/**
 * Created by PhpStorm.
 * User: nerox
 * Date: 2/17/19
 * Time: 12:52 AM
 */

namespace Modules\Account\Infrastructure\Adapters\Repository\Mysql;


use Modules\Core\Infrastructure\Adapter\Repository\Mysql\MysqlRepository;
use Modules\Account\Domain\Model\Role;
use Modules\Account\Domain\Ports\Repository\IRoleRepository;

class MysqlRoleRepository extends MysqlRepository implements IRoleRepository
{
public function saveObject(Role $role)
{
    // TODO: Implement saveObject() method.
}
}