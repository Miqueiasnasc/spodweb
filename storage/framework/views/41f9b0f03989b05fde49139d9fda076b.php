<?xml version="1.0" encoding="UTF-8"?>
<data>
    <?php $__currentLoopData = $registros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <item>
        <placa><?php echo e($item->plate); ?></placa>
        <marca><?php echo e($item->brand); ?></marca>
        <modelo><?php echo e($item->model); ?></modelo>
        <ano><?php echo e($item->year); ?></ano>
        <capacidade><?php echo e($item->capacity_kg); ?></capacidade>
        <ativo><?php echo e($item->is_active ? "true" : "false"); ?></ativo>
        <ultima_inspecao><?php echo e($item->last_inspection); ?></ultima_inspecao>
        <lat><?php echo e($item->location_lat); ?></lat>
        <lng><?php echo e($item->location_lng); ?></lng>
    </item>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</data>
<?php /**PATH D:\laragon\www\spodweb\resources\views/data-xml.blade.php ENDPATH**/ ?>