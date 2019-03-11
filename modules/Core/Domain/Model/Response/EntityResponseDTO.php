<?php
/**
 * Created by PhpStorm.
 * User: nerox
 * Date: 3/11/19
 * Time: 12:20 AM
 */

namespace Modules\Core\Domain\Model\Response;


use Modules\Core\Domain\Model\ModelEntity;
use phpDocumentor\Reflection\Types\Boolean;

class EntityResponseDTO
{
    public $entityId;
    public $response;
    public $errors;

    public function __construct($entityId, $response, array $errors)
    {
        $this->entityId = $entityId;
        $this->response = $response;
        $this->errors = $errors;
    }
    public function toArray(){
        return [
            'entityId' => $this->entityId,
            'response' => $this->response,
            'errors' => $this->errors,
        ];
    }

}