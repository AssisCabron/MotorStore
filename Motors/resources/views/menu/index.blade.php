@extends('template.index')

@section('title')
Loja
@endsection

@section('content')
<div class="main-banner" id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-content">
                        <div class="thumb">
                            <div class="inner-content">
                                <h4>Nós somos a Motors</h4>
                                <span>A melhor loja de carros de luxo</span>
                                <div class="main-border-button">
                                    <ul class="nav">
                                        <li class="scroll-to-section"><a href="#men">Compre agora</a></li>
                                </ul>
                                </div>
                            </div>
                            <img src="https://www.supertopmotor.com.br/wp-content/uploads/2018/01/ViewImage-2.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-content">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Cadillac</h4>
                                            <span></span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Cadillac</h4>
                                                <p>Se sinta um mafioso!</p>
                                                <div class="main-border-button">
                                                    <a href="{{ route('loja.marca', ['marca' => 'Cadillac' ]) }}">Ver mais</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="https://www.kbb.com/wp-content/uploads/2022/06/2023-cadillac-escalade-v-black-front.jpeg?w=763" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Lange Rover</h4>
                                            <span></span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Lange Rover</h4>
                                                <p>O mais Poderoso</p>
                                                <div class="main-border-button">
                                                    <a href="{{ route('loja.marca', ['marca' => 'Land Rover' ]) }}">Ver mais</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="https://autoentusiastas.com.br/ae/wp-content/uploads/2021/11/Land-Rover-Range-Rover-Evoque-1.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Koenigsegg</h4>
                                            <span></span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Koenigsegg</h4>
                                                <p>"Eu sou a velocidade"</p>
                                                <div class="main-border-button">
                                                    <a href="{{ route('loja.marca', ['marca' => 'Koenigsegg' ]) }}">Ver mais</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0a/2015_Koenigsegg_Agera_N_%2819886243212%29.jpg/1200px-2015_Koenigsegg_Agera_N_%2819886243212%29.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Porsche</h4>
                                            <span></span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Porsche</h4>
                                                <p>Definição de alto desempenho</p>
                                                <div class="main-border-button">
                                                    <a href="{{ route('loja.marca', ['marca' => 'Porsche' ]) }}">Ver mais</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="https://www.sportscarmarket.com/wp-content/uploads/2016/03/2015-porsche-918-spyder-pass-front.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @foreach($carrosPorMarca as $marca => $carros)
    <section class="section" id="men">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>{{$marca}}</h2>
                        <span>O melhor de {{$marca}}'s:</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="men-item-carousel">
                        <div class="owl-men-item owl-carousel">
                            @foreach($carros as $carro)
                                @if($carro->fotos->isNotEmpty())
                                    <div class="item">
                                        <div class="thumb">
                                            <div class="hover-content">
                                                <div class="inner">
                                                    <div class="main-border-button">
                                                        <a href="{{ route('loja.produto', ['id' => $carro->id ]) }}">Ver mais</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <img src="{{ $carro->fotos->first()->link_foto }}" alt="">
                                        </div>
                                        <div class="down-content">
                                            <h4>{{$carro->descricao}}</h4>
                                            <span>{{$carro->preco}}</span>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endforeach
@endsection
