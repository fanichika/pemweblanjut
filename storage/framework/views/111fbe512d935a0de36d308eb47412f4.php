<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon">
            <i class="fas fa-newspaper"></i>
        </div>
        <div class="sidebar-brand-text mx-3">BeritaApp</div>
    </a>

    <hr class="sidebar-divider">

    <li class="nav-item">
        <a class="nav-link" href="<?php echo e(route('berita.index')); ?>">
            <i class="fas fa-fw fa-list"></i>
            <span>Kelola Berita</span>
        </a>
    </li>

    <?php if(auth()->user()->role === 'editor'): ?>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo e(route('approval.index')); ?>">
            <i class="fas fa-fw fa-check"></i>
            <span>Approval</span>
        </a>
    </li>
    <?php endif; ?>

    <li class="nav-item">
        <a class="nav-link" href="<?php echo e(route('profile.edit')); ?>">
            <i class="fas fa-fw fa-user"></i>
            <span>Profil</span>
        </a>
    </li>
</ul>
<?php /**PATH C:\Users\thinkpad\starterkit-laravel\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>