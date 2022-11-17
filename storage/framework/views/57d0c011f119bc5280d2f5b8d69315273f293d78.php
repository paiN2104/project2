
<?php $__env->startSection('title','Detail'); ?>

<?php $__env->startSection('content'); ?>
<div class="container mt-4 p-5 bg-primary text-white rounded">
   <h1>Nama : <?php echo e($writer['name']); ?></h1>
   <h3>Asal : <?php echo e($writer['country']); ?></h3>
   <h3>Contact : <?php echo e($writer['contact']); ?></h3>
</div>

<h1>Books</h1>
<table class="table table-dark table-striped border">
   <thead>
     <tr>
       <th scope="col">No</th>
       <th scope="col">Title</th>
       <th scope="col">Synopsis</th>
       <th scope="col">Cover Photo</th>

     </tr>
   </thead>
   <tbody>
       <?php $__currentLoopData = $writer->books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           <tr>
               <th scope="row"><?php echo e($loop->iteration); ?></th>
               <td><?php echo e($book->title); ?></td>
               <td><?php echo e($book->synopsis); ?></td>
               <td><img src="<?php echo e($book->coverphoto); ?>" alt="" srcset=""></td>
           </tr>             
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   </tbody>
 </table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\project2\resources\views/writerDetail.blade.php ENDPATH**/ ?>