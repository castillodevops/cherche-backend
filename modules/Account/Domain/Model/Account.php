<?php
/**
 * Created by PhpStorm.
 * Account: nerox
 * Date: 2/16/19
 * Time: 4:15 PM
 */

namespace Modules\Account\Domain\Model;

use App\User;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Account extends User
{
    use Notifiable;


    private $name;
    private $lastName;
    private $email;
    private $password;
    private $phone;
    private $status;
    private $country;


    public function __construct($name, $lastName, $email, $password, $phone, $status, $country)
    {
        $attributes = [
            $name,
            $lastName,
            $email,
            $password,
            $phone,
            $status,
            $country
        ];
        parent::__construct($attributes);
    }



    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'lastName', 'email', 'password', 'phone', 'status', 'country',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
