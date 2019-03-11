<?php

namespace App\GraphQL\Account\Mutation;

use App\GraphQL\Core\Mutation\CoreMutation;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use GraphQL;
use Modules\Account\Domain\Service\IDeleteAccountService;

class DeleteAccountMutation extends CoreMutation
{
    protected $attributes = [
        'name' => 'DeleteAccountMutation',
        'description' => 'A mutation'
    ];
    protected $deleteAccountService;

    public function __construct($attributes = [], IDeleteAccountService $deleteAccountService)
    {
        parent::__construct($attributes);
        $this->deleteAccountService = $deleteAccountService;
    }

    public function type()
    {
        return GraphQL::type('DeleteAccountOutputType');
    }

    public function args()
    {
        return  [
           'input' =>[
               'type' => Type::nonNull(GraphQL::type('DeleteAccountInputType'))
           ]
        ];
    }

    public function resolve($root, $args, $context, ResolveInfo $info)
    {
        $idAccountForDelete = $args['input']['idAccountForDelete'];
        return $this->deleteAccountService->executeService($idAccountForDelete);
    }
}
