<?php

require __DIR__ . "/Controllers/HomeController.php";
require __DIR__ . "/Controllers/LoginController.php";
require __DIR__ . "/Controllers/RegisterController.php";
require __DIR__ . "/Controllers/ReservationController.php";
require __DIR__ . "/Controllers/SkinController.php";
require __DIR__ . "/Controllers/AccountController.php";

$uri = $_SERVER['REQUEST_URI'];

$homeController = new HomeController();
$loginController = new LoginController();
$registerController = new RegisterController();
$reservationController = new ReservationController();
$skinController = new SkinController();
$accountController = new AccountController;

switch ($uri) {
    case URL_HOMEPAGE:
        $homeController->index();
        break;

    case URL_LOGIN:
        $loginController->index();
        break;

    case URL_REGISTER:
        $registerController->index();
        break;

    case URL_RESERVATION:
        $reservationController->index();
        $skinController->index();
        break;

    case URL_ACCOUNT:
        $accountController->index();
        break;
}
