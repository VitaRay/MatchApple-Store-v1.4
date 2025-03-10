<?php
require_once('db.php');
$login = $_POST['login'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$repeatpass = $_POST['repeatpass'];

if (empty($login) || empty($email) || empty($pass) || empty($repeatpass)) {
    echo "<!DOCTYPE html>
<html lang='en-RU'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <link rel='icon' type='image/svg' href='../images/logo-circle.svg' sizes='32x32'/>
        <link rel='stylesheet' href='bootstrap.min.css'>
        <link rel='stylesheet' href='style.css'>
        <title>Заполните все поля</title>
    </head>
    <body>
        <nav class='navbar'>
            <div class='container'>
                <a href='../index.html' class='navbar-brand'>
                    <img src='../images/logo-name.svg' alt='logo' style='height: 35px;'>
                </a>
                    <div class='separator-vert' style='background-color: #1f1f1f;'></div>
                <ul class='navbar-menu'>
                    <li><a href='../mac-accessories.html'>Mac</a></li>
                    <li><a href='../ipad-accessories.html'>iPad</a></li>
                    <li><a href='../iphone-accessories.html'>iPhone</a></li>
                    <li><a href='../vision-accessories.html'>Vision</a></li>
                    <li><a target='_blank' href='https://apple.com'>Apple Side</a></li>
                </ul>

                <div class='separator-vert' style='background-color: #1f1f1f;'></div>
                <ul class='navbar-menu'>
                    <li><a href='../about-us.html'>О нас</a></li>
                    <li><a href='../support.html'>Поддержка</a></li>
                </ul>

                <ul class='navbar-menu navbar-side-menu'>
                    <li><a href='../user-cart.html'><img class='cart' src='../images/cart.svg' alt='cart' style='height: 32px;'></a></li>
                    <li>
                        <a href='../login.php' class='nav-login-link'>
                            <div class='nav-login dp-flx'>Войти</div>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class='container' style='margin-top: 100px;'>
            <div class='alert alert-danger'>
                <h1 style='margin-bottom: 0;'>Ошибка: заполните все поля!</h1>
            </div>
        <div class='dp-flx centering'>
            <button onclick='document.location=`../registration.php`' class='btn btn-primary' style='margin-right: 40px; background-color: #007AFF;'>< Регистрация</button>
            <button onclick='document.location=`../index.html`' class='btn btn-primary' style='margin-left: 40px; background-color: #007AFF;'>На главную</button>
        </div>
        </div>
    </body>
</html>";
} else
{
    if($pass != $repeatpass){
        echo "<!DOCTYPE html>
<html lang='en-RU'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <link rel='icon' type='image/svg' href='../images/logo-circle.svg' sizes='32x32'/>
        <link rel='stylesheet' href='bootstrap.min.css'>
        <link rel='stylesheet' href='style.css'>
        <title>Пароли не совпадают</title>
    </head>
    <body>
        <nav class='navbar'>
            <div class='container'>
                <a href='../index.html' class='navbar-brand'>
                    <img src='../images/logo-name.svg' alt='logo' style='height: 35px;'>
                </a>
                    <div class='separator-vert' style='background-color: #1f1f1f;'></div>
                <ul class='navbar-menu'>
                    <li><a href='../mac-accessories.html'>Mac</a></li>
                    <li><a href='../ipad-accessories.html'>iPad</a></li>
                    <li><a href='../iphone-accessories.html'>iPhone</a></li>
                    <li><a href='../vision-accessories.html'>Vision</a></li>
                    <li><a target='_blank' href='https://apple.com'>Apple Side</a></li>
                </ul>

                <div class='separator-vert' style='background-color: #1f1f1f;'></div>
                <ul class='navbar-menu'>
                    <li><a href='../about-us.html'>О нас</a></li>
                    <li><a href='../support.html'>Поддержка</a></li>
                </ul>

                <ul class='navbar-menu navbar-side-menu'>
                    <li><a href='../user-cart.html'><img class='cart' src='../images/cart.svg' alt='cart' style='height: 32px;'></a></li>
                    <li>
                        <a href='../login.php' class='nav-login-link'>
                            <div class='nav-login dp-flx'>Войти</div>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class='container' style='margin-top: 100px;'>
            <div class='alert alert-danger'>
                <h1 style='margin-bottom: 0;'>Ошибка: пароли не совпадают!</h1>
            </div>
        <div class='dp-flx centering'>
            <button onclick='document.location=`../registration.php`' class='btn btn-primary' style='margin-right: 40px; background-color: #007AFF;'>< Регистрация</button>
            <button onclick='document.location=`../index.html`' class='btn btn-primary' style='margin-left: 40px; background-color: #007AFF;'>На главную</button>
        </div>
        </div>
    </body>
</html>";}
        else {
        $sql = "INSERT INTO `users` (login, pass, email) VALUES ('$login', '$pass', '$email')";
        if ($conn -> query($sql) === TRUE) {
            echo "<!DOCTYPE html>
<html lang='en-RU'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <link rel='icon' type='image/svg' href='../images/logo-circle.svg' sizes='32x32'/>
        <link rel='stylesheet' href='bootstrap.min.css'>
        <link rel='stylesheet' href='style.css'>
        <title>Успешная регистрация</title>
    </head>
    <body>
        <nav class='navbar'>
            <div class='container'>
                <a href='../index.html' class='navbar-brand'>
                    <img src='../images/logo-name.svg' alt='logo' style='height: 35px;'>
                </a>
                    <div class='separator-vert' style='background-color: #1f1f1f;'></div>
                <ul class='navbar-menu'>
                    <li><a href='../mac-accessories.html'>Mac</a></li>
                    <li><a href='../ipad-accessories.html'>iPad</a></li>
                    <li><a href='../iphone-accessories.html'>iPhone</a></li>
                    <li><a href='../vision-accessories.html'>Vision</a></li>
                    <li><a target='_blank' href='https://apple.com'>Apple Side</a></li>
                </ul>

                <div class='separator-vert' style='background-color: #1f1f1f;'></div>
                <ul class='navbar-menu'>
                    <li><a href='../about-us.html'>О нас</a></li>
                    <li><a href='../support.html'>Поддержка</a></li>
                </ul>

                <ul class='navbar-menu navbar-side-menu'>
                    <li><a href='../user-cart.html'><img class='cart' src='../images/cart.svg' alt='cart' style='height: 32px;'></a></li>
                    <li>
                        <a href='../login.php' class='nav-login-link'>
                            <div class='nav-login dp-flx'>Войти</div>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class='container' style='margin-top: 100px;'>
            <h1>Успешная регистрация</h1>
        <div class='dp-flx centering'>
            <button onclick='document.location=`../index.html`' class='btn btn-primary' style='margin-right: 40px; background-color: #007AFF;'>На главную</button>
            <button onclick='document.location=`../profile.html`' class='btn btn-primary' style='margin-left: 40px; background-color: #007AFF;'>Профиль</button>
        </div>
        </div>
    </body>
</html>";
        }
        else {
            echo "Ошибка: " . $conn->error;
        }
    }
}








