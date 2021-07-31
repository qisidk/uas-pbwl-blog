

<?php $__env->startSection('content'); ?>
<div class="container">
    <h3>Tambah Data Album</h3>
    <form action="<?php echo e(url('/album')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <div class="form-group">
        <label for="">ID</label>
        <input type="text" name="id_album" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Nama</label>
        <input type="text" name="nama_photo" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Text</label>
        <input type="text" name="text_photo" class="form-control">
    </div>
    <div class="form-group">
        <input type="submit" value="SIMPAN" class="btn btn-primary">
    </div>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\uas-pwbl\resources\views/album/add.blade.php ENDPATH**/ ?>