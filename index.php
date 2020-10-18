<?php
use vendor\core\Main;

/**
 * Автозагрузка
 */
spl_autoload_register(function ($class){
    $path = str_replace('\\','/',__DIR__ . DIRECTORY_SEPARATOR . $class . '.php');
    if ( is_file($path) ) {
        include $path;
    }
});

//$main = new Main();
(new Main())->run();
//$main->run();
//debug($main);



function debug($arr)
{
    echo "<pre>" . print_r($arr, true) . "</pre>";
}





