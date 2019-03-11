<?php

namespace App\GraphQL\Account\Type;

use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as BaseType;
use GraphQL;

class DeleteAccountOutputType extends BaseType
{
    protected $attributes = [
        'name' => 'DeleteAccountOutputType',
        'description' => 'A type'
    ];

    public function fields()
    {
        return [
           'idEntity' =>  [
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
