<?php

namespace App\GraphQL\Account\Query;

use App\GraphQL\Core\Query\CoreQuery;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use GraphQL;
use Modules\Account\Domain\Model\Request\AccountSearchRequestDTO;
use Modules\Account\Domain\Service\IListAllAccountService;

class ListAllAccountQuery extends CoreQuery
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
        return Type::listOf(GraphQL::type('ListAllAccountOutputType'));

    }

    public function args()
    {
        return [
            'input' => [
                'type' => Type::nonNull(GraphQL::type('ListAllAccountInputType')),
                'description' => 'List all user'
            ],
        ];
    }

    public function resolve($root, $args, $context, ResolveInfo $info)
    {
        $data = $args['input'];
        $accountSearchDTO = new AccountSearchRequestDTO();
        if ($data['id'] != null)
            $accountSearchDTO->setId($data['id']);

        $listofUsers = $this->listAllAccountService->executeService($accountSearchDTO);
        return $listofUsers;
    }
}
