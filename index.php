        <?php
        // put your code here
            require_once 'Model/database.php';
            
            $controller = 'principal';

            // Todo esta lógica hara el papel de un FrontController
            if(!isset($_REQUEST['c']))
            {
                require_once "controllers/$controller.controller.php";
                $controller = ucwords($controller) . 'Controller';
                $controller = new $controller;
                $controller->Index();    
            }
            else
            {
                // Obtenemos el controlador que queremos cargar
                $controller = strtolower($_REQUEST['c']);
                $accion = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'Index';

                // Instanciamos el controlador
                require_once "controllers/$controller.controller.php";
                $controller = ucwords($controller) . 'Controller';
                $controller = new $controller;

                // Llama la accion
                call_user_func( array( $controller, $accion ) );
            }
        ?>
