<!DOCTYPE html>
<html>
<head>
    <title>Affiliate Program</title>
    <script src="https://unpkg.com/feather-icons"></script>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo URL ?>Style/students.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</head>
<body>
<section class="global">
<header>
    <div class="header-top">
        <div class="logo"><h2>R</h2></div>
    </div>
    <div class="menu">
        <nav>
            <ul>
                <li class="active"><a href="<?= URL_STUDENT ?>/home"><i data-feather="home"></i> Home</a></li>
                <li><a href="<?= URL_STUDENT ?>/course/1/1"><i data-feather="airplay"></i> Course</a></li>
                <li><a href="<?= URL_STUDENT ?>/list-quiz"><i data-feather="help-circle"></i> List Quiz</a></li>
                <li><a href="<?= URL_STUDENT ?>/list-lessons"><i data-feather="folder"></i> List Lessons</a></li>
                <li><a href="<?= URL_STUDENT ?>/"><i data-feather="gitlab"></i> About</a></li>
                <li><a href="<?= URL_STUDENT ?>/"><i data-feather="key"></i> Home</a></li>
            </ul>
        </nav>
    </div>
    <div class="footer">
        <ul>
            <li><span><i data-feather="log-out"></i> Logout</span></li>
            <li><span><i data-feather="log-in"></i> Login</span></li>
        </ul>
        <a href="" class="button"><i data-feather="message-square"></i> Support</a>
    </div>
</header>

<main>
<header class="top">
    <div>
        <h2>Dashboard</h2>
    </div>
    <div>
        <button class="sample"><i data-feather="grid"></i> Change view</button>
        <span class="box-icon"><i data-feather="bell"></i></span>
    </div>
</header>