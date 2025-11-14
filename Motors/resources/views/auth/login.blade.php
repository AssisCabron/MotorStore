<x-guest-layout>
    <h2 class="auth-title">Bem-vindo de volta</h2>
    <p class="auth-subtitle">Entre na sua conta para continuar</p>

    <!-- Session Status -->
    <x-auth-session-status class="alert alert-success" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div class="form-group">
            <label for="email" class="form-label">E-mail</label>
            <input id="email" class="form-input" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="seu@email.com">
            <x-input-error :messages="$errors->get('email')" class="form-error" />
        </div>

        <!-- Password -->
        <div class="form-group">
            <label for="password" class="form-label">Senha</label>
            <input id="password" class="form-input" type="password" name="password" required autocomplete="current-password" placeholder="••••••••">
            <x-input-error :messages="$errors->get('password')" class="form-error" />
        </div>

        <!-- Remember Me -->
        <div class="form-group">
            <label class="form-checkbox">
                <input id="remember_me" type="checkbox" name="remember">
                <span>Lembrar de mim</span>
            </label>
        </div>

        <div class="form-group">
            <button type="submit" class="btn-primary">
                Entrar
            </button>
        </div>

        <div class="auth-links">
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}">
                    Esqueceu sua senha?
                </a>
            @endif
            <div style="margin-top: 1rem;">
                <span style="color: rgba(255, 255, 255, 0.7);">Não tem conta? </span>
                <a href="{{ route('register') }}">Cadastre-se</a>
            </div>
        </div>
    </form>
</x-guest-layout>
