<x-guest-layout>
    <h2 class="auth-title">Confirmar Senha</h2>
    <p class="auth-subtitle">Esta é uma área segura. Por favor, confirme sua senha antes de continuar.</p>

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <!-- Password -->
        <div class="form-group">
            <label for="password" class="form-label">Senha</label>
            <input id="password" class="form-input" type="password" name="password" required autocomplete="current-password" placeholder="••••••••">
            @error('password')
                <div class="form-error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <button type="submit" class="btn-primary">
                Confirmar
            </button>
        </div>
    </form>
</x-guest-layout>
