<?php
/**
 * Created by PhpStorm.
 * User: nerox
 * Date: 3/18/19
 * Time: 10:55 PM
 */

namespace Modules\Property\Infrastructure\Repository\Mysql;


use Modules\Core\Infrastructure\Mysql\MysqlCoreRepository;
use Modules\Property\Domain\Repository\IPropertyRepository;

class MysqlPropertyRepository extends MysqlCoreRepository implements IPropertyRepository
{

}