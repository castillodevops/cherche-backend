<?php
/**
 * Created by PhpStorm.
 * User: nerox
 * Date: 3/6/19
 * Time: 2:36 AM
 */

namespace Modules\Account\Domain\Model\Input;


class AccountDTO
{
    public $name;
    public $surName;
    public $email;
    public $password;
    public $phone;
    public $status;
    public $country;

    public function __construct($name, $surName, $email, $password, $phone, $status, $country)
    {
        $this->name = $name;
        $this->surName = $surName;
        $this->email = $email;
        $this->password = $password;
        $this->phone = $phone;
        $this->status = $status;
        $this->country = $country;
    }

    public function toArray(){
      return [
        $this->name,
        $this->surName,
        $this->email,
        $this->password,
        $this->phone,
        $this->status,
        $this->country
        ];
    }
}