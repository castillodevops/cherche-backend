<?php

namespace App\GraphQL\Account\Mutation;

use function Composer\Autoload\includeFile;
use Folklore\GraphQL\Support\Mutation;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use GraphQL;
use Modules\Account\Domain\Model\Request\AccountRequestDTO;
use Modules\Account\Domain\Service\IUpdateAccountService;

class UpdateAccountMutation extends Mutation
{
    protected $attributes = [
        'name' => 'UpdateAccountMutation',
        'description' => 'A mutation'
    ];
    private $updateAccountService;
    private $accountRequestDTO;

    public function __construct($attributes = [], IUpdateAccountService $updateAccountService,
                                AccountRequestDTO $accountRequestDTO)
    {
        parent::__construct($attributes);
        $this->updateAccountService = $updateAccountService;
        $this->accountRequestDTO = $accountRequestDTO;

    }

    public function type()
    {
        return GraphQL::type('UpdateAccountOutputType');
    }

    public function args()
    {
        return [
            'input' => [
                'type' => Type::nonNull(GraphQL::type('UpdateAccountInputType'))
            ]
        ];
    }

    public function resolve($root, $args, $context, ResolveInfo $info)
    {

        $data = $args['input'];

        $idUpdate = $data['id'];

        if (isset($data['name'])) $this->accountRequestDTO->name = $data['name'];
        if (isset($data['surName'])) $this->accountRequestDTO->surName = $data['surName'];
        if (isset($data['email'])) $this->accountRequestDTO->email = $data['email'];
        if (isset($data['password'])) $this->accountRequestDTO->password = $data['password'];
        if (isset($data['phone'])) $this->accountRequestDTO->phone = $data['phone'];
        if (isset($data['status']))  $this->accountRequestDTO->status = $data['status'];
        if (isset($data['country'])) $this->accountRequestDTO->country = $data['country'];

        $response = $this->updateAccountService->executeService($idUpdate, $this->accountRequestDTO)->toArray();
        return $response;
    }
}
