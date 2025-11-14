<nav class="admin-nav">
    <div style="display: flex; gap: 2rem; align-items: center; width: 100%; max-width: 1600px; margin: 0 auto;">
        <a href="{{ route('home') }}" style="font-size: 1.5rem; font-weight: 900; background: linear-gradient(135deg, #ffd700 0%, #ffed4e 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; text-decoration: none; letter-spacing: 2px;">MOTORS</a>
        
        <div style="display: flex; gap: 1rem; margin-left: auto;">
            <a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">Dashboard</a>
            <a href="{{ route('admin.veiculos') }}" class="{{ request()->routeIs('admin.*') ? 'active' : '' }}">Veículos</a>
            <a href="{{ route('admin.cadastro-veiculo') }}" class="{{ request()->routeIs('admin.cadastro-veiculo') ? 'active' : '' }}">Cadastrar</a>
            <a href="{{ route('home') }}">Loja</a>
            
            <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                @csrf
                <button type="submit" style="background: transparent; border: none; color: rgba(255, 255, 255, 0.8); font-weight: 600; padding: 0.5rem 1rem; border-radius: 8px; cursor: pointer; transition: all 0.3s ease; font-family: inherit; font-size: inherit;">
                    Sair
                </button>
            </form>
        </div>
    </div>
</nav>
