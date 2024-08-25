<?php

use Security\Skeleton\Http\Middleware\Authenticate;

if($request->server['REQUEST_METHOD'] == 'GET') {
    switch ($request->server['PATH_INFO'] ?? "/") {

    };
}

if($request->server["REQUEST_METHOD"] == "POST") {
    switch ($request->server['PATH_INFO']) {

    };
}