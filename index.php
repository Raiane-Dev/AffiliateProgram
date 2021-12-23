<?php
    require 'vendor/autoload.php';

    $router = new App\Route\Router;
    $router->get('/WebSite/home', '\App\Controllers\Controller', 'home');
    $router->get('/WebSite/checkout', '\App\Controllers\Controller', 'checkout');

    $router->get('/DashboardEmployee/home', '\App\Controllers\ControllerEmployee', 'home');
    $router->get('/DashboardEmployee/create-module', '\App\Controllers\ControllerEmployee', 'createModules');
    $router->get('/DashboardEmployee/create-classes', '\App\Controllers\ControllerEmployee', 'createClasses');
    $router->get('/DashboardEmployee/create-course', '\App\Controllers\ControllerEmployee', 'createCourses');
    $router->get('/DashboardEmployee/create-quiz', '\App\Controllers\ControllerEmployee', 'createQuiz');
    $router->get('/DashboardEmployee/payment-pending', '\App\Controllers\ControllerEmployee', 'paymentPending');
    $router->get('/DashboardEmployee/list-payments', '\App\Controllers\ControllerEmployee', 'listPayments');
    $router->get('/DashboardEmployee/bank-account', '\App\Controllers\ControllerEmployee', 'bankAccount');


    $router->get('/StudentDashboard/home', '\App\Controllers\ControllerStudent', 'home');
    $router->get('/StudentDashboard/course', '\App\Controllers\ControllerStudent', 'listClasses');
    $router->get('/StudentDashboard/quiz', '\App\Controllers\ControllerStudent', 'showQuiz');
    $router->get('/StudentDashboard/list-lessons', '\App\Controllers\ControllerStudent', 'listLessons');
    $router->get('/StudentDashboard/list-quiz', '\App\Controllers\ControllerStudent', 'listQuiz');
    $router->get('/StudentDashboard/list-responses', '\App\Controllers\ControllerStudent', 'listResponses');
    $router->setError();
?>