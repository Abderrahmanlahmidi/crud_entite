<?php

require_once "../app/controllers/UserController.php";

$controller = new UserController();
$uri = $_SERVER['REQUEST_URI'];

switch (true) {
    case ($uri === "/"):
        $controller->index();
        break;

    case ($uri === "/create"):
        $controller->create();
        break;

    case (preg_match("#^/delete/(\d+)$#", $uri, $matches)):
        $id = $matches[1];
        $controller->delete($id);
        break;

    case (preg_match("#^/edit/(\d+)$#", $uri, $matches)):
        $id = $matches[1];
        $controller->edit($id);
        break;

    case (preg_match("#^/update/(\d+)$#", $uri, $matches) && $_SERVER["REQUEST_METHOD"] === "POST"):
        $id = $matches[1];
        $controller->update($id);
        break;


    default:
        http_response_code(404);
        echo "404 Not Found";
        break;
}
