<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        
        <!-- Fonte Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">        
        
        <!-- Favicon -->
        <link rel="icon" href="/img/logo.png">

        <!-- Fonte Google -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
        
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        
        <!-- CSS da aplicação -->
        <link rel="stylesheet" href="/css/style.css">
    
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand navbar-color">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="/" class="navbar-brand">
                        <img src="/img/logo.png" alt="Icone">
                    </a>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/" class="nav-link"><i class="fa-solid fa-house"></i></i> Início </a>
                        </li>
                        <li class="nav-item">
                            <a href="/vacancies/create" class="nav-link"><i class="fa-solid fa-building"></i> Criar vaga </a>
                        </li>
                        <li class="nav-item">
                            <a href="/candidates/create" class="nav-link"><i class="fa-solid fa-user-plus"></i> Criar candidato </a>
                        </li>
                        @auth
                            <li class="nav-item">
                                <a href="/dashboard" class="nav-link"><i class="fa-solid fa-address-card"></i> Painel</a>
                            </li>
                            <li class="nav-item">
                                <form action="/logout" method="POST">
                                    @csrf
                                    <a href="/logout" class="nav-link"
                                    onclick="event.preventDefault();
                                    this.closest('form').submit();">
                                       <i class="fa-sharp fa-solid fa-circle-xmark"></i> Sair
                                    </a>
                                </form>
                            </li>
                        @endauth
                        @guest
                            <li class="nav-item">
                                <a href="/login" class="nav-link"><i class="fa-solid fa-right-to-bracket"></i> Login </a>
                            </li>
                            <li class="nav-item">
                                <a href="/register" class="nav-link"><i class="fa-solid fa-user-plus"></i> Cadastrar </a>
                            </li>
                        @endguest
                    </ul>
                </div>
            </nav>
        </header>
        <main class="container">
            @if(session('msg'))
            <div id="apagar_msg" class="alert alert-success alert-dismissible fade show m-3" role="alert">
                <i class="fa-solid fa-circle-check"></i>
                {{ session('msg')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>  
            @endif
            @yield('content')
        </main>
    </body>

    <!-- JavaScript da aplicação -->
    <script src="js/script.js"></script>
    <!--JS BOOTSTRAP-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>