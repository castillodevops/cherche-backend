<?php

namespace App\GraphQL\Enums\Account\Type;

use App\GraphQL\Core\Type\CoreEnum;
use Modules\Account\Domain\Model\Enum\AccountEnum;

class AccountStatusEnum extends CoreEnum
{
    protected $attributes = [
        'name' => 'AccountStatusEnum',
        'description' => 'An enum'
    ];

    public function values() {
        return [
            'ACTIVE' => AccountEnum::ACTIVE,
            'INACTIVE' => AccountEnum::INACTIVE,
            'PENDING' => AccountEnum::PENDING,
            'TRASH'  => AccountEnum::TRASH,
        ];
    }
}
