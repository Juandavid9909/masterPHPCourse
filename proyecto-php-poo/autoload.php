<?php

function controllers_autoload($classname) {
    require_once "controllers/" . ucfirst($classname) . ".php";
}

spl_autoload_register("controllers_autoload");