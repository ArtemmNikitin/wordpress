<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artmax test project</title>
<!--    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">-->
<!--    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">-->
<!--    <link rel="stylesheet" href="css/bootstrap-grid.min.css">-->
<!--    <link rel="stylesheet" href="css/style.min.css">-->

    <?php
    wp_head();
    ?>

</head>

<body>
<section class="promo">
<header class="header">
    <div class="header__container">
        <div class="header__wrapper">

            <div class="header__menu">

                <div class="header__burger">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/burger.svg" alt="">
                </div>

                <ul class="header__menu-wrapper">

                    <li class ="header__links">
                        <a href="#">Защита от DDoS</a>
                    </li>
                    <li class ="header__links">
                        <a href="#">Защита от ботов</a>
                    </li>
                    <li class ="header__links">
                        <a href="#">Защита от взлома</a>
                    </li>
                </ul>
            </div>

            <div class="header__label">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/logotip.svg" alt="website-logo">
            </div>

            <div class="button header__button">
                <a href="#form-anchor">Оставить заявку</a>
            </div>
        </div>
    </div>
</header>