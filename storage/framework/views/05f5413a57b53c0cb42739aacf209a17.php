

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12">
        <h1><i class="fas fa-eye"></i> Detail Penjualan</h1>
    </div>
</div>

<div class="row">
    <div class="col-md-8 offset-md-2">
        <div class="card">
            <div class="card-header">
                <i class="fas fa-cash-register"></i> Penjualan #<?php echo e($sale->id); ?>

            </div>
            <div class="card-body">
                <p><strong>Barang:</strong> <?php echo e($sale->item->name); ?></p>
                <p><strong>Jumlah:</strong> <?php echo e($sale->quantity); ?></p>
                <p><strong>Harga Jual per Unit:</strong> Rp <?php echo e(number_format($sale->sell_price, 0, ',', '.')); ?></p>
                <p><strong>Total Pendapatan:</strong> Rp <?php echo e(number_format($sale->total_revenue, 0, ',', '.')); ?></p>
                <p><strong>Tanggal Penjualan:</strong> <?php echo e($sale->sale_date); ?></p>
                <a href="<?php echo e(route('sales.edit', $sale)); ?>" class="btn btn-primary">
                    <i class="fas fa-edit"></i> Edit
                </a>
                <a href="<?php echo e(route('sales.index')); ?>" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i> Kembali
                </a>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\bengkel\resources\views/sales/show.blade.php ENDPATH**/ ?>