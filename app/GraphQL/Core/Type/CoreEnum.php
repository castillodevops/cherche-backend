<?php

namespace App\GraphQL\Core\Type;

use Folklore\GraphQL\Support\EnumType;

abstract class CoreEnum extends EnumType
{
    protected $enumObject = true;
    protected $inputObject = true;
    public function __construct($attributes = [])
    {
        parent::__construct($attributes);
    }
}
