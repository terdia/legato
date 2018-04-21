<?php $__env->startSection('title', 'Homepage'); ?>;

<?php $__env->startSection('body'); ?>
    <div class="text-center">
        <h1><?php echo e(getenv('APP_NAME')); ?> v1</h1>
        <p>Start building that next app.</p>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>