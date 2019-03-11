<?php
/**
 * Created by PhpStorm.
 * User: nerox
 * Date: 3/9/19
 * Time: 1:07 AM
 */

namespace Modules\Account\Domain\Model\Request;


use Modules\Account\Domain\Model\Account;
use Modules\Core\Domain\Model\ModelTerms;

class AccountSearchRequestDTO
{
    private $id;
    public  $name;
    public $surName;
    public $email;
    public $phone;
    public $status;
    public $country;
    private $model;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param mixed $model
     */
    public function setModel(Account $model): void
    {
        $this->model = $model;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getSurName()
    {
        return $this->surName;
    }

    /**
     * @param mixed $surName
     */
    public function setSurName($surName): void
    {
        $this->surName = $surName;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone): void
    {
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status): void
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param mixed $country
     */
    public function setCountry($country): void
    {
        $this->country = $country;
    }

    public function buildConditions(){
        $andConditions = collect();
        if (!is_null($this->getId())){
            $andConditions->push( [
                'id', ModelTerms::EQ ,$this->getId()
            ]);
        }
        if (!is_null($this->getName())){
            $andConditions->push([
                'name', ModelTerms::EQ ,$this->getName()
            ]);
        }
        if (!is_null($this->getSurName())){
            $andConditions->push( [
                'surName', ModelTerms::EQ ,$this->getSurName()
            ]);
        }
        if (!is_null($this->getEmail())){
            $andConditions->push([
                'email', ModelTerms::EQ ,$this->getEmail()
            ]);
        }
        if (!is_null($this->getPhone())){
            $andConditions->push([
                'phone', ModelTerms::EQ ,$this->getPhone()
            ]);
        }
        if (!is_null($this->getStatus())){
            $andConditions->push([
                'status', ModelTerms::EQ ,$this->getStatus()
            ]);
        }
        if (!is_null($this->getCountry())){
            $andConditions->push([
                'country', ModelTerms::EQ ,$this->getCountry()
            ]);
        }
        return $andConditions->toArray();
    }




}