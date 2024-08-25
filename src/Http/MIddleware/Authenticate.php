<?php

namespace Security\BrokenAccessControl\Http\MIddleware;

use Security\BrokenAccessControl\Http\Request;

class Authenticate implements MiddlewareInterface
{
    public function process(Request &$request, RequestHandlerInterface $requestHandler): void
    {
        if(!array_key_exists("user", $request->session)) {
            throw new \Exception("Fail to authenticate user");
        };

        $requestHandler->handle($request);
    }
}