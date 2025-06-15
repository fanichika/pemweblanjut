

<?php $__env->startSection('content'); ?>
<div class="container">
    <h2>Approval Berita (Editor)</h2>

    <?php if(session('success')): ?>
        <div class="alert alert-success"><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    <table class="table table-striped">
        <thead>
            <tr><th>Judul</th><th>Penulis</th><th>Aksi</th></tr>
        </thead>
        <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $beritas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td><?php echo e($b->judul); ?></td>
                    <td><?php echo e($b->user->name); ?></td>
                    <td>
                        <form action="<?php echo e(route('approval.update', $b->id)); ?>" method="POST" class="d-inline">
                            <?php echo csrf_field(); ?> <?php echo method_field('PATCH'); ?>
                            <button name="status" value="published" class="btn btn-sm btn-success">Publish</button>
                            <button name="status" value="draft" class="btn btn-sm btn-warning">Tolak</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr><td colspan="3">Tidak ada berita draft.</td></tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\thinkpad\starterkit-laravel\resources\views/approval/index.blade.php ENDPATH**/ ?>