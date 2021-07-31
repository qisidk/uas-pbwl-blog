

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h3>Daftar Photo
            <a href="<?php echo e(url('/photo/create')); ?>" class="btn btn-primary btn-sm float-right">Tambah Data</a>
        </h3>
        <table class="table table bordered">
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Text</th>
                <th>Tanggal</th>
                <th>EDIT</th>
                <th>DELETE</th>
            </tr>
            <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($row->id_photo); ?> </td>
                <td><?php echo e($row->judul_photo); ?> </td>
                <td><?php echo e($row->text_photo); ?> </td>
                <td><?php echo e($row->tanggal_photo); ?> </td>
                <td><a href="<?php echo e(url('photo/' . $row->id_photo . '/edit')); ?>" class="btn btn-primary btn-sm">Edit</a></td>
                <td><a href="<?php echo e(url('photo/' . $row->id_photo . '/hapus')); ?>" class="btn btn-danger btn-sm">Hapus</a> </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\uas-pwbl\resources\views/photo/index.blade.php ENDPATH**/ ?>