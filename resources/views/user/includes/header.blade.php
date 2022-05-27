<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ URL::asset('public/End-User/css/swipex.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('public/End-User/css/all.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link id="skin-icon" rel="stylesheet" href="{{ URL::asset('public/End-User/css/main.css') }}">
</head>

<body>
    <header class="pt-4">
        <div class="container">
            <nav class="d-flex justify-content-between align-items-center">
                <div class="nav-content">
                    <ul class="nav d-flex align-items-center">
                        <li class="nav-item">
                            <h1>استقدام</h1>
                        </li>
                        <li class="nav-item"><a href="#" class="nav-link">الرئيسية</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">المكاتب</a></li>
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item text-black" href="#">
                                        {{ __('Profile') }}
                                    </a>

                                    <a class="dropdown-item text-black" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        <li class="dark-mood" title="Dark Mood"><i class="fa-solid fa-moon"></i></li>
                        <li class="light-mood" title="Light Mood"><i class="fa-solid fa-sun"></i></li>
                    </ul>
                </div>
                <div class="ads">
                    <a href="#" class="btn btn-success fw-bold"><i class="fa-solid fa-circle-plus"></i> اضف اعلان</a>
                </div>
            </nav>
        </div>
    </header>
