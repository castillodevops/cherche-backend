<?php
/**
 * Created by PhpStorm.
 * User: nerox
 * Date: 3/9/19
 * Time: 5:43 PM
 */

namespace Modules\Account\Domain\Service;


use Modules\Core\Domain\Model\Response\EntityResponseDTO;

interface IDeleteAccountService
{
    public function executeService($idAccount):EntityResponseDTO;
}