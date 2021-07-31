

<?php $__env->startSection('content'); ?>
<div class="container">
    <h3>Tambah Data Category</h3>
    <form action="<?php echo e(url('/category')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <div class="form-group">
        <label for="">ID</label>
        <input type="text" name="id_category" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Nama</label>
        <input type="text" name="nama_category" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Text</label>
        <input type="text" name="text_category" class="form-control">
    </div>
    <div class="form-group">
        <input type="submit" value="SIMPAN" class="btn btn-primary">
    </div>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\uas-pwbl\resources\views/category/add.blade.php ENDPATH**/ ?>