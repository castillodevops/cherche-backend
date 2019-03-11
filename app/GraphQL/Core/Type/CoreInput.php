<?php

namespace App\GraphQL\Core\Type;

use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as BaseType;
use GraphQL;

abstract class CoreInput extends BaseType
{
    protected $inputObject = true;
    protected $enumObject = true;
    public function __construct($attributes = [])
    {
        parent::__construct($attributes);
    }
}
