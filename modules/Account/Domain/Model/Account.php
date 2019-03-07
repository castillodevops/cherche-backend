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
use Modules\Core\Domain\Model\ModelEntity;

/**
 * @property  name
 */
class Account extends ModelEntity
{
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'surName', 'email', 'password', 'phone', 'status', 'country',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }
}
