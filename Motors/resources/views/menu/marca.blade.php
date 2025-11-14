<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $marca }} - Motors</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary: #1a1a2e;
            --secondary: #16213e;
            --accent: #0f3460;
            --gold: #ffd700;
            --gold-light: #ffed4e;
            --text-light: #e94560;
            --white: #ffffff;
            --gray-light: #f5f5f5;
            --gray: #888;
            --shadow: rgba(0, 0, 0, 0.1);
        }

        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 100%);
            color: var(--white);
            overflow-x: hidden;
            line-height: 1.6;
            min-height: 100vh;
        }

        /* Header */
        header {
            position: fixed;
            top: 0;
            width: 100%;
            background: rgba(26, 26, 46, 0.95);
            backdrop-filter: blur(10px);
            z-index: 1000;
            padding: 1rem 0;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
        }

        nav {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: 800;
            background: linear-gradient(135deg, var(--gold) 0%, var(--gold-light) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-decoration: none;
            letter-spacing: 2px;
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 2rem;
            align-items: center;
        }

        .nav-links a {
            color: var(--white);
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
            position: relative;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--gold);
            transition: width 0.3s ease;
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .nav-links a:hover {
            color: var(--gold);
        }

        .btn-login {
            background: linear-gradient(135deg, var(--gold) 0%, var(--gold-light) 100%);
            color: var(--primary);
            padding: 0.7rem 1.5rem;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(255, 215, 0, 0.3);
        }

        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(255, 215, 0, 0.5);
        }

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

        /* Footer */
        footer {
            background: rgba(10, 10, 26, 0.9);
            padding: 4rem 2rem 2rem;
            margin-top: 5rem;
            border-top: 1px solid rgba(255, 215, 0, 0.1);
        }

        .footer-content {
            max-width: 1400px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 3rem;
        }

        .footer-section h4 {
            color: var(--gold);
            margin-bottom: 1rem;
            font-size: 1.2rem;
        }

        .footer-section ul {
            list-style: none;
        }

        .footer-section ul li {
            margin-bottom: 0.5rem;
        }

        .footer-section a {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-section a:hover {
            color: var(--gold);
        }

        .footer-bottom {
            text-align: center;
            padding-top: 2rem;
            margin-top: 2rem;
            border-top: 1px solid rgba(255, 215, 0, 0.1);
            color: rgba(255, 255, 255, 0.5);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .page-header h1 {
                font-size: 2.5rem;
            }

            .nav-links {
                gap: 1rem;
                font-size: 0.9rem;
            }

            .cars-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <nav>
            <a href="{{ route('home') }}" class="logo">MOTORS</a>
            <ul class="nav-links">
                <li><a href="{{ route('home') }}">Início</a></li>
                <li><a href="{{ route('home') }}#cars">Veículos</a></li>
                <li><a href="{{ route('home') }}#brands">Marcas</a></li>
                <li><a href="{{ route('login') }}" class="btn-login">Entrar</a></li>
            </ul>
        </nav>
    </header>

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

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h4>Motors</h4>
                <p style="color: rgba(255, 255, 255, 0.7);">Sua loja de veículos premium. Qualidade, confiança e excelência em cada veículo.</p>
            </div>
            <div class="footer-section">
                <h4>Links Rápidos</h4>
                <ul>
                    <li><a href="{{ route('home') }}">Início</a></li>
                    <li><a href="{{ route('home') }}#cars">Veículos</a></li>
                    <li><a href="{{ route('home') }}#brands">Marcas</a></li>
                    <li><a href="{{ route('login') }}">Login</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h4>Contato</h4>
                <ul>
                    <li><a href="#">R. das Violetas, 10</a></li>
                    <li><a href="#">motors@motors.com.br</a></li>
                    <li><a href="#">(00) 0000-0000</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; {{ date('Y') }} Motors. Todos os direitos reservados.</p>
        </div>
    </footer>

    <script>
        // Smooth scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Header scroll effect
        let lastScroll = 0;
        const header = document.querySelector('header');
        window.addEventListener('scroll', () => {
            const currentScroll = window.pageYOffset;
            if (currentScroll > 100) {
                header.style.background = 'rgba(26, 26, 46, 0.98)';
            } else {
                header.style.background = 'rgba(26, 26, 46, 0.95)';
            }
            lastScroll = currentScroll;
        });
    </script>
</body>
</html>
