<?php

namespace App\GraphQL\Account\Mutation;

use App\GraphQL\Core\Mutation\CoreMutation;
use Folklore\GraphQL\Support\Mutation;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use GraphQL;
use Modules\Account\Domain\Model\Request\AccountRequestDTO;
use Modules\Account\Domain\Service\ICreateAccountService;

class CreateAccountMutation extends CoreMutation
{
    protected $attributes = [
        'name' => 'CreateAccountMutation',
        'description' => 'A mutation'
    ];
    private $createAccountService;
    private $accountRequestDTO;

    public function __construct($attributes = [], ICreateAccountService $createAccountService, AccountRequestDTO $accountRequestDTO)
    {
        parent::__construct($attributes);
        $this->createAccountService = $createAccountService;
        $this->accountRequestDTO = $accountRequestDTO;
    }

    public function type()
    {
        return GraphQL::type('CreateAccountOutputType');
    }

    public function args()
    {
        return [
            'input' => [
                'type' => Type::nonNull(GraphQL::type('CreateAccountInputType'))
            ]
        ];
    }

    public function resolve($root, $args, $context, ResolveInfo $info)
    {
        $data = $args['input'];

        $this->accountRequestDTO->name = $data['name'];
        $this->accountRequestDTO->surName = $data['surName'];
        $this->accountRequestDTO->email = $data['email'];
        $this->accountRequestDTO->password = $data['password'];
        $this->accountRequestDTO->phone = $data['phone'];
        $this->accountRequestDTO->status = $data['status'];
        $this->accountRequestDTO->country = $data['country'];

        $response = $this->createAccountService->executeService($this->accountRequestDTO)->toArray();
        return $response;
    }
}
