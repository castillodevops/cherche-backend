<?php
/**
 * Created by PhpStorm.
 * User: nerox
 * Date: 3/9/19
 * Time: 11:57 PM
 */

namespace Modules\Account\Infrastructure\Service;


use Illuminate\Support\Facades\Log;
use Modules\Account\Domain\Model\Account;
use Modules\Account\Domain\Repository\IAccountRepository;
use Modules\Account\Domain\Service\IDeleteAccountService;
use Modules\Core\Domain\Service\CoreService;

class DeleteAccountService extends CoreService implements IDeleteAccountService
{

    private $accountRepository;

    public function __construct(IAccountRepository $accountRepository)
    {
        $this->accountRepository = $accountRepository;
    }

    public function executeService($idAccount)
    {
        try {
            Log::info("Action for delete account", [
                'Account Id' => $idAccount
            ]);
            return $this->accountRepository->deleteObject($idAccount);

        } catch (\Exception $exception){
            Log::error("Error: Account not deleted ".$exception->getMessage(), [
                'Account id' => $idAccount
            ]);
        }
    }
}