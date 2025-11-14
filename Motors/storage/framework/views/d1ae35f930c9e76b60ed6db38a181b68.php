<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo e($carroUnico->descricao); ?> - Motors</title>
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
            .nav-links {
                gap: 1rem;
                font-size: 0.9rem;
            }

            .product-title {
                font-size: 2rem;
            }

            .product-price {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <nav>
            <a href="<?php echo e(route('home')); ?>" class="logo">MOTORS</a>
            <ul class="nav-links">
                <li><a href="<?php echo e(route('home')); ?>">Início</a></li>
                <li><a href="<?php echo e(route('home')); ?>#cars">Veículos</a></li>
                <li><a href="<?php echo e(route('home')); ?>#brands">Marcas</a></li>
                <li><a href="<?php echo e(route('login')); ?>" class="btn-login">Entrar</a></li>
            </ul>
        </nav>
    </header>

    <!-- Breadcrumb -->
    <section class="breadcrumb-section">
        <div class="breadcrumb">
            <a href="<?php echo e(route('home')); ?>">Início</a>
            <span>/</span>
            <a href="<?php echo e(route('loja.marca', ['marca' => $carroUnico->marca])); ?>"><?php echo e($carroUnico->marca); ?></a>
            <span>/</span>
            <span><?php echo e($carroUnico->descricao); ?></span>
        </div>
    </section>

    <!-- Product Section -->
    <section class="product-section">
        <div class="product-container">
            <!-- Image Gallery -->
            <div class="image-gallery">
                <div class="main-image">
                    <img id="mainImage" src="<?php echo e($carroUnico->fotos->first()->link_foto ?? ''); ?>" alt="<?php echo e($carroUnico->descricao); ?>">
                </div>
                <?php if($carroUnico->fotos->count() > 1): ?>
                    <div class="thumbnail-grid">
                        <?php $__currentLoopData = $carroUnico->fotos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $foto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <img src="<?php echo e($foto->link_foto); ?>" alt="Foto <?php echo e($index + 1); ?>" 
                                 class="thumbnail <?php echo e($index === 0 ? 'active' : ''); ?>"
                                 onclick="changeImage('<?php echo e($foto->link_foto); ?>', this)">
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Product Info -->
            <div class="product-info">
                <div class="product-brand"><?php echo e($carroUnico->marca); ?></div>
                <h1 class="product-title"><?php echo e($carroUnico->descricao); ?></h1>
                <div class="product-price">R$ <?php echo e(number_format($carroUnico->preco, 2, ',', '.')); ?></div>
                
                <?php if($carroUnico->Sobre): ?>
                    <div class="product-description">
                        <?php echo e($carroUnico->Sobre); ?>

                    </div>
                <?php endif; ?>

                <div class="product-specs">
                    <div class="spec-item">
                        <div class="spec-label">Cor</div>
                        <div class="spec-value"><?php echo e($carroUnico->cor ?? 'N/A'); ?></div>
                    </div>
                    <div class="spec-item">
                        <div class="spec-label">Ano</div>
                        <div class="spec-value"><?php echo e($carroUnico->Ano_fabricacao ?? 'N/A'); ?></div>
                    </div>
                    <div class="spec-item">
                        <div class="spec-label">Quilometragem</div>
                        <div class="spec-value"><?php echo e(number_format($carroUnico->kmRodado ?? 0, 0, ',', '.')); ?> km</div>
                    </div>
                    <div class="spec-item">
                        <div class="spec-label">Marca</div>
                        <div class="spec-value"><?php echo e($carroUnico->marca); ?></div>
                    </div>
                </div>

                <button class="btn-buy" onclick="alert('Funcionalidade de compra em desenvolvimento!')">Comprar Agora</button>
            </div>
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
                    <li><a href="<?php echo e(route('home')); ?>">Início</a></li>
                    <li><a href="<?php echo e(route('home')); ?>#cars">Veículos</a></li>
                    <li><a href="<?php echo e(route('home')); ?>#brands">Marcas</a></li>
                    <li><a href="<?php echo e(route('login')); ?>">Login</a></li>
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
            <p>&copy; <?php echo e(date('Y')); ?> Motors. Todos os direitos reservados.</p>
        </div>
    </footer>

    <script>
        function changeImage(src, element) {
            document.getElementById('mainImage').src = src;
            document.querySelectorAll('.thumbnail').forEach(thumb => {
                thumb.classList.remove('active');
            });
            element.classList.add('active');
        }

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
<?php /**PATH C:\Users\si\Downloads\Motors-main\Motors-main\Motors\resources\views/menu/carro.blade.php ENDPATH**/ ?>