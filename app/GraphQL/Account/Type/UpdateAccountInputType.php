<?php

namespace App\GraphQL\Account\Type;

use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as BaseType;
use GraphQL;

class UpdateAccountInputType extends BaseType
{
    protected $attributes = [
        'name' => 'UpdateAccountInputType',
        'description' => 'A type'
    ];
    protected $inputObject = true;

    public function fields()
    {
        return [
            'id' => [
                'name' => 'id',
                'type' => Type::nonNull(Type::int()),
                'description' => 'Id of user'
            ],
            'name' => [
                'name' => 'name',
                'type' => Type::string(),
                'description' => 'Name of User'
            ],
            'surName' => [
                'name' => 'surName',
                'type' => Type::string(),
                'description' => 'Sur Name'
            ],
            'phone' => [
                'name' => 'phone',
                'type' => Type::string(),
                'description' => 'Mobile of User'
            ],
            'email' => [
                'name' => 'email',
                'type' => Type::string(),
                'description' => 'Email of User'
            ],
            'password' => [
                'name' => 'password',
                'type' => Type::string(),
                'description' => 'Password of User'
            ],
            'status' => [
                'name' => 'status',
                'type' => GraphQL::type('AccountStatusEnum'),
                'description' => 'Status of User'
            ],
            'country' => [
                'country' => 'country',
                'type' => Type::string(),
                'description' => 'Country of User'
            ]

        ];
    }
}
