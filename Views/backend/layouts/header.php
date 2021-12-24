<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin - Free Bulma template</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <!-- Bulma Version 0.9.0-->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/public/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.9.0/css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="Views/backend/css/style.css">
</head>

<body class="myDIV">
    <!-- START NAV -->
    <nav class="navbar is-white">
        <div class="container">
            <div class="navbar-brand">
                <a class="navbar-item brand-text" href="index.php?controller=admin&action=pageAuthor">
                    Admin
                </a>
                <div class="navbar-burger burger" data-target="navMenu">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div id="navMenu" class="navbar-menu">
                <div class="navbar-start">
                    <a class="navbar-item" href="index.php?controller=news&action=index">
                        <!-- Sign Out -->
                    </a>
                </div>

            </div>
        </div>
    </nav>
    <!-- END NAV -->
    <div class="container">
        <div class="columns">
            <div class="column is-3 ">
                <aside class="menu is-hidden-mobile">
                    <p class="menu-label">
                        General
                    </p>
                    <ul class="menu-list">
                        <li><a href="index.php?controller=admin&action=index" class="is-active">Trang chủ</a></li>
                        <li><a href="index.php?controller=admin&action=category">Quản lý Danh Mục</a></li>
                        <li><a href="index.php?controller=admin&action=news">Quản lý Tin Tức</a></li>
                        <li><a href="index.php?controller=admin&action=pageAuthor">Quản lý Tác Giả</a></li>
                        <!-- <li><a href="index.php?controller=admin&action=category">Quản lý Bình Luận</a></li> -->
                        <!-- <li><a href="index.php?controller=admin&action=category">Quản lý Người Đăng Ký</a></li> -->
                        <!-- <li><a href="index.php?controller=admin&action=category">Quản lý Sao Lưu</a></li> -->
                        <!-- <li><a href="index.php?controller=admin&action=category">Quản lý User</a></li> -->
                    </ul>
                </aside>
            </div>
            <div class="column is-9">
                <nav class="breadcrumb" aria-label="breadcrumbs">
                    <ul>
                        <li><a href="../">Bulma</a></li>
                        <li><a href="../">Templates</a></li>
                        <li><a href="../">Examples</a></li>
                        <li class="is-active"><a href="#" aria-current="page">Admin</a></li>
                    </ul>
                </nav>
                <section class="hero is-info welcome is-small">
                    <div class="hero-body">
                        <div class="container">
                            <h1 class="title">
                                Hello, Admin.
                            </h1>
                            <h2 class="subtitle">
                                Đây là trang <?= $data["pageName"] ?>
                            </h2>
                            <a class="button is-small is-primary" href="#" onclick="myFunction()">Light | Dark</a>
                        </div>
                    </div>
                </section>
