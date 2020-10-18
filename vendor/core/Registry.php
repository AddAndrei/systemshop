<?php
namespace vendor\core;

/**
 * Регитср зависимостей
 * Class Registry
 * @package vendor\core
 */
class Registry
{
    public $classes;

    public $classesArray;

    public function __construct()
    {
        $this->classesArray = require $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'registry.php';

        $this->classes =  new \stdClass();
    }

    /**
     * @return \stdClass
     */
    public function createDi()
    {
        foreach($this->classesArray as $k => $class)
        {
            if( class_exists( $class )) {
                if ( method_exists ($class, 'instance')){
                    $this->classes->$k = $class::instance();
                }
                $this->classes->$k = new $class();
            }
        }
        return $this->classes;
    }


}