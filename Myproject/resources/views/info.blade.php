<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .headerColor{
            background-color: #505050;
        }

        footer{
            position: relative;
            top: 290px;
        }

        body{
            background-color: #d1e6eb;
        }
    </style>
</head>
<body>
    <header>
        <nav class='navbar border-bottom border-body navbar-expand-lg headerColor'>
            <div class="collapse navbar-collapse">
                <img class='border border-black border-4 rounded-circle mx-2' style='background-color: white' src="{{asset('img/Sprite-0001.png')}}"/>
                <ul class='navbar-nav'>
                    <li class='nav-item'>
                        <a class='nav-link text-light' href="">Главная</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link text-light' href="{{route('user.home')}}">Шифрование</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link text-light' href="{{route('user.desc')}}">Расшифровка</a>
                    </li>
                </ul>
                @if(Auth::check())
                    <div class='container'>
                        <p class='text-light position-absolute top-0 end-0 translate-middle-x p-3 me-5'>{{Session::get('User')}}</p>
                        <a class='position-absolute top-0 end-0 translate-middle-x p-3' href="{{route('user.logout')}}">
                            <img style='height: 30px; width: 30px;' src="{{asset('img/exit.png')}}">
                        </a>
                    </div>
                @else
                    <a href="{{route('user.login')}}" class='btn btn-primary position-absolute top-0 end-0 translate-middle-x p-2 mt-2'>Войти</a>
                @endif
            </div>
        </nav>
    </header>
    <div class='container text-center border-bottom border-dark'>
        <h1 class='h1'>Информация</h1>
    </div>
    <div class="container text-center">
        <p class='mt-5 mb-5 fs-5'>WEB-приложение шифрование создано с целью шифровки текста с помощью кодировки AES-256, AES-128, BLOWFISH, BF-OFB, SM4, CAMELLIA-128, Idea-cbc, Seed-ofb, Cast5-sfb, Aria192. Использован фреймворк laravel. Для дальнейшей работы с шифром вам нужно зарегистрироваться на сайте или войти в свой профиль. Во время регистрации нужно будет ввести имя пользователя, почту и пароль они нужны для входа на страницу шифровки и расшифровки.<br> Есть переходы на официальные страницы laravel и bootstrap. И ссылки на мою почту, телеграм и github.<br><br> Приложение сделано в учебных целях.</p>
    </div>
    <footer class="text-center text-lg-start bg-body-tertiary text-muted">
        <section class='text-light p-1' style="background-color: #505050;">
            <div class="container text-center text-md-start mt-5">
                <div class="row mt-3">
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-gem me-3"></i><img class='border border-black border-4 rounded-circle mx-2' style='background-color: white' src="{{asset('img/Sprite-0001.png')}}"/>Проект шифрование
                        </h6>
                        <p>
                            Шифровка текста любого формата, языка и размера.
                        </p>
                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <h6 class="text-uppercase fw-bold mb-4 border-bottom border-light text-center">
                            Полезные ссылки
                        </h6>
                        <p>
                            <a href="https://laravel.com" class="text-reset link-underline link-underline-opacity-0">Laravel</a>
                        </p>
                        <p>
                            <a href="https://getbootstrap.com" class="text-reset link-underline link-underline-opacity-0">Bootstrap</a>
                        </p>
                    </div>
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <h6 class="text-uppercase mb-4 border-bottom border-light text-center">Контакты</h6>
                        <p><i class=""></i>Алматы, Абая 68</p>
                        <p><i class=""></i><img style='height: 30px; width: 30px;' src='{{asset("img/email.png")}}'/> <a class='text-reset link-underline link-underline-opacity-0' href='mailto:daniil.brazhnic.03@gmail.com'>daniil.brazhnic.03@gmail.com</a></p>
                        <p><i class=""></i><img style='height: 30px; width: 30px;' src='{{asset("img/telegram.png")}}'/> <a class='text-reset link-underline link-underline-opacity-0' href='https://t.me/unit539'>unit539</a></p>
                        <p><i class=""></i><img style='height: 30px; width: 30px;' src='{{asset("img/github.png")}}'/> <a class='text-reset link-underline link-underline-opacity-0' href='https://github.com/Unit539'>Unit539</a></p>
                    </div>
                </div>
            </div>
        </section>

        <div class="text-center p-4 text-light" style="background-color: #1d1d1d;">
            &copy;2024 Copyright
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
