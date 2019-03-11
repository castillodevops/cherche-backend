<?php

namespace App\GraphQL\Account\Type;

use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as BaseType;
use GraphQL;

class UpdateAccountOutputType extends BaseType
{
    protected $attributes = [
        'name' => 'UpdateAccountOutputType',
        'description' => 'A type'
    ];

    public function fields()
    {
        return [
            'entityId' =>  [
                'type' => Type::nonNull(Type::int())
            ],
            'response' => [
                'type' => Type::nonNull(Type::boolean()),
            ],
            'errors' => [
                'type' => Type::listOf(Type::string()),
            ],
        ];
    }
}
