<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Motors - Premium Car Collection</title>
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
            margin: 0 auto;
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
            .hero h1 {
                font-size: 2.5rem;
            }

            .nav-links {
                gap: 1rem;
                font-size: 0.9rem;
            }

            .brands-grid,
            .cars-grid {
                grid-template-columns: 1fr;
            }
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
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <nav>
            <a href="{{ route('home') }}" class="logo">MOTORS</a>
            <ul class="nav-links">
                <li><a href="{{ route('home') }}">Início</a></li>
                <li><a href="#cars">Veículos</a></li>
                <li>
                    <a href="#brands">Marcas</a>
                </li>
                <li><a href="{{ route('login') }}" class="btn-login">Entrar</a></li>
            </ul>
        </nav>
    </header>

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
                    <li><a href="#cars">Veículos</a></li>
                    <li><a href="#brands">Marcas</a></li>
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
