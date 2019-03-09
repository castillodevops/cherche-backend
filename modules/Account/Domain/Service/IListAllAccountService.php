<?php
/**
 * Created by PhpStorm.
 * User: nerox
 * Date: 3/9/19
 * Time: 12:35 AM
 */

namespace Modules\Account\Domain\Service;


use Modules\Account\Domain\Model\Input\AccountSearchDTO;
use Modules\Core\Domain\Model\ModelSearchEntity;

interface IListAllAccountService
{
    public function executeService(AccountSearchDTO $userSearchDTO);
}