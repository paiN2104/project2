
<?php $__env->startSection('title','Writer'); ?>

<?php $__env->startSection('content'); ?>
<div class="container mt-2">
    <h2>Writer Page</h2>
    <table class="table table-dark table-striped border">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Name</th>
            <th scope="col">Country</th>
            <th scope="col">Description</th>
            <th scope="col">Contact</th>
            <th scope="col">Photo</th>
          </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $writers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th scope="row"><?php echo e($loop->iteration); ?></th>
                    <td><a href="/writer/<?php echo e($index['id']); ?>"><?php echo e($index['name']); ?></a></td>
                    <td><?php echo e($index['country']); ?></td>
                    <td>            
                    <?php if($loop->even): ?>
                        <?php echo e("EVEN"); ?>

                    <?php else: ?>
                        <?php echo e("ODD"); ?>

                    <?php endif; ?> 
                    </td>
                    <td><?php echo e($index['contact']); ?></td>
                    <td><img src="<?php echo e($index['photo']); ?>" alt="" srcset=""></td>
                </tr>             
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\project2\resources\views/writer.blade.php ENDPATH**/ ?>