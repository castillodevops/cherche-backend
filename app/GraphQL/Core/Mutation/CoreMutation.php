<?php
/**
 * Created by PhpStorm.
 * User: nerox
 * Date: 3/5/19
 * Time: 10:26 AM
 */

namespace App\GraphQL\Core\Mutation;


use Folklore\GraphQL\Support\Mutation;

class CoreMutation extends Mutation
{

    public function __construct($attributes = [])
    {
        parent::__construct($attributes);
    }
}