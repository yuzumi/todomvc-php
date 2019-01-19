<?php

    class Bootstrap {
        public function __construct() {
            $url = $this->urlArgs();

            if (empty($url[0])) {
                require_once("controllers/todos.php");

                (new Todos())->get();

                return false;
            }

            $file_name = "controllers/{$url[0]}.php";

            if ( ! file_exists($file_name)) {
                echo "File does not exist";

                return false;
            }

            require_once($file_name);

            $ct_name = ucfirst($url[0]);
            $controller = new $ct_name;

            if (empty($url[1])) {
                $controller->get();

                return false;
            }

            $action_name = $url[1] ?? null;

            if ($action_name && method_exists($controller, $action_name)) {
                if (empty($url[2])) {
                    $controller->{$action_name}();
                } else {
                    $controller->{$action_name}($url[2]);
                }
            } else {
                echo "Action does not exist";
            }
        }

        private function urlArgs() {
            return explode('/', $_GET['url'] ?? '');
        }
    }