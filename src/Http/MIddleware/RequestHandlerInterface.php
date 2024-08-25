<?php

namespace Security\BrokenAccessControl\Http\MIddleware;

use Security\BrokenAccessControl\Http\Request;

interface RequestHandlerInterface
{
    public function handle(Request &$request): void;
}