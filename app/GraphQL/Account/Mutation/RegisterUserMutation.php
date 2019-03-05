<?php
/**
 * Created by PhpStorm.
 * User: nerox
 * Date: 3/5/19
 * Time: 2:43 AM
 */

namespace App\GraphQL\Account\Mutation;

use App\User;

use ICreateUserService;

use Folklore\GraphQL\Support\Mutation;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use GraphQL;
use Modules\Account\Domain\Model\Account;

class RegisterUserMutation
{
    private $createUserService;
    protected $attributes = [
        'name' => 'RegisterUserMutation',
        'description' => 'A Register User Mutation '
    ];

    public function __construct(ICreateUserService $createUserService)
    {
        $this->createUserService = $createUserService;
    }

    public function type()
    {
        return GraphQL::type('RegisterUserOutput');
    }

    public function args()
    {
        return [
           'request' => [
               'type' => GraphQL::type('RegiterUserInput'),
           ],
        ];
    }

    /**
     * @param $root
     * @param $args
     * @param $context
     * @param ResolveInfo $info
     */
    public function resolve($root, $args, $context, ResolveInfo $info)
    {
        $name = $args['request']['name'];

        $surName = $args['request']['surName'];

        $mobileName = $args['request']['mobileName'];

        $email = $args['request']['email'];

        $password = $args['request']['password'];

        $status = $args['request']['status'];

        $country = $args['request']['country'];

        $user  = new Account(name, $surName, $mobileName, $email, $password, $status, $country);
        $this->createUserService->executeService($user);


    }
}