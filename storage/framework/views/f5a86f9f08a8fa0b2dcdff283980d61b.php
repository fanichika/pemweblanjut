

<?php $__env->startSection('title', 'Daftar Berita'); ?>

<?php $__env->startSection('content'); ?>
<h1 class="h3 mb-4 text-gray-800">Daftar Berita</h1>

<a href="<?php echo e(route('berita.create')); ?>" class="btn btn-primary mb-3">Tambah Berita</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Judul</th>
            <th>Status</th>
            <th>Kategori</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $beritas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $berita): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($berita->judul); ?></td>
            <td><?php echo e($berita->status); ?></td>
            <td><?php echo e($berita->kategori->nama); ?></td>
            <td>
                <a href="<?php echo e(route('berita.edit', $berita->id)); ?>" class="btn btn-warning btn-sm">Edit</a>
                <form action="<?php echo e(route('berita.destroy', $berita->id)); ?>" method="POST" class="d-inline">
                    <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                    <button class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\thinkpad\starterkit-laravel\resources\views/berita/index.blade.php ENDPATH**/ ?>