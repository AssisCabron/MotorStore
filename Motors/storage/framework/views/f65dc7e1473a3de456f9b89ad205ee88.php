<section class="profile-section">
    <header>
        <h2>Profile Information</h2>
        <p>Atualize as informações do seu perfil e endereço de e-mail.</p>
    </header>

    <form id="send-verification" method="post" action="<?php echo e(route('verification.send')); ?>">
        <?php echo csrf_field(); ?>
    </form>

    <form method="post" action="<?php echo e(route('profile.update')); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('patch'); ?>

        <div class="profile-form-group">
            <label for="name" class="profile-label">Nome</label>
            <input id="name" name="name" type="text" class="profile-input" value="<?php echo e(old('name', $user->name)); ?>" required autofocus autocomplete="name" placeholder="Seu nome">
            <?php $__errorArgs = ['name'];
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
            <label for="email" class="profile-label">E-mail</label>
            <input id="email" name="email" type="email" class="profile-input" value="<?php echo e(old('email', $user->email)); ?>" required autocomplete="username" placeholder="seu@email.com">
            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="profile-error"><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            <?php if($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail()): ?>
                <div style="margin-top: 1rem; padding: 1rem; background: rgba(255, 193, 7, 0.1); border: 1px solid rgba(255, 193, 7, 0.3); border-radius: 10px;">
                    <p style="color: rgba(255, 255, 255, 0.8); font-size: 0.9rem; margin-bottom: 0.5rem;">
                        Seu endereço de e-mail não foi verificado.
                    </p>
                    <button form="send-verification" style="color: #ffd700; text-decoration: underline; background: none; border: none; cursor: pointer; font-weight: 600;">
                        Clique aqui para reenviar o e-mail de verificação.
                    </button>

                    <?php if(session('status') === 'verification-link-sent'): ?>
                        <p style="margin-top: 0.5rem; color: #4caf50; font-weight: 600; font-size: 0.9rem;">
                            Um novo link de verificação foi enviado para o seu endereço de e-mail.
                        </p>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>

        <div style="display: flex; align-items: center; gap: 1rem;">
            <button type="submit" class="profile-btn-primary">Salvar</button>

            <?php if(session('status') === 'profile-updated'): ?>
                <span class="profile-success">Salvo!</span>
            <?php endif; ?>
        </div>
    </form>
</section>
<?php /**PATH C:\Users\si\Downloads\Motors-main\Motors-main\Motors\resources\views/profile/partials/update-profile-information-form.blade.php ENDPATH**/ ?>