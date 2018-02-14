<?php

namespace SODRP\Response;

class ResponseAbstract
{
    /**
     * @var array
     */
    protected $response;

    public function __construct(array $response)
    {
        $this->response = $response;
    }
}