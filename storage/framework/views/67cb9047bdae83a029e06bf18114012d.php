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
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Cadastrar Caminhão')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-8">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    
                    <?php if(session('success')): ?>
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                            <?php echo e(session('success')); ?>

                        </div>
                    <?php endif; ?>

                    
                    <?php if($errors->any()): ?>
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                            <ul class="list-disc ml-6">
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $erro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($erro); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    <?php endif; ?>

                    
                    <form action="<?php echo e(route('cadastrar')); ?>" method="POST">
                        <?php echo csrf_field(); ?>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Placa</label>
                                <input type="text" name="plate" class="mt-1 block w-full border-gray-300 rounded-md"
                                       placeholder="ABC-1234" required>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700">Marca</label>
                                <input type="text" name="brand" class="mt-1 block w-full border-gray-300 rounded-md"
                                       placeholder="Volvo" required>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700">Modelo</label>
                                <input type="text" name="model" class="mt-1 block w-full border-gray-300 rounded-md"
                                       placeholder="FH 540" required>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700">Ano</label>
                                <input type="number" name="year" class="mt-1 block w-full border-gray-300 rounded-md"
                                       placeholder="2020" required>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700">Capacidade (Kg)</label>
                                <input type="number" step="0.01" name="capacity_kg"
                                       class="mt-1 block w-full border-gray-300 rounded-md"
                                       placeholder="20000" required>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700">Ativo?</label>
                                <select name="is_active" class="mt-1 block w-full border-gray-300 rounded-md">
                                    <option value="1">Sim</option>
                                    <option value="0">Não</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700">Última inspeção</label>
                                <input type="date" name="last_inspection" class="mt-1 block w-full border-gray-300 rounded-md">
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700">Latitude</label>
                                <input type="text" name="location_lat" class="mt-1 block w-full border-gray-300 rounded-md"
                                       placeholder="-23.5505">
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700">Longitude</label>
                                <input type="text" name="location_lng" class="mt-1 block w-full border-gray-300 rounded-md"
                                       placeholder="-46.6333">
                            </div>
                        </div>

                        
                        <div class="flex justify-end mt-6">
                            <label class="px-6 py-2 bg-black-600 text-white font-semibold rounded-md hover:bg-black-700 transition" >cadastrar</label>
                            <button type="submit"
                                class="px-6 py-2 bg-black-600 text-white font-semibold rounded-md hover:bg-black-700 transition">
                                🚛 Cadastrar Caminhão
                            </button>
                        </div>
                    </form>

                </div>
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
<?php /**PATH D:\laragon\www\spodweb\resources\views/cadastrar.blade.php ENDPATH**/ ?>