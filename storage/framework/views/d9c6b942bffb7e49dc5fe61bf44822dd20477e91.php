

<?php $__env->startSection('content'); ?>
<div class="container">
    <h3>Edit Data Photo</h3>
    <form action="<?php echo e(url('/photo/' . $row->id_photo)); ?>" method="POST">
    <input name="_method" type="hidden" value="PATCH">
    <?php echo csrf_field(); ?> 
    <div class="container">
     <div class="form-group">
        <label for="">ID</label>
        <input type="text" name="id_photo" class="form-control" value="<?php echo e($row->id_photo); ?>">
    </div>
    <div class="form-group">
        <label for="">Judul</label>
        <input type="text" name="judul_photo" class="form-control" value="<?php echo e($row->judul_photo); ?>">
    </div>
    <div class="form-group">
        <label for="">Text</label>
        <input type="text" name="text_photo" class="form-control"  value="<?php echo e($row->text_photo); ?>">
    </div>
    <div class="form-group">
        <label for="">Tanggal</label>
        <input type="date" name="tanggal_photo" class="form-control" value="<?php echo e($row->tanggal_photo); ?>">
    </div>
    <div class="form-group">
        <input type="submit" value="UPDATE" class="btn btn-primary">
    </div>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\uas-pbwl\resources\views/photo/edit.blade.php ENDPATH**/ ?>