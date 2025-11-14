<x-guest-layout>
    <h2 class="auth-title">Verificar E-mail</h2>
    <p class="auth-subtitle">Obrigado por se cadastrar! Antes de começar, você poderia verificar seu endereço de e-mail clicando no link que acabamos de enviar? Se você não recebeu o e-mail, teremos prazer em enviar outro.</p>

    @if (session('status') == 'verification-link-sent')
        <div class="alert alert-success">
            Um novo link de verificação foi enviado para o endereço de e-mail que você forneceu durante o cadastro.
        </div>
    @endif

    <div style="display: flex; flex-direction: column; gap: 1rem;">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf
            <button type="submit" class="btn-primary" style="width: 100%;">
                Reenviar código de verificação
            </button>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" style="width: 100%; background: transparent; color: rgba(255, 255, 255, 0.7); padding: 1rem; border: 1px solid rgba(255, 255, 255, 0.2); border-radius: 10px; cursor: pointer; font-weight: 600; transition: all 0.3s ease;">
                Sair
            </button>
        </form>
    </div>
</x-guest-layout>
