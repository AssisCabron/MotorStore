@extends('template.index')

@section('title')
Carro
@endsection

@section('content')

    <div class="page-heading" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <h2 class="fw-bold text-dark">Carro Unico</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="section" id="product">
        <div class="container">
            <div class="row">
                <div class="w-100">
                    <div class="left-images">
                        <div class="men-item-carousel">
                            <div class="owl-men-item owl-carousel">
                                @foreach($carroUnico->fotos as $foto)
                                    @if(!empty($foto->link_foto))
                                        <div class="item">
                                            <div class="thumb">
                                                <img src="{{ $foto->link_foto }}" alt="">
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center mt-4">
                <div class="col-lg-4 text-center">

                    <h4 class="fw-bold mb-3">{{ $carroUnico->descricao }}</h4>

                    <span class="price d-block fs-4 text-success mb-2">
                        R$ {{ number_format($carroUnico->preco, 2, ',', '.') }}
                    </span>

                    <p class="text-muted mb-4">{{ $carroUnico->Sobre }}</p>

                    <p class="fw-bold mb-4">Cor: {{ $carroUnico->cor }}</p>
                    <p class="fw-bold mb-4">Ano: {{ $carroUnico->Ano_fabricacao }}</p>
                    <p class="fw-bold mb-4">Km:: {{ $carroUnico->kmRodado }}</p>

                    <div class="main-border-button m-4">
                        <a href="#" class="btn btn-success px-4 py-2 fs-5 shadow-sm">Comprar</a>
                    </div>

                </div>
            </div>

        </div>
    </section>


@endsection
