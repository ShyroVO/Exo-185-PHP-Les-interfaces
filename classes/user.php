<?php

require('interfaces/UserInterface.php');

class user implements UserInterface
{

    private $request;

    public function __construct() {
        $this->getRequest($_REQUEST);
    }

    public function getRequest($request)
    {
        // TODO: Implement getRequest() method.
        return $this->request;
        
    }

    public function parseRequest()
    {
        // TODO: Implement parseRequest() method.
        
    }
}