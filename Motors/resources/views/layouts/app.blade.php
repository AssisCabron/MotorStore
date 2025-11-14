<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ?? config('app.name', 'Motors') }} - Admin</title>
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
            --white: #ffffff;
            --gray-light: #f5f5f5;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 100%);
            min-height: 100vh;
            color: var(--white);
        }

        .admin-header {
            background: rgba(26, 26, 46, 0.95);
            backdrop-filter: blur(10px);
            padding: 1.5rem 2rem;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
            border-bottom: 1px solid rgba(255, 215, 0, 0.1);
        }

        .admin-header h2 {
            font-size: 1.8rem;
            font-weight: 800;
            background: linear-gradient(135deg, var(--gold) 0%, var(--gold-light) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .admin-nav {
            background: rgba(22, 33, 62, 0.8);
            padding: 1rem 2rem;
            display: flex;
            gap: 2rem;
            align-items: center;
            border-bottom: 1px solid rgba(255, 215, 0, 0.1);
        }

        .admin-nav a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            font-weight: 600;
            padding: 0.5rem 1rem;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .admin-nav a:hover,
        .admin-nav a.active {
            background: rgba(255, 215, 0, 0.1);
            color: var(--gold);
        }

        .admin-content {
            max-width: 1600px;
            margin: 0 auto;
            padding: 2rem;
        }

        .admin-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 2rem;
            border: 1px solid rgba(255, 215, 0, 0.1);
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="min-h-screen">
        @include('layouts.navigation')

        @isset($header)
            <header class="admin-header">
                <div class="max-w-7xl mx-auto">
                    {{ $header }}
                </div>
            </header>
        @endisset

        <main class="admin-content">
            {{ $slot }}
        </main>
    </div>
</body>
</html>
