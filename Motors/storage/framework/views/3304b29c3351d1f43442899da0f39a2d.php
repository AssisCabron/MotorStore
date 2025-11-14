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
        <h2>Veículos Cadastrados</h2>
     <?php $__env->endSlot(); ?>

    <div class="admin-card">
        <div style="margin-bottom: 2rem; display: flex; justify-content: space-between; align-items: center;">
            <h3 style="font-size: 1.5rem; font-weight: 700; color: #ffd700;">Total: <?php echo e($carros->count()); ?> veículo(s)</h3>
            <a href="<?php echo e(route('admin.cadastro-veiculo')); ?>" style="background: linear-gradient(135deg, #ffd700 0%, #ffed4e 100%); color: #1a1a2e; padding: 0.8rem 1.5rem; border-radius: 10px; text-decoration: none; font-weight: 700; transition: all 0.3s ease;">
                ➕ Novo Veículo
            </a>
        </div>

        <div style="overflow-x: auto;">
            <table style="width: 100%; border-collapse: collapse;">
                <thead>
                    <tr style="background: rgba(255, 215, 0, 0.1); border-bottom: 2px solid #ffd700;">
                        <th style="padding: 1rem; text-align: left; color: #ffd700; font-weight: 700;">Marca</th>
                        <th style="padding: 1rem; text-align: left; color: #ffd700; font-weight: 700;">Descrição</th>
                        <th style="padding: 1rem; text-align: left; color: #ffd700; font-weight: 700;">Ano</th>
                        <th style="padding: 1rem; text-align: left; color: #ffd700; font-weight: 700;">Preço</th>
                        <th style="padding: 1rem; text-align: left; color: #ffd700; font-weight: 700;">Cor</th>
                        <th style="padding: 1rem; text-align: left; color: #ffd700; font-weight: 700;">KM</th>
                        <th style="padding: 1rem; text-align: center; color: #ffd700; font-weight: 700;">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $carros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $carro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr style="border-bottom: 1px solid rgba(255, 215, 0, 0.1); transition: background 0.3s ease;" onmouseover="this.style.background='rgba(255, 215, 0, 0.05)'" onmouseout="this.style.background='transparent'">
                            <td style="padding: 1rem; color: rgba(255, 255, 255, 0.9);"><?php echo e($carro->marca); ?></td>
                            <td style="padding: 1rem; color: rgba(255, 255, 255, 0.9); max-width: 300px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;"><?php echo e($carro->descricao); ?></td>
                            <td style="padding: 1rem; color: rgba(255, 255, 255, 0.9);"><?php echo e($carro->Ano_fabricacao); ?></td>
                            <td style="padding: 1rem; color: #ffd700; font-weight: 700;">R$ <?php echo e(number_format($carro->preco, 2, ',', '.')); ?></td>
                            <td style="padding: 1rem; color: rgba(255, 255, 255, 0.9);"><?php echo e($carro->cor); ?></td>
                            <td style="padding: 1rem; color: rgba(255, 255, 255, 0.9);"><?php echo e(number_format($carro->kmRodado, 0, ',', '.')); ?> km</td>
                            <td style="padding: 1rem; text-align: center;">
                                <div style="display: flex; gap: 0.5rem; justify-content: center;">
                                    <a href="<?php echo e(route('admin.editar-veiculo', ['id' => $carro->id])); ?>" style="background: rgba(255, 193, 7, 0.2); color: #ffc107; padding: 0.5rem 1rem; border-radius: 8px; text-decoration: none; font-weight: 600; transition: all 0.3s ease; border: 1px solid #ffc107;">
                                        ✏️ Editar
                                    </a>
                                    <a href="<?php echo e(route('admin.deletar-veiculo', ['id' => $carro->id])); ?>" 
                                       onclick="return confirm('Tem certeza que deseja deletar este veículo?')"
                                       style="background: rgba(244, 67, 54, 0.2); color: #f44336; padding: 0.5rem 1rem; border-radius: 8px; text-decoration: none; font-weight: 600; transition: all 0.3s ease; border: 1px solid #f44336;">
                                        🗑️ Deletar
                                    </a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
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
<?php /**PATH C:\Users\si\Downloads\Motors-main\Motors-main\Motors\resources\views/admin/veiculos.blade.php ENDPATH**/ ?>