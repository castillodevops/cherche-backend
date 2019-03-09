<?php
/**
 * Created by PhpStorm.
 * Account: nerox
 * Date: 2/28/19
 * Time: 12:14 AM
 */
namespace Modules\Account\Infrastructure\Service;

use Modules\Account\Domain\Model\Input\AccountDTO;
use Modules\Core\Domain\Service\CoreService;
use Modules\Account\Domain\Model\Account;

class CreateAccountService extends CoreService implements ICreateUserService
{
    public function executeService(AccountDTO $accountDTO)
    {

    }
}