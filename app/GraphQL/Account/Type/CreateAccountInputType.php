<?php

namespace App\GraphQL\Account\Type;

use App\GraphQL\Core\Type\CoreInput;
use GraphQL\Type\Definition\Type;
use GraphQL;

class CreateAccountInputType extends CoreInput
{
    protected $attributes = [
        'name' => 'CreateAccountInputType',
        'description' => 'A type'
    ];

    protected $inputObject = true;

    public function fields()
    {
        return [
            'name' => [
                'name' => 'name',
                'type' => Type::nonNull(Type::string()),
                'description' => 'Name of User'
            ],
            'surName' => [
                'name' => 'surName',
                'type' => Type::nonNull(Type::string()),
                'description' => 'Sur Name'
            ],
            'phone' => [
                'name' => 'phone',
                'type' => Type::nonNull(Type::string()),
                'description' => 'Mobile of User'
            ],
            'email' => [
                'name' => 'email',
                'type' => Type::nonNull(Type::string()),
                'description' => 'Email of User'
            ],
            'password' => [
                'name' => 'password',
                'type' => Type::nonNull(Type::string()),
                'description' => 'Password of User'
            ],
            'status' => [
                'name' => 'status',
                'type' => Type::nonNull(GraphQL::type('AccountStatusEnum')),
                'description' => 'Status of User'
            ],
            'country' => [
                'country' => 'country',
                'type' => Type::nonNull(Type::string()),
                'description' => 'Country of User'
            ]

        ];
    }
}
