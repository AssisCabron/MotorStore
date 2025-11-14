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

            <form method="post" action="<?php echo e(route('profile.destroy')); ?>">
                <?php echo csrf_field(); ?>
                <?php echo method_field('delete'); ?>

                <div class="profile-form-group">
                    <label for="password" class="profile-label">Digite sua senha para confirmar</label>
                    <input id="password" name="password" type="password" class="profile-input" placeholder="••••••••" required>
                    <?php $__errorArgs = ['password', 'userDeletion'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="profile-error"><?php echo e($message); ?></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
        <?php if($errors->userDeletion->isNotEmpty()): ?>
            openDeleteModal();
        <?php endif; ?>
    </script>
</section>
<?php /**PATH C:\Users\si\Downloads\Motors-main\Motors-main\Motors\resources\views/profile/partials/delete-user-form.blade.php ENDPATH**/ ?>