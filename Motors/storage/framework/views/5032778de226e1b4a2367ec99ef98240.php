<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo $__env->yieldContent('title', 'Motors - Premium Car Collection'); ?></title>
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
            margin: 0;
            padding: 0;
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
            .nav-links {
                gap: 1rem;
                font-size: 0.9rem;
            }
        }

        <?php echo $__env->yieldContent('styles'); ?>
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

    <!-- Content -->
    <?php echo $__env->yieldContent('content'); ?>

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

    <?php echo $__env->yieldContent('scripts'); ?>
</body>
</html>

<?php /**PATH C:\Users\si\Downloads\Motors-main\Motors-main\Motors\resources\views/layouts/public.blade.php ENDPATH**/ ?>