<!DOCTYPE html>
<html>
<head>
    <title>Affiliate Program</title>
    <script src="https://unpkg.com/feather-icons"></script>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo URL ?>Style/dashboard.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</head>
<body>
<section class="global">
    <header class="tab-menu">
        <div>
            <div class="active"><span class="background-icon"><i data-feather="menu"></i></span></div>
            <div><span class="background-icon"><i data-feather="airplay"></i></span></div>
            <div><span class="background-icon"><i data-feather="archive"></i></span></div>
            <div><span class="background-icon"><i data-feather="bell"></i></span></div>
            <div><span class="background-icon"><i data-feather="box"></i></span></div>
        </div>
    </header>
    <aside>
        <div class="menu-main">
            <div class="inline"><span class="background-icon square"><i data-feather="arrow-right"></i></span> <h4>Dashboard</h4></div>
            <div class="box-user">
                <img src="<?= URL ?>Storage/assets/User.png" />
                <h6><?= $_SESSION['name']; ?></h6>
                <p class="info"><?= $_SESSION['email']; ?></p>
            </div>
            <div class="list-horizontal">
                <ul class="menu">
                    <li class="active"><a href="<?= URL_AFFILIATE ?>/home"><i data-feather="home"></i> Dashboard</a></li>
                    <li><a href="<?= URL_AFFILIATE ?>/payment-pending"><i data-feather="credit-card"></i> Manager Finances</a></li>
                    <li><a href="<?= URL_AFFILIATE ?>/bank-account"><i data-feather="grid"></i> Create Bank Account</a></li>
                </ul>
            </div>
            <div class="box-info">
                <p><?= Src\Repository\Users\Affiliate::recoverTokenByUser($_SESSION['user_id']); ?>.</p>
                <a onclick="copyText()" class="button">Your Affiliate Code</a>
            </div>
        </div>
    </aside>

    <main>
    <header class="top">
        <div>
            <div class="search">
                <i data-feather="search"></i>
                <input type="search" />
            </div>
        </div>
        <div>
            <span class="background-icon round"><i data-feather="message-square"></i></span>
            <span class="background-icon round"><i data-feather="bell"></i></span>
            <span class="background-icon round"><i data-feather="shopping-cart"></i></span>
        </div>
    </header>
    <section class="content">