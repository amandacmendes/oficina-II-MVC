<?php

class Core
{

    public function start($urlGet)
    {
        $action = 'index';

        if (isset($urlGet['page'])) {

            //Recebendo /?page=______ 
            $controller = ucfirst($urlGet['page'] . 'Controller');
        } else {
            $controller = 'HomeController';
        }

        if (!class_exists($controller)) {
            $controller = 'ErrorController';
        }

        //Chamando funcao controller de forma dinamica
        call_user_func_array(array(new $controller, $action), array());
    }
}
