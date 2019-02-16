<?php
/**
 * Created by PhpStorm.
 * User: nerox
 * Date: 2/16/19
 * Time: 4:16 PM
 */

namespace App\modules\Account\Domain\Ports\Repository;


use App\modules\Account\Domain\Model\User;
use App\modules\Core\Domain\Model\ModelEntity;

interface IUserRepository
{
    public function saveObject(User $user);
}