<?php
namespace vendor\core;
use vendor\traits\SingleTone;

class Request
{
    use SingleTone;

    public function getUri()
    {
        return $_SERVER['QUERY_STRING'];
    }
}