<?php

use Security\BrokenAccessControl\Http\MIddleware\RequestHandler;
use Security\BrokenAccessControl\Http\Request;

require_once __DIR__ . "/../vendor/autoload.php";

function middleware(string ...$middlewares): void {
    $requestHandler = new RequestHandler($middlewares);
    $request = Request::getRequest();
    $requestHandler->handle($request);
}