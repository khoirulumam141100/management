

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12">
        <h1><i class="fas fa-eye"></i> Detail Barang</h1>
    </div>
</div>

<div class="row">
    <div class="col-md-8 offset-md-2">
        <div class="card">
            <div class="card-header">
                <i class="fas fa-box"></i> Barang #<?php echo e($item->id); ?>

            </div>
            <div class="card-body">
                <p><strong>Nama:</strong> <?php echo e($item->name); ?></p>
                <p><strong>Deskripsi:</strong> <?php echo e($item->description ?? '-'); ?></p>
                <p><strong>Harga Beli:</strong> Rp <?php echo e(number_format($item->buy_price, 0, ',', '.')); ?></p>
                <p><strong>Harga Jual:</strong> Rp <?php echo e(number_format($item->sell_price, 0, ',', '.')); ?></p>
                <p><strong>Stok:</strong> <?php echo e($item->stock); ?></p>
                <a href="<?php echo e(route('items.edit', $item)); ?>" class="btn btn-primary">
                    <i class="fas fa-edit"></i> Edit
                </a>
                <a href="<?php echo e(route('items.index')); ?>" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i> Kembali
                </a>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\bengkel\resources\views/items/show.blade.php ENDPATH**/ ?>