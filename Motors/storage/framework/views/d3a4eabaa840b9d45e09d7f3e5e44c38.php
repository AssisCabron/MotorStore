<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2>Edição de Veículo</h2>
     <?php $__env->endSlot(); ?>

    <div class="admin-card">
        <?php if(session('success')): ?>
            <div style="background: rgba(76, 175, 80, 0.2); border: 1px solid rgba(76, 175, 80, 0.5); color: #4caf50; padding: 1rem; border-radius: 10px; margin-bottom: 2rem;">
                <strong>Sucesso!</strong> <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>

        <form action="<?php echo e(route('admin.salvar-edicao', $carroUnico->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1.5rem; margin-bottom: 2rem;">
                <div>
                    <label style="display: block; color: #ffd700; font-weight: 600; margin-bottom: 0.5rem;">Marca *</label>
                    <input type="text" name="marca" value="<?php echo e(old('marca', $carroUnico->marca)); ?>"
                           style="width: 100%; padding: 0.9rem; background: rgba(255, 255, 255, 0.1); border: 1px solid rgba(255, 215, 0, 0.3); border-radius: 10px; color: #fff; font-size: 1rem;">
                    <?php $__errorArgs = ['marca'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <small style="color: #f44336; display: block; margin-top: 0.5rem;"><?php echo e($message); ?></small>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div>
                    <label style="display: block; color: #ffd700; font-weight: 600; margin-bottom: 0.5rem;">Descrição *</label>
                    <input type="text" name="descricao" value="<?php echo e(old('descricao', $carroUnico->descricao)); ?>"
                           style="width: 100%; padding: 0.9rem; background: rgba(255, 255, 255, 0.1); border: 1px solid rgba(255, 215, 0, 0.3); border-radius: 10px; color: #fff; font-size: 1rem;">
                    <?php $__errorArgs = ['descricao'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <small style="color: #f44336; display: block; margin-top: 0.5rem;"><?php echo e($message); ?></small>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div>
                    <label style="display: block; color: #ffd700; font-weight: 600; margin-bottom: 0.5rem;">Ano Fabricação *</label>
                    <input type="number" name="Ano_fabricacao" value="<?php echo e(old('Ano_fabricacao', $carroUnico->Ano_fabricacao)); ?>" min="1900" max="<?php echo e(date('Y')); ?>"
                           style="width: 100%; padding: 0.9rem; background: rgba(255, 255, 255, 0.1); border: 1px solid rgba(255, 215, 0, 0.3); border-radius: 10px; color: #fff; font-size: 1rem;">
                    <?php $__errorArgs = ['Ano_fabricacao'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <small style="color: #f44336; display: block; margin-top: 0.5rem;"><?php echo e($message); ?></small>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div>
                    <label style="display: block; color: #ffd700; font-weight: 600; margin-bottom: 0.5rem;">Preço *</label>
                    <input type="text" name="preco" value="<?php echo e(old('preco', $carroUnico->preco)); ?>"
                           style="width: 100%; padding: 0.9rem; background: rgba(255, 255, 255, 0.1); border: 1px solid rgba(255, 215, 0, 0.3); border-radius: 10px; color: #fff; font-size: 1rem;">
                    <?php $__errorArgs = ['preco'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <small style="color: #f44336; display: block; margin-top: 0.5rem;"><?php echo e($message); ?></small>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div>
                    <label style="display: block; color: #ffd700; font-weight: 600; margin-bottom: 0.5rem;">Cor *</label>
                    <input type="text" name="cor" value="<?php echo e(old('cor', $carroUnico->cor)); ?>"
                           style="width: 100%; padding: 0.9rem; background: rgba(255, 255, 255, 0.1); border: 1px solid rgba(255, 215, 0, 0.3); border-radius: 10px; color: #fff; font-size: 1rem;">
                    <?php $__errorArgs = ['cor'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <small style="color: #f44336; display: block; margin-top: 0.5rem;"><?php echo e($message); ?></small>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div>
                    <label style="display: block; color: #ffd700; font-weight: 600; margin-bottom: 0.5rem;">KM Rodado *</label>
                    <input type="text" name="kmRodado" value="<?php echo e(old('kmRodado', $carroUnico->kmRodado)); ?>"
                           style="width: 100%; padding: 0.9rem; background: rgba(255, 255, 255, 0.1); border: 1px solid rgba(255, 215, 0, 0.3); border-radius: 10px; color: #fff; font-size: 1rem;">
                    <?php $__errorArgs = ['kmRodado'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <small style="color: #f44336; display: block; margin-top: 0.5rem;"><?php echo e($message); ?></small>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>

            <div style="margin-bottom: 2rem;">
                <label style="display: block; color: #ffd700; font-weight: 600; margin-bottom: 0.5rem;">Sobre</label>
                <textarea name="Sobre" rows="4"
                          style="width: 100%; padding: 0.9rem; background: rgba(255, 255, 255, 0.1); border: 1px solid rgba(255, 215, 0, 0.3); border-radius: 10px; color: #fff; font-size: 1rem; resize: vertical;"><?php echo e(old('Sobre', $carroUnico->Sobre)); ?></textarea>
                <?php $__errorArgs = ['Sobre'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <small style="color: #f44336; display: block; margin-top: 0.5rem;"><?php echo e($message); ?></small>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div style="background: rgba(255, 215, 0, 0.1); border: 1px solid rgba(255, 215, 0, 0.3); border-radius: 15px; padding: 2rem; margin-bottom: 2rem;">
                <h4 style="color: #ffd700; font-weight: 700; margin-bottom: 1.5rem; text-align: center;">Fotos Cadastradas</h4>
                <div id="fotos-container">
                    <?php $__currentLoopData = $carroUnico->fotos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $foto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div style="display: flex; gap: 1rem; margin-bottom: 1rem; align-items: center;">
                            <input type="hidden" name="fotos[<?php echo e($index); ?>][id]" value="<?php echo e($foto->id); ?>">
                            <input type="text" name="fotos[<?php echo e($index); ?>][url]" 
                                   value="<?php echo e(old("fotos.$index.url", $foto->link_foto)); ?>"
                                   style="flex: 1; padding: 0.9rem; background: rgba(255, 255, 255, 0.1); border: 1px solid rgba(255, 215, 0, 0.3); border-radius: 10px; color: #fff; font-size: 1rem;">
                            <a href="<?php echo e($foto->link_foto); ?>" target="_blank" 
                               style="background: rgba(33, 150, 243, 0.2); color: #2196f3; padding: 0.9rem 1.5rem; border: 1px solid #2196f3; border-radius: 10px; text-decoration: none; font-weight: 600;">
                                Ver Foto
                            </a>
                            <button type="button" onclick="this.parentElement.remove()" 
                                    style="background: rgba(244, 67, 54, 0.2); color: #f44336; padding: 0.9rem 1.5rem; border: 1px solid #f44336; border-radius: 10px; cursor: pointer; font-weight: 600;">
                                Remover
                            </button>
                        </div>
                        <?php $__errorArgs = ["fotos.$index.url"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <small style="color: #f44336; display: block; margin-bottom: 1rem;"><?php echo e($message); ?></small>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <button type="button" id="btn-add-foto" 
                        style="background: linear-gradient(135deg, #ffd700 0%, #ffed4e 100%); color: #1a1a2e; padding: 0.8rem 1.5rem; border: none; border-radius: 10px; cursor: pointer; font-weight: 700; width: 100%;">
                    ➕ Adicionar Foto
                </button>
            </div>

            <div style="text-align: center; display: flex; gap: 1rem; justify-content: center;">
                <a href="<?php echo e(route('admin.veiculos')); ?>" 
                   style="background: rgba(255, 255, 255, 0.1); color: #fff; padding: 1.2rem 3rem; border: 1px solid rgba(255, 215, 0, 0.3); border-radius: 50px; text-decoration: none; font-weight: 700; font-size: 1.1rem;">
                    Cancelar
                </a>
                <button type="submit" 
                        style="background: linear-gradient(135deg, #ffd700 0%, #ffed4e 100%); color: #1a1a2e; padding: 1.2rem 3rem; border: none; border-radius: 50px; font-weight: 800; font-size: 1.1rem; cursor: pointer; box-shadow: 0 4px 20px rgba(255, 215, 0, 0.4); transition: all 0.3s ease;">
                    Salvar Alterações
                </button>
            </div>
        </form>
    </div>

    <script>
        let fotosContainer = document.getElementById('fotos-container');
        let btnAdd = document.getElementById('btn-add-foto');
        let fotoIndex = <?php echo e($carroUnico->fotos->count()); ?>;

        btnAdd.addEventListener('click', function() {
            let div = document.createElement('div');
            div.style.cssText = 'display: flex; gap: 1rem; margin-bottom: 1rem; align-items: center;';
            div.innerHTML = `
                <input type="text" name="fotos[${fotoIndex}][url]" 
                       style="flex: 1; padding: 0.9rem; background: rgba(255, 255, 255, 0.1); border: 1px solid rgba(255, 215, 0, 0.3); border-radius: 10px; color: #fff; font-size: 1rem;"
                       placeholder="Link da foto (URL)">
                <a href="#" target="_blank" 
                   style="background: rgba(33, 150, 243, 0.2); color: #2196f3; padding: 0.9rem 1.5rem; border: 1px solid #2196f3; border-radius: 10px; text-decoration: none; font-weight: 600; pointer-events: none; opacity: 0.5;">
                    Ver Foto
                </a>
                <button type="button" onclick="this.parentElement.remove()" 
                        style="background: rgba(244, 67, 54, 0.2); color: #f44336; padding: 0.9rem 1.5rem; border: 1px solid #f44336; border-radius: 10px; cursor: pointer; font-weight: 600;">
                    Remover
                </button>
            `;
            fotosContainer.appendChild(div);
            fotoIndex++;
        });
    </script>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH C:\Users\si\Downloads\Motors-main\Motors-main\Motors\resources\views/admin/editar-veiculo.blade.php ENDPATH**/ ?>