<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <!-- bootrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- icone google -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <!-- CSS da aplicação -->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/home.css">
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="50">

    <div class="container-fluid" id="page-container">
        <div id="content-wrap">

            <header>

                @include('layouts.navbar')

                @section('banner')
                <div id="banner">

                    <!-- logo da loja -->
                    <div class="mt-5 logo">
                        <img src="../img/logo.jpg" alt="">
                    </div>

                    <h1 class="mt-4 text-light">
                        SETUBAL´S BURGER - ENGENHO NOVO
                    </h1>

                    <p class="text-light p-header">
                        <span class="material-symbols-outlined">
                            distance
                        </span>
                        rua: Otaviano Piza, 186, São Paulo, SP
                    </p>

                    <button class="btn bg-light text-success fw-bold">
                        Aberto agora
                    </button>

                    <p class="text-light fw-bold mt-2 p-header">

                        <span class="material-symbols-outlined">
                            hourglass_bottom
                        </span>
                        40-60min ●
                        <a href="#">Ver Mais</a>
                    </p>

                </div>

                @show

            </header>


            <main>


                <!-- coloca o conteudo de cada pagina -->
                @yield('content')

            </main>
        </div>


        <footer class="text-center text-light bg-dark">
            <p class="text-light text-center mb-0 "> @2022 - copyright : Autor - Fabio Setubal</p>
            <div class="row">
                <div class="col">
                    <span class="material-symbols-outlined">
                        question_mark
                    </span>
                    <span class="material-symbols-outlined">
                        question_mark
                    </span>
                    <span class="material-symbols-outlined">
                        question_mark
                    </span>
                </div>
            </div>
        </footer>
    </div>

    <script src="/js/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>