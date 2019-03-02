<?php $__env->startSection('contenido'); ?>
    <?php $pagina = 10; ?>
    <h1>Bienvenido</h1>
    <p>el usuario autenticado es: <?php echo e(auth()->user()->email); ?></p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/layoutA', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>