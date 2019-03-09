<?php
/**
 * Created by PhpStorm.
 * User: nerox
 * Date: 3/9/19
 * Time: 12:36 AM
 */

namespace Modules\Account\Infrastructure\Service;


use Illuminate\Support\Facades\Log;
use Modules\Account\Domain\Model\Account;
use Modules\Account\Domain\Model\Input\AccountSearchDTO;
use Modules\Account\Domain\Repository\IRegisterAccountRepository;
use Modules\Account\Domain\Service\IListAllAccountService;
use Modules\Core\Domain\Model\ModelSearchEntity;
use Modules\Core\Domain\Service\CoreService;

class ListAllAccountService extends CoreService implements IListAllAccountService
{
    private $registerUserRepository;
    private $account;


    public function __construct(IRegisterAccountRepository $registerUserRepository, Account $account)
    {
        parent::__construct();
        $this->registerUserRepository = $registerUserRepository;
        $this->account = $account;
    }

    /**
     * @param AccountSearchDTO $userSearchDTO
     * @return mixed
     * @throws \Exception
     */
    public function executeService(AccountSearchDTO $userSearchDTO)
    {
        try
        {
            Log::info('Lis all user', [
                'InputSearch' => $userSearchDTO
            ]);
            $userSearchDTO->setModel($this->account);
            $modelSearchEntity = new ModelSearchEntity($userSearchDTO->getModel());
            return $this->registerUserRepository->listAll($modelSearchEntity);

        } catch (\Exception $exception){
            Log::error($exception->getMessage(), [
                'InputSearch' => $userSearchDTO
            ]);
            throw $exception;
        }
    }
}