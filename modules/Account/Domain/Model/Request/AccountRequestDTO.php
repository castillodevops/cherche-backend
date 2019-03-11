<?php
/**
 * Created by PhpStorm.
 * User: nerox
 * Date: 3/6/19
 * Time: 2:36 AM
 */

namespace Modules\Account\Domain\Model\Request;


use Modules\Account\Domain\Model\Response\AccountResponseDTO;

class AccountRequestDTO
{
    public  $name;
    public $surName;
    public $email;
    public $password;
    public $phone;
    public $status;
    public $country;



    public function toArray(){
      return [
        'name'     => $this->name,
        'surName'  => $this->surName,
        'email'    => $this->email,
        'password' => $this->password,
        'phone'    => $this->phone,
        'status'   => $this->status,
        'country'  => $this->country
        ];
    }

    public function buildResponseByAttributeName(AccountResponseDTO $registerUserDTO){

        $registerUserDTO->name = $this->name;
        $registerUserDTO->surName = $this->surName;
        $registerUserDTO->email = $this->email;
        $registerUserDTO->password = $this->password;
        $registerUserDTO->phone = $this->phone;
        $registerUserDTO->status = $this->status;
        $registerUserDTO->country = $this->country;

        return $registerUserDTO;
    }
}