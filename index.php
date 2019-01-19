<?php

    require_once("config.php");

    function __autoload($class_name) {
        require LIBRARY . $class_name . ".php";
    }

    $app = new Bootstrap();