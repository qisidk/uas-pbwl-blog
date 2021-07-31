

<?php $__env->startSection('content'); ?>
        <div class="container">
        <h3>Daftar Album
            <a href="<?php echo e(url('/album/create')); ?>" class="btn btn-primary btn-sm float-right">Tambah Data</a>
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
                <td><?php echo e($row->id_album); ?> </td>
                <td><?php echo e($row->nama_photo); ?> </td>
                <td><?php echo e($row->text_photo); ?> </td>
                <td><a href="<?php echo e(url('album/' . $row->id_album . '/edit')); ?>" class="btn btn-primary btn-sm">Edit</a></td>
                <td><a href="<?php echo e(url('album/' . $row->id_album . '/hapus')); ?>" class="btn btn-danger btn-sm">Hapus</a> </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\uas-pwbl\resources\views/album/index.blade.php ENDPATH**/ ?>