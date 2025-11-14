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
        <h2>Dashboard</h2>
     <?php $__env->endSlot(); ?>

    <div class="admin-card">
        <div style="text-align: center; padding: 3rem;">
            <h1 style="font-size: 3rem; font-weight: 900; margin-bottom: 1rem; background: linear-gradient(135deg, #ffffff 0%, #ffd700 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">
                Bem-vindo ao Painel Admin!
            </h1>
            <p style="font-size: 1.2rem; color: rgba(255, 255, 255, 0.7); margin-bottom: 3rem;">
                Gerencie seus veículos e explore todas as funcionalidades
            </p>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem; margin-top: 3rem;">
                <a href="<?php echo e(route('admin.veiculos')); ?>" style="background: rgba(255, 215, 0, 0.1); border: 1px solid #ffd700; border-radius: 15px; padding: 2rem; text-decoration: none; transition: all 0.3s ease; display: block;">
                    <div style="font-size: 3rem; margin-bottom: 1rem;">🚗</div>
                    <h3 style="color: #ffd700; font-weight: 700; margin-bottom: 0.5rem;">Ver Veículos</h3>
                    <p style="color: rgba(255, 255, 255, 0.7);">Visualize e gerencie todos os veículos cadastrados</p>
                </a>
                
                <a href="<?php echo e(route('admin.cadastro-veiculo')); ?>" style="background: rgba(255, 215, 0, 0.1); border: 1px solid #ffd700; border-radius: 15px; padding: 2rem; text-decoration: none; transition: all 0.3s ease; display: block;">
                    <div style="font-size: 3rem; margin-bottom: 1rem;">➕</div>
                    <h3 style="color: #ffd700; font-weight: 700; margin-bottom: 0.5rem;">Cadastrar Veículo</h3>
                    <p style="color: rgba(255, 255, 255, 0.7);">Adicione um novo veículo à sua loja</p>
                </a>
                
                <a href="<?php echo e(route('home')); ?>" style="background: rgba(255, 215, 0, 0.1); border: 1px solid #ffd700; border-radius: 15px; padding: 2rem; text-decoration: none; transition: all 0.3s ease; display: block;">
                    <div style="font-size: 3rem; margin-bottom: 1rem;">🏠</div>
                    <h3 style="color: #ffd700; font-weight: 700; margin-bottom: 0.5rem;">Ver Loja</h3>
                    <p style="color: rgba(255, 255, 255, 0.7);">Visualize como os clientes veem a loja</p>
                </a>
            </div>
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
<?php /**PATH C:\Users\si\Downloads\Motors-main\Motors-main\Motors\resources\views/dashboard.blade.php ENDPATH**/ ?>