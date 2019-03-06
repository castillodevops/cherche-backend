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

class RegisterUserInputType extends BaseType
{

    protected $inputObject = true;

    protected $attributes = [
        'name' => self::class,
        'description' => 'A type'
    ];

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
            'mobileNumber' => [
                'name' => 'mobileNumber',
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
            'country' => [
                'country' => 'country',
                'type' => Type::nonNull(Type::string()),
                'description' => 'Country of User'
            ]

        ];
    }
}