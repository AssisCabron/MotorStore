<x-guest-layout>
    <h2 class="auth-title">Redefinir Senha</h2>
    <p class="auth-subtitle">Informe seu e-mail para receber o link de redefinição</p>

    <!-- Session Status -->
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div class="form-group">
            <label for="email" class="form-label">E-mail</label>
            <input id="email" class="form-input" type="email" name="email" value="{{ old('email') }}" required autofocus placeholder="seu@email.com">
            @error('email')
                <div class="form-error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <button type="submit" class="btn-primary">
                Enviar e-mail para redefinição de senha
            </button>
        </div>

        <div class="auth-links">
            <a href="{{ route('login') }}">Voltar para o login</a>
        </div>
    </form>
</x-guest-layout>
