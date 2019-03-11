<?php
/**
 * Created by PhpStorm.
 * User: nerox
 * Date: 3/5/19
 * Time: 2:43 AM
 */

namespace App\GraphQL\Account\Type;

use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as BaseType;
use GraphQL;


class RegisterAccountOutputType extends BaseType
{
    protected $attributes = [
        'name' => 'RegisterAccountOutputType',
        'description' => 'A Register Output Type'
    ];

    public function __construct($attributes = [])
    {
        parent::__construct($attributes);
    }

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