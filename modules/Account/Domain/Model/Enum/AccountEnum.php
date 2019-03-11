<?php
/**
 * Created by PhpStorm.
 * User: nerox
 * Date: 3/10/19
 * Time: 7:10 PM
 */

namespace Modules\Account\Domain\Model\Enum;


class AccountEnum
{
    /**
     * Status
     */
    const PENDING = 'Pending';
    const ACTIVE  = 'Active';
    const INACTIVE = 'Inactive';
    const TRASH   = 'Trash';

}