@extends('layouts.main')

@section('title', 'HOME')

@section('content')

<section class="container">


    <nav class="navbar navbar-expand-lg navbar-light bg-light nav-pills nav-fill">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item ">
                        <a class="nav-link" aria-current="page" href="#section1">BURGER</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="#section2">REFRIGERANTE</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="#section3">SUCOS</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="#section4">COMBOS</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="#section5">DOCES</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <br>

    <!-- inicio accordion -->
    <div class="accordion" id="accordionExample">

        <!-- seção 1 -->
        <div id="section1" class="container-fluid">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        BURGER
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="row">
                            @foreach($lanches as $lanche)
                            <div class="col">
                                <!-- data-bs-toggle="modal" data-bs-target="#exampleModal" -->
                                <a href="/{{ $lanche->id }}" class="link-card modal-trigger">

                                    <div class="card mb-3" style="max-width: 540px;">
                                        <div class="row g-0">
                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <h5 class="card-title">{{$lanche->nome}}</h5>
                                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                    <h6>R$20,00</h6>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <img src="../img/{{$lanche->imagem}}" class="img-fluid rounded-start" alt="...">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- seção 2 -->
        <div id="section2" class="container-fluid ">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        REFRIGERANTE
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="row">
                            @for($a=0; $a < 6; $a++ ) <!--LAÇO -->
                                <div class="col">
                                    <a href="#" class="link-card">
                                        <div class="card mb-3" style="max-width: 540px;">
                                            <div class="row g-0">
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <h5 class="card-title">COCA-COLA lata</h5>
                                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                        <h6>R$6,00</h6>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">

                                                    <img src="../img/cocacola.jpg" class="img-fluid rounded-start" alt="...">

                                                </div>

                                            </div>
                                        </div>
                                    </a>
                                </div>

                                @endfor
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- fim accordion -->


    <!-- seção 3 -->
    <!-- 
        <div id="section3" class="container-fluid bg-secondary text-white">

        </div>
     -->

</section>


<!-- MODAL -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="exampleModalLabel">
                    {{$event->nome}}
                </h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @if (isset($lanche))
                    <img src="../img/{{$lanche->imagem}}" class="img-fluid rounded-start" alt="...">
                @endif
                <p id="produtoModalDescricao" class="product-description text-justify p">
                    Pão com gergelim, baconese, burger fraldinha 100gr, queijo mussarela, bacon em tiras, cebola roxa, alface e tomate.
                </p>

                <div class="d-flex align-items-center mt-5">

                    <form action="/" method="post">
                        @csrf
                        <div class="border">
                            <button type="submit" name="decrement" class="btn btn-dark">-</button>
                            <span class="mx-5 text-center w-25"> {{ $quantity }}</span>
                            <button type="submit" name="increment" class="btn btn-dark">+</button>
                            <input type="hidden" name="quantity" value="{{ $quantity }}">
                        </div>
                    </form>
                    <div class="mx-5">
                        <h5>PREÇO: {{ $preco }} R$ </h5>
                    </div>
                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark btn-lg">Adicionar</button>
            </div>
        </div>
    </div>
</div>




<!-- carrinho -->
<div class="carrinho d-none">
    <a href="/carrinho">
        <p>CARRINHO</p>
    </a>
</div>




<!-- envio para o whats -->
<div class="whats">
    <a href="{{$link}}" target="_blank">
        <img src="../../img/WhatsApp.jpg" alt="">
    </a>
</div>


@endsection