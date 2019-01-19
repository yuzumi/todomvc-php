<?php

    abstract class Controller {
        public function __construct() {
            $this->view = new View();
        }

        public function loadModel($file_name) {
            $path = "models/{$file_name}.php";

            if (file_exists($path)) {
                require_once($path);

                $model = ucfirst($file_name) . "Model";

                $this->model = new $model;
            }
        }

        public function redirectTo($path) {
            header("Location: " . BASE_URL . $path);
        }
    }