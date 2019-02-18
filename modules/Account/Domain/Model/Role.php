<?php
/**
 * Created by PhpStorm.
 * User: nerox
 * Date: 2/17/19
 * Time: 12:05 AM
 */

namespace Modules\Account\Domain\Model;


use Modules\Core\Domain\Model\ModelEntity;

class Role extends ModelEntity
{
    protected $fillable = [
        'name',
        'description'
    ];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function permissions()
    {
        return $this->hasMany(Permission::class);
    }

}