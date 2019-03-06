<?php
/**
 * Created by PhpStorm.
 * Account: nerox
 * Date: 2/16/19
 * Time: 4:16 PM
 */

namespace Modules\Account\Domain\Repository;


use Modules\Account\Domain\Model\Account;
use Modules\Core\Domain\Model\ModelEntity;

interface IUserRepository
{
    public function saveObject(Account $user);
    public function listAll();
}