
<?php $__env->startSection('title','Detail'); ?>

<?php $__env->startSection('content'); ?>
<div class="container mt-4 p-5 bg-primary text-white rounded">
   <h1>Nama : <?php echo e($writer['name']); ?></h1>
   <h3>Asal : <?php echo e($writer['country']); ?></h3>
   <h3>Contact : <?php echo e($writer['contact']); ?></h3>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\project2\resources\views/writerDetail.blade.php ENDPATH**/ ?>