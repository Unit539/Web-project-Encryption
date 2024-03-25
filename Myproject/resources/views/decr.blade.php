<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decryption</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .headerColor{
            background-color: #505050;
        }

        .textareaHeight{
            height: 350px;
        }

        body{
            background-color: #d1e6eb;
        }

        textarea {
            resize: none;
        }
    </style>
</head>
<body>
<header>
        <nav class='navbar border-body border-bottom border-black navbar-expand-lg headerColor'>
            <div class="collapse navbar-collapse">
                <img class='border border-black border-4 rounded-circle mx-2' style='background-color: white' src="{{asset('img/Sprite-0001.png')}}"/>
                <ul class='navbar-nav'>
                    <li class='nav-item'>
                        <a class='nav-link text-light' href="/info">Главная</a>
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
                        <p class='text-light position-absolute top-0 end-0 translate-middle-x p-3 me-5'>        
                            {{Session::get('User')}}   
                        </p>
                        <a class='position-absolute top-0 end-0 translate-middle-x p-3' href="{{route('user.logout')}}">
                            <img style='height: 30px; width: 30px;' src="{{asset('img/exit.png')}}">
                        </a>
                    </div>
                @endif
            </div>
        </nav>
    </header>
    <div class='container'>
        <h1 class='h1 text-black text-center border-bottom border-black'>Расшифровка</h1>
    </div>
    <div class='container'>
        <form method="post">
            @csrf
            <div class='container'>
                <div class='mt-3 d-grid gap-2 col-3 mx-auto'>
                    <select name='selector' class='form-select border-black'>
                        <option selected>Выберите тип расшифровки</option>
                        <option value="AES-256">AES-256</option>
                        <option value="AES-128">AES-128</option>
                        <option value="BLOWFISH">BLOWFISH</option>
                        <option value="BF">BF-OFB</option>
                        <option value="SM">SM4</option>
                        <option value="CAMELLIA-128">CAMELLIA-128</option>
                        <option value="IDEA-CBC">Idea-cbc</option>
                        <option value="SEED-OFB">Seed-ofb</option>
                        <option value="CAST5-CFB">Cast5-sfb</option>
                        <option value="ARIA192">Aria192</option>
                    </select>
                </div>
            </div>
            @error('decryption')
                <div class='mt-2 container fs-5 text-center text-danger'>{{$message}}</div>
            @enderror
            <div class='mt-3 form-floating'>
                <textarea id='floatingTextarea' class='form-control border-secondary' name="decryption" placeholder="Введите текст для шифрования:" style='height: 350px'></textarea>
                <label for='floatingTextarea'>Введите текст для расшифровки:<label>
            </div>
            <div class='mt-3'>
                <textarea class='form-control textareaHeight border-secondary' disabled>{{$desc}}</textarea>
            </div>
            <div class='mt-3 mb-3 d-grid gap-2 col-2 mx-auto'>
                <button class='btn btn-primary' type='send' name='button'>Расшифровать</button>
            </div>
        </form>
    </div>
    <footer class="text-center text-lg-start bg-body-tertiary text-muted border-top border-black">
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
