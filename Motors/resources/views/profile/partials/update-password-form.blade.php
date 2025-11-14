<section class="profile-section">
    <header>
        <h2>Alterar senha</h2>
        <p>Certifique-se de que sua conta esteja usando uma senha longa e aleatória para permanecer segura.</p>
    </header>

    <form method="post" action="{{ route('password.update') }}">
        @csrf
        @method('put')

        <div class="profile-form-group">
            <label for="update_password_current_password" class="profile-label">Senha antiga</label>
            <input id="update_password_current_password" name="current_password" type="password" class="profile-input" autocomplete="current-password" placeholder="••••••••">
            @error('current_password', 'updatePassword')
                <span class="profile-error">{{ $message }}</span>
            @enderror
        </div>

        <div class="profile-form-group">
            <label for="update_password_password" class="profile-label">Senha nova</label>
            <input id="update_password_password" name="password" type="password" class="profile-input" autocomplete="new-password" placeholder="••••••••">
            @error('password', 'updatePassword')
                <span class="profile-error">{{ $message }}</span>
            @enderror
        </div>

        <div class="profile-form-group">
            <label for="update_password_password_confirmation" class="profile-label">Confirmar senha nova</label>
            <input id="update_password_password_confirmation" name="password_confirmation" type="password" class="profile-input" autocomplete="new-password" placeholder="••••••••">
            @error('password_confirmation', 'updatePassword')
                <span class="profile-error">{{ $message }}</span>
            @enderror
        </div>

        <div style="display: flex; align-items: center; gap: 1rem;">
            <button type="submit" class="profile-btn-primary">Salvar</button>

            @if (session('status') === 'password-updated')
                <span class="profile-success">Salvo!</span>
            @endif
        </div>
    </form>
</section>
