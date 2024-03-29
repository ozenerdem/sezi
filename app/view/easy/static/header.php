<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $meta['title']; ?></title>
    <?php if (isset($meta['description'])): ?>
        <meta name="description" content="<?= $meta['description'] ?>">
    <?php endif; ?>
    <?php if (isset($meta['keywords'])): ?>
        <meta name="keywords" content="<?= $meta['keywords'] ?>">
    <?php endif; ?>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>

    <link rel="stylesheet" href="<?= public_url('styles/main.css') ?>">
    <script>
        var api_url = '<?=site_url('api')?>';
    </script>
    <script src="<?=public_url('scripts/api.js')?>"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="<?= site_url('index')?>"><?= setting('logo') ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?= site_url('index') ?>">Anasayfa</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Vulnerabilities
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?= site_url('commandInjection') ?>">Command Injection</a>
                        <a class="dropdown-item" href="<?= site_url('xssReflected') ?>">XSS Reflected</a>
                        <a class="dropdown-item" href="<?= site_url('xssStored') ?>">XSS Stored</a>
                        <a class="dropdown-item" href="<?= site_url('sqlInjection') ?>">SQL Injection - Bypass Authentication</a>
                        <a class="dropdown-item" href="<?= site_url('sqli_extractData') ?>">SQL Injection - Extract Data</a>
                        <a class="dropdown-item" href="<?=site_url('csrf')?>">CSRF</a>
                        <a class="dropdown-item" href="<?=site_url('fileUpload')?>">File Upload</a>
                        <a class="dropdown-item" href="<?=site_url('dirTraversal')?>">Directory Traversal</a>
                        <a class="dropdown-item" href="<?=site_url('idor')?>">IDOR</a>
                        <a class="dropdown-item" href="<?=site_url('bruteForce')?>">Brute Force</a>
                        <a class="dropdown-item" href="<?=site_url('brokenAuth')?>">Broken Authentication Login</a>
                        <a class="dropdown-item" href="<?=site_url('brokenAuth_register')?>">Broken Authentication Register</a>
                        <a class="dropdown-item" href="<?=site_url('errorCodes')?>">Security Misconfiguration(Error Codes)</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=site_url('about')?>">Hakkımda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=site_url('contact')?>">İletişim</a>
                </li>
            </ul>
<!--            <form class="form-inline my-2 my-lg-0 mr-3">-->
<!--                <input class="form-control mr-sm-2" type="search" placeholder="--><?//= setting('search_placeholder') ?><!--"-->
<!--                       aria-label="Search">-->
<!--                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Ara</button>-->
<!--            </form>-->
            <?php if (session('user_id')): ?>
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?= session('user_name') ?>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="<?= site_url('profile') ?>">Profil</a>
                        <a class="dropdown-item" href="<?= site_url('logout') ?>">Çıkış Yap</a>
                    </div>
                </div>
            <?php else: ?>
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Giriş Yap
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="<?= site_url('login') ?>">Giriş Yap</a>
                        <a class="dropdown-item" href="<?= site_url('register') ?>">Kayıt Ol</a>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</nav>