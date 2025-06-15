<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $__env->yieldContent('title', 'Dashboard'); ?></title>
    <link href="<?php echo e(asset('vendor/fontawesome-free/css/all.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/sb-admin-2.min.css')); ?>" rel="stylesheet">
</head>
<body id="page-top">
    <div id="wrapper">
        <?php echo $__env->make('layouts.sidebar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?> 

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <?php echo $__env->make('layouts.topbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?> 

                <div class="container-fluid">
                    <?php echo $__env->yieldContent('content'); ?> 
                </div>
            </div>
        </div>
    </div>

    
    <script src="<?php echo e(asset('vendor/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/jquery-easing/jquery.easing.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/sb-admin-2.min.js')); ?>"></script>
</body>
</html>
<?php /**PATH C:\Users\thinkpad\starterkit-laravel\resources\views/layouts/admin.blade.php ENDPATH**/ ?>