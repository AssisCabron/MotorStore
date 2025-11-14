@extends('layouts.public')

@section('title', $marca . ' - Motors')

@section('styles')
<style>
    /* Breadcrumb */
    .breadcrumb-section {
        padding: 8rem 2rem 2rem;
        max-width: 1400px;
        margin: 0 auto;
    }

    .breadcrumb {
        display: flex;
        gap: 0.5rem;
        align-items: center;
        margin-bottom: 2rem;
        color: rgba(255, 255, 255, 0.7);
    }

    .breadcrumb a {
        color: var(--gold);
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .breadcrumb a:hover {
        color: var(--gold-light);
    }

    .breadcrumb span {
        color: rgba(255, 255, 255, 0.5);
    }

    /* Page Header */
    .page-header {
        text-align: center;
        margin-bottom: 4rem;
    }

    .page-header h1 {
        font-size: 3.5rem;
        font-weight: 900;
        margin-bottom: 1rem;
        background: linear-gradient(135deg, var(--white) 0%, var(--gold) 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .page-header p {
        font-size: 1.2rem;
        color: rgba(255, 255, 255, 0.7);
    }

    .car-count {
        display: inline-block;
        background: rgba(255, 215, 0, 0.1);
        padding: 0.5rem 1.5rem;
        border-radius: 50px;
        border: 1px solid var(--gold);
        color: var(--gold);
        font-weight: 600;
        margin-top: 1rem;
    }

    /* Cars Grid */
    .cars-section {
        padding: 2rem;
        max-width: 1400px;
        margin: 0 auto;
    }

    .cars-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
        gap: 2.5rem;
    }

    .car-card {
        background: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(10px);
        border-radius: 20px;
        overflow: hidden;
        transition: all 0.4s ease;
        border: 1px solid rgba(255, 215, 0, 0.1);
        position: relative;
    }

    .car-card:hover {
        transform: translateY(-15px) scale(1.02);
        box-shadow: 0 20px 60px rgba(255, 215, 0, 0.3);
        border-color: var(--gold);
    }

    .car-image {
        width: 100%;
        height: 250px;
        object-fit: cover;
        transition: transform 0.4s ease;
    }

    .car-card:hover .car-image {
        transform: scale(1.1);
    }

    .car-info {
        padding: 1.5rem;
    }

    .car-info h3 {
        font-size: 1.5rem;
        font-weight: 700;
        margin-bottom: 0.5rem;
        color: var(--white);
    }

    .car-info .car-marca {
        color: var(--gold);
        font-size: 0.9rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 1rem;
    }

    .car-info .car-preco {
        font-size: 1.8rem;
        font-weight: 800;
        color: var(--gold);
        margin-bottom: 1rem;
    }

    .car-info .btn-details {
        background: linear-gradient(135deg, var(--gold) 0%, var(--gold-light) 100%);
        color: var(--primary);
        padding: 0.8rem 1.5rem;
        border-radius: 50px;
        text-decoration: none;
        font-weight: 700;
        display: inline-block;
        width: 100%;
        text-align: center;
        transition: all 0.3s ease;
    }

    .car-card:hover .btn-details {
        box-shadow: 0 4px 20px rgba(255, 215, 0, 0.5);
    }

    /* Empty State */
    .empty-state {
        text-align: center;
        padding: 4rem 2rem;
        color: rgba(255, 255, 255, 0.7);
    }

    .empty-state h2 {
        font-size: 2rem;
        margin-bottom: 1rem;
        color: var(--white);
    }

    .empty-state a {
        display: inline-block;
        margin-top: 2rem;
        background: linear-gradient(135deg, var(--gold) 0%, var(--gold-light) 100%);
        color: var(--primary);
        padding: 1rem 2rem;
        border-radius: 50px;
        text-decoration: none;
        font-weight: 700;
    }

    @media (max-width: 768px) {
        .page-header h1 {
            font-size: 2.5rem;
        }

        .cars-grid {
            grid-template-columns: 1fr;
        }
    }
</style>
@endsection

@section('content')
    <!-- Breadcrumb -->
    <section class="breadcrumb-section">
        <div class="breadcrumb">
            <a href="{{ route('home') }}">Início</a>
            <span>/</span>
            <a href="{{ route('home') }}#brands">Marcas</a>
            <span>/</span>
            <span>{{ $marca }}</span>
        </div>

        <!-- Page Header -->
        <div class="page-header">
            <h1>{{ $marca }}</h1>
            <p>Explore nossa seleção exclusiva de veículos {{ $marca }}</p>
            <div class="car-count">{{ $carrosUmaMarca->count() }} veículo(s) disponível(is)</div>
        </div>
    </section>

    <!-- Cars Section -->
    <section class="cars-section">
        @if($carrosUmaMarca->count() > 0)
            <div class="cars-grid">
                @foreach($carrosUmaMarca as $carro)
                    @if($carro->fotos->isNotEmpty())
                        <div class="car-card">
                            <img src="{{ $carro->fotos->first()->link_foto }}" alt="{{ $carro->descricao }}" class="car-image">
                            <div class="car-info">
                                <div class="car-marca">{{ $carro->marca }}</div>
                                <h3>{{ $carro->descricao }}</h3>
                                <div class="car-preco">R$ {{ number_format($carro->preco, 2, ',', '.') }}</div>
                                <a href="{{ route('loja.produto', ['id' => $carro->id]) }}" class="btn-details">Ver Detalhes</a>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        @else
            <div class="empty-state">
                <h2>Nenhum veículo encontrado</h2>
                <p>Não há veículos disponíveis para esta marca no momento.</p>
                <a href="{{ route('home') }}">Voltar para o início</a>
            </div>
        @endif
    </section>
@endsection
