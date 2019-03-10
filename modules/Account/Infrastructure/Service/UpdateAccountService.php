<?php
/**
 * Created by PhpStorm.
 * User: nerox
 * Date: 3/9/19
 * Time: 11:57 PM
 */

namespace Modules\Account\Infrastructure\Service;


use Illuminate\Support\Facades\Log;
use Modules\Account\Domain\Model\Request\AccountRequestDTO;
use Modules\Account\Domain\Repository\IAccountRepository;
use Modules\Account\Domain\Service\IUpdateAccountService;
use Modules\Core\Domain\Service\CoreService;

class UpdateAccountService extends CoreService implements IUpdateAccountService
{
    private $accountRepository;
    public function __construct(IAccountRepository $accountRepository)
    {
        $this->accountRepository = $accountRepository;
    }

    /**
     * @param $idAccount
     * @param AccountRequestDTO $accountRequestDTO
     * @throws \Exception
     */
    public function executeService($idAccount, AccountRequestDTO $accountRequestDTO)
    {
        try{
            Log::error("Update account", [
                'idAccount' => $idAccount,
                'accountRequestDTO' => $accountRequestDTO
            ]);
           return $this->accountRepository->updateObject($accountRequestDTO, $idAccount);

        } catch (\Exception $exception){
            Log::error("Error user not updated => ".$exception->getMessage(), [
                'idAccount' => $idAccount,
                'accountRequestDTO' => $accountRequestDTO
            ]);

            throw $exception;
        }


    }
}