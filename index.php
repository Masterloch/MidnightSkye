<?php

require 'core/router/router.php';
$router = new Router();
require 'core/router/routes.php';
require 'core/router/request.php';
$request = new Request();

$uri = $request->uri();
var_dump($uri);
$uri = $router->direct($uri);


if ($uri['type'] == 'image') {
    require $uri['path'];
}
elseif ($uri['type'] == 'route') {
    require 'views/navBar.php'; //<!-- NAVBAR -->
    require $uri['path'];
}

//require 'footer.html'; //<!-- FOOTER -->


