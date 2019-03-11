<?php

namespace App\GraphQL\Account\Type;

use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as BaseType;
use GraphQL;

class ListAllAccountInputType extends BaseType
{
    protected $attributes = [
        'name' => 'ListAllAccountInputType',
        'description' => 'A type'
    ];

    protected $inputObject = true;

    public function fields()
    {
        return [

            'id' => [
                'type' => Type::int(),
                'description' => 'Id of User'
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
