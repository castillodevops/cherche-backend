<?php
/**
 * Created by PhpStorm.
 * User: nerox
 * Date: 2/16/19
 * Time: 4:16 PM
 */

namespace Modules\Account\Domain\Repository;


use Modules\Account\Domain\Model\User;
use Modules\Core\Domain\Model\ModelEntity;

interface IUserRepository
{
    public function saveObject(User $user);
    public function listAll();
}