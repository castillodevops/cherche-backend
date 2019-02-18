<?php
/**
 * Created by PhpStorm.
 * User: nerox
 * Date: 2/17/19
 * Time: 12:06 AM
 */

namespace Modules\Account\Domain\Model;


use Modules\Core\Domain\Model\ModelEntity;

class Permission extends ModelEntity
{
    protected $fillable = [
        'name',
        'description'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function role()
    {
        return $this->belongsTo(Role::class);
    }

}