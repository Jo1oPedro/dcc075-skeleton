<?php

use Security\BrokenAccessControl\Controllers\BankController;
use Security\BrokenAccessControl\Http\MIddleware\Authenticate;

if($request->server['REQUEST_METHOD'] == 'GET') {
    switch ($request->server['PATH_INFO'] ?? "/") {
        case "/":
            break;
        case "/bankAccount":
            try {
                middleware(Authenticate::class);
                (new BankController)($request->server["QUERY_STRING"]);
            } catch (Exception $exception) {
                return;
            }
            break;
    };
}

if($request->server["REQUEST_METHOD"] == "POST") {
    switch ($request->server['PATH_INFO']) {
        case "/login":
            middleware();
            break;
    };
}