<?php

use Security\BrokenAccessControl\Http\Request;

require_once __DIR__ . "/../vendor/autoload.php";

$request = Request::getRequest();

require_once __DIR__ . "/../routes/web.php";
