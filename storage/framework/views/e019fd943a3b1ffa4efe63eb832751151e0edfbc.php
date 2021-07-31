

<?php $__env->startSection('content'); ?>
        <div class="container">
        <h3>Daftar Category
               <a href="<?php echo e(url('/category/create')); ?>" class="btn btn-primary btn-sm float-right">Tambah Data</a>
        </h3>
        <table class="table table bordered">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Text</th>
                <th>EDIT</th>
                <th>DELETE</th>
            </tr>
            <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($row->id_category); ?> </td>
                <td><?php echo e($row->nama_category); ?> </td>
                <td><?php echo e($row->text_category); ?> </td>
                <td><a href="<?php echo e(url('category/' . $row->id_category . '/edit')); ?>" class="btn btn-primary btn-sm">Edit</a></td>
                <td><a href="<?php echo e(url('category/' . $row->id_category . '/hapus')); ?>" class="btn btn-primary btn-sm">Hapus</a> </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\uas-pbwl\resources\views/category/index.blade.php ENDPATH**/ ?>