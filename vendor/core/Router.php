<?php
namespace vendor\core;
use vendor\traits\SingleTone;

class Router
{
    use SingleTone;


    public function dispatch($uri)
    {
        echo $uri;
    }
}