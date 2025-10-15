

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12">
        <h1><i class="fas fa-eye"></i> Detail Jasa</h1>
    </div>
</div>

<div class="row">
    <div class="col-md-8 offset-md-2">
        <div class="card">
            <div class="card-header">
                <i class="fas fa-wrench"></i> Jasa #<?php echo e($service->id); ?>

            </div>
            <div class="card-body">
                <p><strong>Nama Jasa:</strong> <?php echo e($service->name); ?></p>
                <p><strong>Deskripsi:</strong> <?php echo e($service->description ?? '-'); ?></p>
                <p><strong>Harga:</strong> Rp <?php echo e(number_format($service->price, 0, ',', '.')); ?></p>
                <a href="<?php echo e(route('services.edit', $service)); ?>" class="btn btn-primary">
                    <i class="fas fa-edit"></i> Edit
                </a>
                <a href="<?php echo e(route('services.index')); ?>" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i> Kembali
                </a>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\bengkel\resources\views/services/show.blade.php ENDPATH**/ ?>