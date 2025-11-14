<section class="profile-section">
    <header>
        <h2>Apagar conta</h2>
        <p>Depois que sua conta for excluída, todos os seus recursos e dados serão excluídos permanentemente. Antes de excluir sua conta, baixe todos os dados ou informações que deseja reter.</p>
    </header>

    <button onclick="openDeleteModal()" class="profile-btn-danger">
        Apagar conta
    </button>

    <!-- Modal -->
    <div id="deleteModal" style="display: none;" class="modal-overlay" onclick="if(event.target === this) closeDeleteModal()">
        <div class="modal-content" onclick="event.stopPropagation()">
            <h2>Tem certeza que deseja deletar sua conta?</h2>
            <p>Depois que sua conta for excluída, todos os seus recursos e dados serão excluídos permanentemente. Antes de excluir sua conta, baixe todos os dados ou informações que deseja reter.</p>

            <form method="post" action="{{ route('profile.destroy') }}">
                @csrf
                @method('delete')

                <div class="profile-form-group">
                    <label for="password" class="profile-label">Digite sua senha para confirmar</label>
                    <input id="password" name="password" type="password" class="profile-input" placeholder="••••••••" required>
                    @error('password', 'userDeletion')
                        <span class="profile-error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="modal-actions">
                    <button type="button" onclick="closeDeleteModal()" class="profile-btn-secondary">
                        Cancelar
                    </button>
                    <button type="submit" class="profile-btn-danger">
                        Apagar conta
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function openDeleteModal() {
            document.getElementById('deleteModal').style.display = 'flex';
        }

        function closeDeleteModal() {
            document.getElementById('deleteModal').style.display = 'none';
        }

        // Fechar modal com ESC
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeDeleteModal();
            }
        });

        // Mostrar modal se houver erros
        @if($errors->userDeletion->isNotEmpty())
            openDeleteModal();
        @endif
    </script>
</section>
