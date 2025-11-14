@extends('template.index')

@section('title')
$marca
@endsection

@section('content')
    <section class="section" id="men">
        <div class="container">
            <div class="section-heading">
                <h2>{{ $marca }}</h2>
                <span>O melhor de {{ $marca }}:</span>
            </div>
        </div>
    <div class="container">
    <div class="row g-5">
        @foreach($carrosUmaMarca as $carro)
            @if($carro->fotos->isNotEmpty())
                <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                    <div class="card h-100 shadow-sm">
                        <img src="{{ $carro->fotos->first()->link_foto }}" class="card-img-top" alt="">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $carro->descricao }}</h5>
                            <p class="card-text">{{ $carro->preco }}</p>
                            <div class="mt-auto">
                                <a href=" {{ route('loja.produto', ['id' => $carro->id ]) }} " class="btn btn-primary w-100">Ver mais</a>
                            </div>
                        </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</section>


@endsection