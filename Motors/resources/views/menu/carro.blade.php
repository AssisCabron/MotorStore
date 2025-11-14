@extends('layouts.public')

@section('title', $carroUnico->descricao . ' - Motors')

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

    /* Product Section */
    .product-section {
        max-width: 1400px;
        margin: 0 auto;
        padding: 2rem;
    }

    .product-container {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 4rem;
        margin-bottom: 4rem;
    }

    /* Image Gallery */
    .image-gallery {
        position: relative;
    }

    .main-image {
        width: 100%;
        border-radius: 20px;
        overflow: hidden;
        margin-bottom: 1rem;
        background: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 215, 0, 0.1);
    }

    .main-image img {
        width: 100%;
        height: 500px;
        object-fit: cover;
        display: block;
    }

    .thumbnail-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 1rem;
    }

    .thumbnail {
        width: 100%;
        height: 100px;
        object-fit: cover;
        border-radius: 10px;
        cursor: pointer;
        transition: all 0.3s ease;
        border: 2px solid transparent;
        opacity: 0.7;
    }

    .thumbnail:hover,
    .thumbnail.active {
        opacity: 1;
        border-color: var(--gold);
        transform: scale(1.05);
    }

    /* Product Info */
    .product-info {
        background: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(10px);
        border-radius: 20px;
        padding: 2.5rem;
        border: 1px solid rgba(255, 215, 0, 0.1);
    }

    .product-brand {
        color: var(--gold);
        font-size: 1rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-bottom: 1rem;
    }

    .product-title {
        font-size: 2.5rem;
        font-weight: 800;
        margin-bottom: 1.5rem;
        background: linear-gradient(135deg, var(--white) 0%, var(--gold) 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .product-price {
        font-size: 3rem;
        font-weight: 900;
        color: var(--gold);
        margin-bottom: 2rem;
    }

    .product-description {
        font-size: 1.1rem;
        line-height: 1.8;
        color: rgba(255, 255, 255, 0.8);
        margin-bottom: 2rem;
    }

    .product-specs {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 1.5rem;
        margin-bottom: 2rem;
        padding: 1.5rem;
        background: rgba(255, 255, 255, 0.03);
        border-radius: 15px;
    }

    .spec-item {
        display: flex;
        flex-direction: column;
    }

    .spec-label {
        font-size: 0.9rem;
        color: rgba(255, 255, 255, 0.6);
        margin-bottom: 0.5rem;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .spec-value {
        font-size: 1.3rem;
        font-weight: 700;
        color: var(--white);
    }

    .btn-buy {
        background: linear-gradient(135deg, var(--gold) 0%, var(--gold-light) 100%);
        color: var(--primary);
        padding: 1.2rem 3rem;
        border-radius: 50px;
        text-decoration: none;
        font-weight: 800;
        font-size: 1.2rem;
        display: inline-block;
        width: 100%;
        text-align: center;
        transition: all 0.3s ease;
        box-shadow: 0 4px 20px rgba(255, 215, 0, 0.4);
        border: none;
        cursor: pointer;
    }

    .btn-buy:hover {
        transform: translateY(-3px);
        box-shadow: 0 6px 30px rgba(255, 215, 0, 0.6);
    }

    @media (max-width: 968px) {
        .product-container {
            grid-template-columns: 1fr;
        }

        .product-specs {
            grid-template-columns: 1fr;
        }

        .thumbnail-grid {
            grid-template-columns: repeat(3, 1fr);
        }
    }

    @media (max-width: 768px) {
        .product-title {
            font-size: 2rem;
        }

        .product-price {
            font-size: 2rem;
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
            <a href="{{ route('loja.marca', ['marca' => $carroUnico->marca]) }}">{{ $carroUnico->marca }}</a>
            <span>/</span>
            <span>{{ $carroUnico->descricao }}</span>
        </div>
    </section>

    <!-- Product Section -->
    <section class="product-section">
        <div class="product-container">
            <!-- Image Gallery -->
            <div class="image-gallery">
                <div class="main-image">
                    <img id="mainImage" src="{{ $carroUnico->fotos->first()->link_foto ?? '' }}" alt="{{ $carroUnico->descricao }}">
                </div>
                @if($carroUnico->fotos->count() > 1)
                    <div class="thumbnail-grid">
                        @foreach($carroUnico->fotos as $index => $foto)
                            <img src="{{ $foto->link_foto }}" alt="Foto {{ $index + 1 }}" 
                                 class="thumbnail {{ $index === 0 ? 'active' : '' }}"
                                 onclick="changeImage('{{ $foto->link_foto }}', this)">
                        @endforeach
                    </div>
                @endif
            </div>

            <!-- Product Info -->
            <div class="product-info">
                <div class="product-brand">{{ $carroUnico->marca }}</div>
                <h1 class="product-title">{{ $carroUnico->descricao }}</h1>
                <div class="product-price">R$ {{ number_format($carroUnico->preco, 2, ',', '.') }}</div>
                
                @if($carroUnico->Sobre)
                    <div class="product-description">
                        {{ $carroUnico->Sobre }}
                    </div>
                @endif

                <div class="product-specs">
                    <div class="spec-item">
                        <div class="spec-label">Cor</div>
                        <div class="spec-value">{{ $carroUnico->cor ?? 'N/A' }}</div>
                    </div>
                    <div class="spec-item">
                        <div class="spec-label">Ano</div>
                        <div class="spec-value">{{ $carroUnico->Ano_fabricacao ?? 'N/A' }}</div>
                    </div>
                    <div class="spec-item">
                        <div class="spec-label">Quilometragem</div>
                        <div class="spec-value">{{ number_format($carroUnico->kmRodado ?? 0, 0, ',', '.') }} km</div>
                    </div>
                    <div class="spec-item">
                        <div class="spec-label">Marca</div>
                        <div class="spec-value">{{ $carroUnico->marca }}</div>
                    </div>
                </div>

                <button class="btn-buy" onclick="alert('Funcionalidade de compra em desenvolvimento!')">Comprar Agora</button>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
<script>
    function changeImage(src, element) {
        document.getElementById('mainImage').src = src;
        document.querySelectorAll('.thumbnail').forEach(thumb => {
            thumb.classList.remove('active');
        });
        element.classList.add('active');
    }
</script>
@endsection
