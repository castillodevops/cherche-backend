<?php

namespace App\GraphQL\Account\Type;

use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as BaseType;
use GraphQL;

class DeleteAccountInputType extends BaseType
{
    protected $attributes = [
        'name' => 'DeleteAccountInputType',
        'description' => 'A type'
    ];
    protected $inputObject = true;

    public function fields()
    {
        return [
            'idAccountForDelete' => [
               'type' => Type::nonNull(Type::int()),
                'description' => 'Id Account for Delete',
            ],
        ];
    }
}
