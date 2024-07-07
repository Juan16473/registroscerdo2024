<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registrodecerdo</title>
</head>
<body>
    <h1>Bienvenido <?php echo e($nombre); ?> a la aplicación registros de cerdo 2024</h1>
    <ul>
        <?php $__currentLoopData = $Registros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Registros): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li>
        <?php echo e($Registros['nombre']); ?>

        </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</body>
</html><?php /**PATH C:\laragon\www\registroscerdo2024\resources\views/welcome.blade.php ENDPATH**/ ?>