<x-guest-layout>
    <h2 class="auth-title">Criar Conta</h2>
    <p class="auth-subtitle">Cadastre-se para começar</p>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div class="form-group">
            <label for="name" class="form-label">Nome</label>
            <input id="name" class="form-input" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Seu nome completo">
            <x-input-error :messages="$errors->get('name')" class="form-error" />
        </div>

        <!-- Email Address -->
        <div class="form-group">
            <label for="email" class="form-label">E-mail</label>
            <input id="email" class="form-input" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="seu@email.com">
            <x-input-error :messages="$errors->get('email')" class="form-error" />
        </div>

        <!-- Password -->
        <div class="form-group">
            <label for="password" class="form-label">Senha</label>
            <input id="password" class="form-input" type="password" name="password" required autocomplete="new-password" placeholder="••••••••">
            <x-input-error :messages="$errors->get('password')" class="form-error" />
        </div>

        <!-- Confirm Password -->
        <div class="form-group">
            <label for="password_confirmation" class="form-label">Confirmar Senha</label>
            <input id="password_confirmation" class="form-input" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="••••••••">
            <x-input-error :messages="$errors->get('password_confirmation')" class="form-error" />
        </div>

        <div class="form-group">
            <button type="submit" class="btn-primary">
                Cadastrar
            </button>
        </div>

        <div class="auth-links">
            <span style="color: rgba(255, 255, 255, 0.7);">Já possui conta? </span>
            <a href="{{ route('login') }}">Entrar</a>
        </div>
    </form>
</x-guest-layout>
