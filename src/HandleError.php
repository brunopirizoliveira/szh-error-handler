<?php

namespace SZ\HandleError;
use SZ\Utils\Dictionary\Dictionary;

class HandleError {

    private $dict;

    public function __construct() {
        $this->dict = (new Dictionary())->getErrors();
    }

    public function handleError($serverError)
    {
        $handledError = $this->dict[$serverError];
        

        header("Content-Type: application/json");
        return json_encode($handledError);  
    }

}
