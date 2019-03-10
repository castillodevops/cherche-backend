<?php
/**
 * Created by PhpStorm.
 * User: nerox
 * Date: 3/9/19
 * Time: 5:43 PM
 */

namespace Modules\Account\Domain\Service;


interface IDeleteAccountService
{
    public function executeService($idAccount);
}