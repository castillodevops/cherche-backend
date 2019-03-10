<?php
/**
 * Created by PhpStorm.
 * User: nerox
 * Date: 3/9/19
 * Time: 1:07 AM
 */

namespace Modules\Account\Domain\Model\Request;


use Modules\Account\Domain\Model\Account;

class AccountSearchRequestDTO
{
    private $id;
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




}