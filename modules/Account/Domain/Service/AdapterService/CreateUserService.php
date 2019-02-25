<?php
/**
 * Created by PhpStorm.
 * User: nerox
 * Date: 2/16/19
 * Time: 5:08 PM
 */

namespace App\modules\Account\Domain\Service\AdapterService;


use Modules\Account\Domain\Model\User;
use Modules\Account\Domain\Ports\Repository\IUserRepository;
use Modules\Core\Domain\Service\CoreService;
use Illuminate\Support\Facades\Log;

class CreateUserService extends CoreService
{

    private $userRepository;

    public function __construct(IUserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function executeService(UserDTO $userDTO)
    {
        try
        {
            Log::info('Create User', [
                "User" => $userDTO,
            ]);

            $userObject = new User($userDTO->toArray());
            $this->userRepository->saveObject($userObject);


        }
        catch (\Exception $exception)
        {
            Log::error($exception->getMessage(), [
               'User' => $userDTO,
            ]);
            throw  $exception;
        }
    }
}