<?php
namespace vendor\core;
use vendor\core\Registry;


class Main
{
    private $di;

    public function __construct()
    {
        $this->di = (new Registry())->createDi();
    }

    /**
     *
     */
    public function run()
    {
        $this->di->router->dispatch($this->di->request->getUri());
    }


}