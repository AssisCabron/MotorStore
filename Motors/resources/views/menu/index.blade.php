@extends('layouts.public')

@section('title', 'Motors - Premium Car Collection')

@section('styles')
<style>
    /* Hero Section */
    .hero {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        padding: 8rem 2rem 4rem;
        position: relative;
        overflow: hidden;
        width: 100%;
        box-sizing: border-box;
    }

    .hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: radial-gradient(circle at 50% 50%, rgba(255, 215, 0, 0.1) 0%, transparent 70%);
        animation: pulse 4s ease-in-out infinite;
    }

    @keyframes pulse {
        0%, 100% { opacity: 0.5; }
        50% { opacity: 1; }
    }

    .hero-content {
        max-width: 900px;
        width: 100%;
        margin: 0 auto;
        padding: 0 2rem;
        z-index: 1;
        position: relative;
    }

    .hero h1 {
        font-size: 4.5rem;
        font-weight: 900;
        margin-bottom: 1rem;
        background: linear-gradient(135deg, var(--white) 0%, var(--gold) 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        line-height: 1.2;
        animation: fadeInUp 1s ease;
    }

    .hero p {
        font-size: 1.3rem;
        color: rgba(255, 255, 255, 0.8);
        margin-bottom: 2rem;
        animation: fadeInUp 1s ease 0.2s both;
    }

    .hero-buttons {
        display: flex;
        gap: 1rem;
        justify-content: center;
        flex-wrap: wrap;
        animation: fadeInUp 1s ease 0.4s both;
    }

    .btn-primary {
        background: linear-gradient(135deg, var(--gold) 0%, var(--gold-light) 100%);
        color: var(--primary);
        padding: 1rem 2.5rem;
        border-radius: 50px;
        text-decoration: none;
        font-weight: 700;
        font-size: 1.1rem;
        transition: all 0.3s ease;
        box-shadow: 0 4px 20px rgba(255, 215, 0, 0.4);
    }

    .btn-primary:hover {
        transform: translateY(-3px);
        box-shadow: 0 6px 30px rgba(255, 215, 0, 0.6);
    }

    .btn-secondary {
        background: transparent;
        color: var(--white);
        padding: 1rem 2.5rem;
        border: 2px solid var(--gold);
        border-radius: 50px;
        text-decoration: none;
        font-weight: 700;
        font-size: 1.1rem;
        transition: all 0.3s ease;
    }

    .btn-secondary:hover {
        background: var(--gold);
        color: var(--primary);
        transform: translateY(-3px);
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Brands Section */
    .brands-section {
        padding: 5rem 2rem;
        max-width: 1400px;
        width: 100%;
        margin: 0 auto;
        box-sizing: border-box;
    }

    .section-title {
        text-align: center;
        margin-bottom: 4rem;
    }

    .section-title h2 {
        font-size: 3rem;
        font-weight: 800;
        margin-bottom: 1rem;
        background: linear-gradient(135deg, var(--gold) 0%, var(--white) 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .section-title p {
        font-size: 1.2rem;
        color: rgba(255, 255, 255, 0.7);
    }

    .brands-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 2rem;
        margin-bottom: 5rem;
    }

    .brand-card {
        background: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(10px);
        border-radius: 20px;
        padding: 2rem;
        text-align: center;
        transition: all 0.3s ease;
        border: 1px solid rgba(255, 215, 0, 0.1);
        cursor: pointer;
    }

    .brand-card:hover {
        transform: translateY(-10px);
        background: rgba(255, 255, 255, 0.1);
        border-color: var(--gold);
        box-shadow: 0 10px 40px rgba(255, 215, 0, 0.2);
    }

    .brand-card h3 {
        font-size: 1.8rem;
        font-weight: 700;
        margin-bottom: 0.5rem;
        color: var(--gold);
    }

    .brand-card p {
        color: rgba(255, 255, 255, 0.7);
        margin-bottom: 1rem;
    }

    .brand-card .btn-view {
        background: transparent;
        color: var(--gold);
        border: 1px solid var(--gold);
        padding: 0.7rem 1.5rem;
        border-radius: 50px;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s ease;
        display: inline-block;
    }

    .brand-card:hover .btn-view {
        background: var(--gold);
        color: var(--primary);
    }

    /* Cars Section */
    .cars-section {
        padding: 5rem 2rem;
        max-width: 1400px;
        width: 100%;
        margin: 0 auto;
        box-sizing: border-box;
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

    .scroll-indicator {
        position: absolute;
        bottom: 2rem;
        left: 50%;
        transform: translateX(-50%);
        animation: bounce 2s infinite;
    }

    @keyframes bounce {
        0%, 100% { transform: translateX(-50%) translateY(0); }
        50% { transform: translateX(-50%) translateY(-10px); }
    }

    .scroll-indicator::before {
        content: '↓';
        font-size: 2rem;
        color: var(--gold);
    }

    @media (max-width: 768px) {
        .hero h1 {
            font-size: 2.5rem;
        }

        .brands-grid,
        .cars-grid {
            grid-template-columns: 1fr;
        }
    }
</style>
@endsection

@section('content')
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Descubra o Luxo sobre Rodas</h1>
            <p>Explore nossa coleção exclusiva de veículos premium. Performance, elegância e tecnologia em cada detalhe.</p>
            <div class="hero-buttons">
                <a href="#cars" class="btn-primary">Ver Coleção</a>
                <a href="#brands" class="btn-secondary">Nossas Marcas</a>
            </div>
        </div>
        <div class="scroll-indicator"></div>
    </section>

    <!-- Brands Section -->
    <section class="brands-section" id="brands">
        <div class="section-title">
            <h2>Marcas Premium</h2>
            <p>As melhores marcas do mundo automotivo</p>
        </div>
        <div class="brands-grid">
            @foreach($carrosPorMarca as $marca => $carros)
                <div class="brand-card" onclick="window.location.href='{{ route('loja.marca', ['marca' => $marca]) }}'">
                    <h3>{{ $marca }}</h3>
                    <p>{{ $carros->count() }} veículo(s) disponível(is)</p>
                    <a href="{{ route('loja.marca', ['marca' => $marca]) }}" class="btn-view">Explorar</a>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Cars Section -->
    <section class="cars-section" id="cars">
        <div class="section-title">
            <h2>Nossa Coleção</h2>
            <p>Veículos selecionados com cuidado para você</p>
        </div>
        <div class="cars-grid">
            @foreach($carros as $carro)
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
    </section>
@endsection
