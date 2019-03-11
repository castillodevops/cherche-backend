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

        ];
    }
}
