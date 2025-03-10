<?php
require_once('db.php');
$login = $_POST['login'];
$pass = $_POST['pass'];

if (empty($login) || empty($pass))
{
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
            <button onclick='document.location=`../login.php`' class='btn btn-primary' style='margin-right: 40px; background-color: #007AFF;'>< Войти</button>
            <button onclick='document.location=`../index.html`' class='btn btn-primary' style='margin-left: 40px; background-color: #007AFF;'>На главную</button>
        </div>
        </div>
    </body>
</html>";
} else {
    $sql = "SELECT * FROM `users` WHERE pass = '$pass' AND login = '$login' OR email = '$login'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc()){
            echo "<!DOCTYPE html>
            <html lang='en-RU'>
                <head>
                    <meta charset='UTF-8'>
                    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                    <link rel='icon' type='image/svg' href='../images/logo-circle.svg' sizes='32x32'/>
                    <link rel='stylesheet' href='bootstrap.min.css'>
                    <link rel='stylesheet' href='style.css'>
                    <title>Вход выполнен!</title>
                </head>
                <body>
                    <nav class='navbar'>
                        <div class='container'>
                            <a href='index.html' class='navbar-brand'>
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
                                <li><a href='../profile.html'><img src='../images/profile.svg' alt='profile' class='profile'></a></li>
                            </ul>
                        </div>
                    </nav>
                    <div class='container' style='margin-top: 100px;'>
                        <div class='alert alert-success'>
                            <h1 style='margin-bottom: 0;'>Вход выполнен успешно!</h1>
                        </div>
                    <div class='dp-flx centering'>
                        <button onclick='document.location=`../registration.php`' class='btn btn-primary' style='margin-right: 40px; background-color: #007AFF;'>В профиль</button>
                        <button onclick='document.location=`../index.html`' class='btn btn-primary' style='margin-left: 40px; background-color: #007AFF;'>На главную</button>
                    </div>
                    </div>
                </body>
            </html>";
        }
    } else {
        echo "<!DOCTYPE html>
<html lang='en-RU'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <link rel='icon' type='image/svg' href='../images/logo-circle.svg' sizes='32x32'/>
        <link rel='stylesheet' href='bootstrap.min.css'>
        <link rel='stylesheet' href='style.css'>
        <title>Нет такого пользователя</title>
    </head>
    <body>
        <nav class='navbar'>
            <div class='container'>
                <a href='index.html' class='navbar-brand'>
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
                <h1 style='margin-bottom: 0;'>Ошибка: нет такого пользователя!</h1>
            </div>
        <div class='dp-flx centering'>
            <button onclick='document.location=`../login.php`' class='btn btn-primary' style='margin-right: 40px; background-color: #007AFF;'>< Войти</button>
            <button onclick='document.location=`../index.html`' class='btn btn-primary' style='margin-left: 40px; background-color: #007AFF;'>На главную</button>
        </div>
        </div>
    </body>
</html>";
    }
}