<?php

namespace Security\BrokenAccessControl\Http\MIddleware;

use Security\BrokenAccessControl\Http\Request;

interface MiddlewareInterface
{
    public function process(Request &$request, RequestHandlerInterface $requestHandler): void;
}