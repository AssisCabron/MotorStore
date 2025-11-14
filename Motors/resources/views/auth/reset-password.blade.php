<x-guest-layout>
    <h2 class="auth-title">Redefinir Senha</h2>
    <p class="auth-subtitle">Digite sua nova senha abaixo</p>

    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div class="form-group">
            <label for="email" class="form-label">E-mail</label>
            <input id="email" class="form-input" type="email" name="email" value="{{ old('email', $request->email) }}" required autofocus autocomplete="username" placeholder="seu@email.com">
            @error('email')
                <div class="form-error">{{ $message }}</div>
            @enderror
        </div>

        <!-- Password -->
        <div class="form-group">
            <label for="password" class="form-label">Nova Senha</label>
            <input id="password" class="form-input" type="password" name="password" required autocomplete="new-password" placeholder="••••••••">
            @error('password')
                <div class="form-error">{{ $message }}</div>
            @enderror
        </div>

        <!-- Confirm Password -->
        <div class="form-group">
            <label for="password_confirmation" class="form-label">Confirmar Nova Senha</label>
            <input id="password_confirmation" class="form-input" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="••••••••">
            @error('password_confirmation')
                <div class="form-error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <button type="submit" class="btn-primary">
                Resetar Senha
            </button>
        </div>

        <div class="auth-links">
            <a href="{{ route('login') }}">Voltar para o login</a>
        </div>
    </form>
</x-guest-layout>
