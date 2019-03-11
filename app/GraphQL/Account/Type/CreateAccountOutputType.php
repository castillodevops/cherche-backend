<?php

namespace App\GraphQL\Account\Type;

use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as BaseType;
use GraphQL;

class CreateAccountOutputType extends BaseType
{
    protected $attributes = [
        'name' => 'CreateAccountOutputType',
        'description' => 'A type'
    ];

    public function fields()
    {
        return [
            'name' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'Name of User'
            ],
            'surName' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'Sur Name'
            ],
            'phone' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'Mobile of User'
            ],
            'email' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'Email of User'
            ],
            'password' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'Password of User'
            ],
            'status' => [
                'type' => Type::nonNull(GraphQL::type('AccountStatusEnum')),
                'description' => 'Status of User'
            ],
            'country' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'Country of User'
            ],
            'statusResponse' => [
                'type' => Type::nonNull(Type::boolean()),
                'description' => 'State of Response'
            ],

        ];
    }
}
