<section class="profile-section">
    <header>
        <h2>Alterar senha</h2>
        <p>Certifique-se de que sua conta esteja usando uma senha longa e aleatória para permanecer segura.</p>
    </header>

    <form method="post" action="<?php echo e(route('password.update')); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('put'); ?>

        <div class="profile-form-group">
            <label for="update_password_current_password" class="profile-label">Senha antiga</label>
            <input id="update_password_current_password" name="current_password" type="password" class="profile-input" autocomplete="current-password" placeholder="••••••••">
            <?php $__errorArgs = ['current_password', 'updatePassword'];
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

        <div class="profile-form-group">
            <label for="update_password_password" class="profile-label">Senha nova</label>
            <input id="update_password_password" name="password" type="password" class="profile-input" autocomplete="new-password" placeholder="••••••••">
            <?php $__errorArgs = ['password', 'updatePassword'];
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

        <div class="profile-form-group">
            <label for="update_password_password_confirmation" class="profile-label">Confirmar senha nova</label>
            <input id="update_password_password_confirmation" name="password_confirmation" type="password" class="profile-input" autocomplete="new-password" placeholder="••••••••">
            <?php $__errorArgs = ['password_confirmation', 'updatePassword'];
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

        <div style="display: flex; align-items: center; gap: 1rem;">
            <button type="submit" class="profile-btn-primary">Salvar</button>

            <?php if(session('status') === 'password-updated'): ?>
                <span class="profile-success">Salvo!</span>
            <?php endif; ?>
        </div>
    </form>
</section>
<?php /**PATH C:\Users\si\Downloads\Motors-main\Motors-main\Motors\resources\views/profile/partials/update-password-form.blade.php ENDPATH**/ ?>