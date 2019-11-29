<?php
    spl_autoload_register(function($className) {
        echo $path = strtolower($className) . ".php";
        if (file_exists($path)) {
            require_once($path);
        } else {
            die("File $path is not found.");
        }
    })
?>