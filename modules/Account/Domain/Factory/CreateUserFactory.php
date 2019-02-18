<?php
/**
 * Created by PhpStorm.
 * User: nerox
 * Date: 2/17/19
 * Time: 1:02 AM
 */

namespace Modules\Account\Domain\Factory;

use Illuminate\Support\Facades\Log;
use Modules\Account\Domain\Model\DTO\UserFactoryDTO;
use Modules\Core\Domain\Factory\CoreFactory;

class CreateUserFactory extends CoreFactory
{
    public function executeFactory(UserFactoryDTO $userFactoryDTO)
    {
       try
       {
           //TODO:add logic for factory
       }
       catch (\Exception $exception)
       {
           Log::error('Error: CreateUserFactory '.$exception->getMessage(), [
               'UserFactoryDTO' => $userFactoryDTO,
           ]);
           throw $exception;
       }
    }
}