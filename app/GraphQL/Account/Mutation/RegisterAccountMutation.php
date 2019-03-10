<?php
/**
 * Created by PhpStorm.
 * User: nerox
 * Date: 3/5/19
 * Time: 2:43 AM
 */

namespace App\GraphQL\Account\Mutation;

use App\GraphQL\Account\Type\RegisterAccountInputType;
use App\GraphQL\Core\Mutation\CoreMutation;
use GraphQL;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;

use Modules\Account\Domain\Model\Account;
use Modules\Account\Domain\Model\Request\AccountRequestDTO;
use Modules\Account\Domain\Service\IRegisterAccountService;



class RegisterAccountMutation extends CoreMutation
{


    protected $attributes = [
        'name' => 'RegisterAccountMutation',
        'description' => 'A Register User Mutation '
    ];

    private $registerUserService;

    public function __construct($attributes = [], IRegisterAccountService $registerUserService)
    {
        parent::__construct($attributes);
        $this->registerUserService = $registerUserService;
    }

    public function type()
    {
        return GraphQL::type('RegisterAccountOutputType');
    }

    public function args()
    {
        return [
            'input' => [
               'type' => Type::nonNull(GraphQL::type('RegisterAccountInputType'))
            ],
        ];
    }

    /**
     * @param $root
     * @param $args
     * @param $context
     * @param ResolveInfo $info
     * @return array
     */
    public function resolve($root, $args, $context, ResolveInfo $info)
    {
        $data = $args['input'];

        $name = $data['name'];

        $surName = $data['surName'];

        $email = $data['email'];

        $password = $data['password'];

        $phone = $data['phone'];

        $status = "Pending";

        $country = $data['country'];

        $accountDTO  = new AccountRequestDTO($name, $surName, $email, $password, $phone, $status, $country);

        $response = $this->registerUserService->executeService($accountDTO)->toArray();
        return $response;

    }
}