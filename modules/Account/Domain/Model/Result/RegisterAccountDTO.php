<?php
/**
 * Created by PhpStorm.
 * User: nerox
 * Date: 3/7/19
 * Time: 12:40 AM
 */

namespace Modules\Account\Domain\Model\Result;


use Modules\Account\Domain\Model\Input\AccountDTO;

class RegisterAccountDTO
{
    public $accountDTO;
    public $statusResponse;

    public function __construct(AccountDTO $accountDTO, $statusResponse)
    {
        $this->accountDTO = $accountDTO;
        $this->statusResponse = $statusResponse;

    }

    public function toArray(){

        return  $this->accountDTO->toArray() + ['statusResponse' => $this->statusResponse];

        }
}