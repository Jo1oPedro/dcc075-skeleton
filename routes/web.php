<?php

use Security\BrokenAccessControl\Controllers\BankController;

if($request->server['REQUEST_METHOD'] == 'GET') {
    $result = match ($request->server['PATH_INFO'] ?? "/") {
        "/dale" => (new BankController)($request->server["QUERY_STRING"]),
    };
}