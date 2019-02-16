<?php
/**
 * Created by PhpStorm.
 * User: nerox
 * Date: 2/16/19
 * Time: 4:15 PM
 */

namespace App\modules\Account\Domain\Model;


use App\modules\Core\Domain\Model\ModelEntity;

class User extends ModelEntity
{
    protected $fillable = [
        'name',
        'lastName',
        'email',
        'phone',
        'country',
        'status'
    ];

}