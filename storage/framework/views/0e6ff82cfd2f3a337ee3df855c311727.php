

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1><i class="fas fa-shopping-cart"></i> Daftar Pembelian</h1>
            <a href="<?php echo e(route('purchases.create')); ?>" class="btn btn-primary">
                <i class="fas fa-plus"></i> Tambah Pembelian
            </a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <i class="fas fa-list"></i> Daftar Pembelian
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Barang</th>
                                <th>Jumlah</th>
                                <th>Harga Beli</th>
                                <th>Total Biaya</th>
                                <th>Tanggal Pembelian</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $purchases; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $purchase): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td><?php echo e($purchase->item->name); ?></td>
                                    <td><?php echo e($purchase->quantity); ?></td>
                                    <td>Rp <?php echo e(number_format($purchase->buy_price, 0, ',', '.')); ?></td>
                                    <td>Rp <?php echo e(number_format($purchase->total_cost, 0, ',', '.')); ?></td>
                                    <td><?php echo e($purchase->purchase_date); ?></td>
                                    <td>
                                        <a href="<?php echo e(route('purchases.show', $purchase)); ?>" class="btn btn-sm btn-secondary">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="<?php echo e(route('purchases.edit', $purchase)); ?>" class="btn btn-sm btn-secondary">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="<?php echo e(route('purchases.destroy', $purchase)); ?>" method="POST" class="d-inline">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin?')">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td colspan="6" class="text-center">Tidak ada pembelian ditemukan.</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\bengkel\resources\views/purchases/index.blade.php ENDPATH**/ ?>