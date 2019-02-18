<?php
/**
 * Created by PhpStorm.
 * User: nerox
 * Date: 2/17/19
 * Time: 1:22 AM
 */

namespace Modules\Account\Domain\Model\DTO;


class UserFactoryDTO
{

    public $userDTO;
    public $rolId;

    public function __construct(UserDTO $userDTO, $rolId)
    {
        $this->userDTO = $userDTO;
        $this->rolId = $rolId;
    }

    public function toArray()
    {
        return [
            'userDto' => $this->userDTO,
            'rolId' => $this->rolId,
        ];
    }

}