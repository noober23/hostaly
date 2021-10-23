<?php
    $controllerFile ="Controllers/".$controller.".php";
    if(file_exists($controllerFile))
    {
        require_once($controllerFile);
        $controller= new $controller();
        if (method_exists($controller,$method)){
            $controller->{$method}($param);
        }
        else{
            require_once("Controllers/Errors.php");
            echo "no existe el metodo";
        }

    }
    else{
        require_once("Controllers/Errors.php");
        echo "no existe controlador";
    }