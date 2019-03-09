<?php

namespace App\GraphQL\Account\Query;

use App\GraphQL\Account\Type\ListAllAccountInput;
use App\GraphQL\Account\Type\ListAllAccountOutput;
use Folklore\GraphQL\Support\Query;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use GraphQL;
use Modules\Account\Domain\Model\Input\AccountSearchDTO;
use Modules\Account\Domain\Service\IListAllAccountService;

class ListAllAccountQuery extends Query
{
    protected $attributes = [
        'name' => 'ListAllAccountQuery',
        'description' => 'A query'
    ];

    private $listAllAccountService;

    public function __construct($attributes = [], IListAllAccountService $listAllAccountService)
    {
        parent::__construct($attributes);
        $this->listAllAccountService = $listAllAccountService;
    }

    public function type()
    {
        return Type::listOf(GraphQL::type('ListAllAccountOutput'));

    }

    public function args()
    {
        return [
            'input' => [
                'type' => Type::nonNull(GraphQL::type('ListAllAccountInput')),
                'description' => 'List all user'
            ],
        ];
    }

    public function resolve($root, $args, $context, ResolveInfo $info)
    {
        $data = $args['input'];
        $accountSearchDTO = new AccountSearchDTO();
        if ($data['id'] != null)
            $accountSearchDTO->setId($data['id']);

        $listofUsers = $this->listAllAccountService->executeService($accountSearchDTO);
        return $listofUsers;
    }
}
