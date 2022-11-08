<option value="">Select</option>
<?php $__currentLoopData = $invoices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $invoice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <option value="<?php echo e($invoice->id); ?>">
        <?php echo e($invoice->invoice_number); ?>

    </option>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH C:\xampp\htdocs\pet_care\resources\views/admin/transactions/invoice.blade.php ENDPATH**/ ?>