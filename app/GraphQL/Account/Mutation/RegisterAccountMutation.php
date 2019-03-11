<?php
/**
 * Created by PhpStorm.
 * User: nerox
 * Date: 3/5/19
 * Time: 2:43 AM
 */

namespace App\GraphQL\Account\Mutation;

use App\GraphQL\Core\Mutation\CoreMutation;
use App\GraphQL\Enums\Account\Type\AccountStatusEnum;
use GraphQL;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;


use Modules\Account\Domain\Model\Enum\AccountEnum;
use Modules\Account\Domain\Model\Request\AccountRequestDTO;
use Modules\Account\Domain\Service\IRegisterAccountService;



class RegisterAccountMutation extends CoreMutation
{


    protected $attributes = [
        'name' => 'RegisterAccountMutation',
        'description' => 'A Register User Mutation '
    ];

    private $registerUserService;
    private $accountRequestDTO;

    public function __construct($attributes = [], IRegisterAccountService $registerUserService, AccountRequestDTO $accountRequestDTO)
    {
        parent::__construct($attributes);
        $this->registerUserService = $registerUserService;
        $this->accountRequestDTO = $accountRequestDTO;
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

        $this->accountRequestDTO->name = $data['name'];
        $this->accountRequestDTO->surName = $data['surName'];
        $this->accountRequestDTO->email = $data['email'];
        $this->accountRequestDTO->password = $data['password'];
        $this->accountRequestDTO->phone = $data['phone'];
        $this->accountRequestDTO->status = AccountEnum::PENDING;
        $this->accountRequestDTO->country = $data['country'];

        $response = $this->registerUserService->executeService($this->accountRequestDTO)->toArray();
        return $response;

    }
}