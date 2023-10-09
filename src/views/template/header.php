<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/comum.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/icofont.min.css">
    <link rel="stylesheet" href="assets/css/template.css">
</head>

<body class="hide-sidebar">
    <header class="header">
        <div class="logo">
            <i class="icofont-engineer mr-2"></i>
            <span class="font-weight-bold">U</span>
            <span class="font-weight-light">ltra</span>
            <span class="font-weight-bold">S</span>
            <span class="font-weight-light">afe</span>
        </div>
        <!-- <div class="menu-toogle mx-3">
            <i class="icofont-navigation-menu"></i>
        </div> -->
        <div class="spacer"></div>
        <div class="dropdown">
            <div class="dropdown-button">
                <img class="avatar"
                src="<?= "http://www.gravatar.com/avatar.php?gravatar_id="
                . md5(strtolower(trim($_SESSION['user']->email))) ?>" alt="user">
                <span class="ml-3">
                    <?= $_SESSION['user'] ->name ?>
                </span>
                <i class="icofont-simple-down mx-2"></i>
            </div>
            <div class="dropdown-content">
                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="logout.php">
                            <i class="icofont-logout mr-2">
                                Sair
                            </i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </header>