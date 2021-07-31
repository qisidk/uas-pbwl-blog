

<?php $__env->startSection('content'); ?>
<div class="container">
    <h3>Edit Data Category</h3>
    <form action="<?php echo e(url('/category/' . $row->id_category)); ?>" method="POST">
    <input name="_method" type="hidden" value="PATCH">
    <?php echo csrf_field(); ?> 
    <div class="container">
     <div class="form-group">
        <label for="">ID</label>
        <input type="text" name="id_category" class="form-control" value="<?php echo e($row->id_category); ?>">
    </div>
    <div class="form-group">
        <label for="">Nama Category</label>
        <input type="text" name="nama_category" class="form-control" value="<?php echo e($row->nama_category); ?>">
    </div>
    <div class="form-group">
        <label for="">Text</label>
        <input type="text" name="text_category" class="form-control"  value="<?php echo e($row->text_category); ?>">
    </div>
    <div class="form-group">
        <input type="submit" value="UPDATE" class="btn btn-primary">
    </div>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\uas-pbwl\resources\views/category/edit.blade.php ENDPATH**/ ?>