<?php
/**
 * Created by PhpStorm.
 * User: nerox
 * Date: 3/5/19
 * Time: 3:25 AM
 */

namespace Modules\Account\Domain\Repository;


use Modules\Account\Domain\Model\Account;
use Modules\Account\Domain\Model\Input\AccountDTO;
use Modules\Core\Domain\Model\ModelSearchEntity;

interface IRegisterUserRepository
{
    public function saveObject(AccountDTO $accountDTO);
    public function listAll(ModelSearchEntity $modelSearchEntity);
}