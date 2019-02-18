<?php
/**
 * Created by PhpStorm.
 * User: nerox
 * Date: 2/16/19
 * Time: 5:14 PM
 */

namespace Modules\Account\Domain\Model\DTO;


class UserDTO
{
    public $name;
    public $lastName;
    public $email;
    public $phone;
    public $country;
    public $status;

    public function __construct($name, $lastName, $email, $phone, $country, $status)
    {
        $this->name= $name;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->country = $country;
        $this->status = $status;
    }

    public function toArray()
    {
        return [
            $this->name, $this->lastName, $this->email,
            $this->phone, $this->country, $this->status
        ];
    }
}