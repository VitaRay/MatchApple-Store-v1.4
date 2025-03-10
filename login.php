<!DOCTYPE html>
<html lang="en-RU">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/svg" href="images/logo-circle.svg" sizes="32x32"/>
        <link rel="stylesheet" href="assets/preloader-styles.css">
        <link rel="stylesheet" href="assets/bootstrap.min.css">
        <link rel="stylesheet" href="assets/preloader-styles.css">
        <link rel="stylesheet" href="assets/style.css">
        <title>Вход</title>
    </head>
    <body class="unloaded">
        <div class="preloader-container">
            <div id="big">
                <div id="dot55"></div>
                <div id="dot56"></div>
                <div id="dot58"></div>
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js"></script> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>let t10 = new TimelineMax({repeat: -1});
                let t10a = new TimelineMax({repeat: -1});
                t10
                   .fromTo($("#dot55"),1,{rotationY:0,ease:Power0.easeNone},{rotationY:360,ease:Power0.easeNone},0)
                   .fromTo($("#dot56"),1,{rotationY:0,ease:Power0.easeNone},{rotationY:360,ease:Power0.easeNone},0)
                   .fromTo($("#dot58"),1,{rotationY:0,ease:Power0.easeNone},{rotationY:360,ease:Power0.easeNone},0)
                t10a
                    .fromTo($("#dot57"), 0.4, {y:-120}, {y:-3, ease:Power2.easeIn},0)
                    .fromTo($("#dot57"), 0.4, {y:-3},{y:-120, ease:Power2.easeOut});
                    window.onload = function () {
                document.body.classList.add('loaded');
                document.body.classList.remove('unloaded');}</script>
                
        <nav class="navbar">
            <div class="container">
                <a href="index.html" class="navbar-brand">
                    <img src="images/logo-name.svg" alt="logo" style="height: 35px;">
                </a>
                    <div class="separator-vert" style="background-color: #1f1f1f;"></div>
                <ul class="navbar-menu">
                    <li><a href="mac-accessories.html">Mac</a></li>
                    <li><a href="ipad-accessories.html">iPad</a></li>
                    <li><a href="iphone-accessories.html">iPhone</a></li>
                    <li><a href="vision-accessories.html">Vision</a></li>
                    <li><a target="_blank" href="https://apple.com">Apple Side</a></li>
                </ul>

                <div class="separator-vert" style="background-color: #1f1f1f;"></div>
                <ul class="navbar-menu">
                    <li><a href="about-us.html">О нас</a></li>
                    <li><a href="support.html">Поддержка</a></li>
                </ul>

                <ul class="navbar-menu navbar-side-menu">
                    <li><a href="user-cart.html"><img class="cart" src="images/cart.svg" alt="cart" style="height: 32px;"></a></li>
                    <li>
                        <a href="login.php" class="nav-login-link">
                            <div class="nav-login dp-flx">Войти</div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="page-name">
                <div class="container" style="border-top: 1px solid rgb(210, 210, 215); justify-content: left;">
                    <a href="login.php"><h3>Вход в аккаунт</h3></a>
                    <img src="images/login-icon.svg" alt="login-picture" style="height: 35px;margin: auto 10px;">
                </div>
            </div>
        </nav>
        
        <div class="page-content">
            <div class="container form-container">
                <main class="form-signin w-100 m-auto">
                    <form action="assets/login-func.php" style="text-align: center;" method="POST">
                        <div class="dp-flx">
                            <img class="mb-4" src="images/logo.svg" alt="logo" width="72" height="57" style="margin: 10px auto;">
                        </div>
                        <h1 class="h3 mb-3 fw-normal">Вход в аккаунт</h1>
                
                        <div class="form-floating">
                            <input required name="login" type="text" class="form-control" id="floatingInput" placeholder="Логин или E-mail:" >
                            <label for="floatingInput">Логин или E-mail:</label>
                        </div>
                        <div class="form-floating">
                            <input required name="pass" type="password" class="form-control" id="floatingPassword" placeholder="Пароль:" >
                            <label for="floatingPassword">Пароль:</label>
                            <div class="dp-block" style="text-align: left;">
                                <a href="password-recovery.html" style="color: #007AFF;">Не помню пароль</a>
                            </div>
                        </div>
                        <div class="dp-flx">
                            <button class="action-button" type="submit">Войти</button>
                        </div>
                        <a href="registration.php" style="text-align: center; color: #007AFF;">Нет аккаунта? Зарегистрируйтесь</a>
                    </form>
                </main>
            </div>
        </div>
    </body>
</html>