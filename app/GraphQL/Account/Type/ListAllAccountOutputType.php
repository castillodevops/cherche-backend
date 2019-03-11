<?php

namespace App\GraphQL\Account\Type;

use App\GraphQL\Core\Type\CoreOutput;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as BaseType;
use GraphQL;


class ListAllAccountOutputType extends BaseType
{
    protected $attributes = [
        'name' => 'ListAllAccountOutputType',
        'description' => 'A type'
    ];

    public function fields()
    {
        return [

            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'Id of account',
            ],
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
            'status' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'Status of User'
            ],
            'country' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'Country of User'
            ],

        ];
    }
}
