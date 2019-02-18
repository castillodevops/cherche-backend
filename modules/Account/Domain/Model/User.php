<?php
/**
 * Created by PhpStorm.
 * User: nerox
 * Date: 2/16/19
 * Time: 4:15 PM
 */

namespace Modules\Account\Domain\Model;


use Modules\Core\Domain\Model\ModelEntity;

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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function role()
    {
        return $this->belongsTo(Role::class);
    }

}