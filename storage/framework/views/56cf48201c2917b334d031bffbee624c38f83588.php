<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Dashboard')); ?></div>
                

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                            
                        </div>
                    <?php endif; ?>

                    <?php echo e(__('You are logged in!')); ?>

                    <br>
                    <br>
                    <br>
                    <center><h1>WELCOME TO MY BLOG</h1></center>
                    <br>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\uas-pwbl\resources\views/home.blade.php ENDPATH**/ ?>