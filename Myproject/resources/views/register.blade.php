<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body{
            background-color: #d1e6eb;
        }

        .headerColor{
            background-color: #505050;
        }
    </style>
</head>
<body>
    <header>
        <nav class='navbar border-light border-bottom border-body navbar-expand-lg headerColor'>
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
            </div>
        </nav>
    </header>
    <div class='position-absolute top-40 start-50 translate-middle-x'>
        <h1 class='text-black border-bottom border-black'>Регистрация</h1>
    </div>
    <div class='position-absolute top-50 start-50 translate-middle border border-3 border-primary shadow-lg rounded bg-white'>
        <div class='p-3' style='background-color: #e8e8e8;'>
            <form action="{{route('user.register')}}" method="post">
                @csrf
                <div class='mb-3'>
                    <label class='mb-1 ms-2'>Логин</label>
                    <input class='form-control rounded-pill border-black' name="name" type="text" placeholder="Введите логин">
                    @if($errors->has('name'))
                        <span class="text-danger">
                            {{$errors->first('name')}}
                        </span>
                    @endif
                    @error('formError')
                        <div class='container text-danger'>{{$message}}</div>
                    @enderror
                </div>
                <div class='mb-3'>
                    <label class='mb-1 ms-2'>Email</label>
                    <input class='form-control rounded-pill border-black' name="email" type="text" placeholder="Введите email">
                    @if($errors->has('email'))
                        <span class="text-danger">
                            {{$errors->first('email')}}
                        </span>
                    @endif
                </div>
                <div class='mb-3'>
                    <label class='mb-1 ms-2'>Пароль</label>
                    <input class='form-control rounded-pill border-black' name="password" type="password" placeholder="Введите пароль">
                    @if($errors->has('password'))
                        <span class="text-danger">
                            {{$errors->first('password')}}
                        </span>
                    @endif
                </div>
                <div class='d-grid gap-2'>
                    <button class='btn btn-primary rounded-pill' type='submit'>Зарегистрироватся</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
