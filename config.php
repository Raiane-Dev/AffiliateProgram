<?php
    session_start();

    date_default_timezone_set('America/Sao_Paulo');
    
    define('URL','http://localhost:8000/');
    define('URL_WEB', 'http://localhost:8000/WebSite/home');
    define('URL_STUDENT', 'http://localhost:8000/StudentDashboard');
    define('URL_AFFILIATE', 'http://localhost:8000/DashboardEmployee');

    (new Src\Permissions\Levels);
?>