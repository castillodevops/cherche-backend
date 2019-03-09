<?php

namespace App\GraphQL\Account\Type;

use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as BaseType;
use GraphQL;

class ListAllAccountInput extends BaseType
{
    protected $attributes = [
        'name' => 'ListAllAccountInput',
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

        ];
    }
}
