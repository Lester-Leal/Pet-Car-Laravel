<div class="modal fade" id="add">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">
                    Create
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="<?php echo e(route('admin.diagnosis.store')); ?>">
                <?php echo csrf_field(); ?>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">

                            <div class="form-group">
                                <label for="user_id">Doctor</label>
                                <select class="form-control" name="doctor_id">
                                    <option value="">Select</option>
                                    <?php $__currentLoopData = $users->whereIn('role', [1, 2]); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($user->id); ?>">
                                            <?php echo e($user->name); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </select>
                            </div>

                            <div class="form-group">
                                <label for="user_id">Customer</label>
                                <select class="form-control" name="user_id" id="customer_id">
                                    <option value="">Select</option>
                                    <?php $__currentLoopData = $users->where('role', 4); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($user->id); ?>">
                                            <?php echo e($user->name); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </select>
                            </div>

                            <div class="form-group">
                                <label for="user_id">Pet</label>
                                <select class="form-control" name="pet_id" id="pet_id">

                                </select>
                            </div>

                            <div class="form-group">
                                <label for="category_id">Service</label>
                                <select class="form-control" name="service_id" id="service_id">
                                    <option value="">Select</option>
                                    <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($service->id); ?>">
                                            <?php echo e($service->name); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </select>
                            </div>

                            <div class="form-group">
                                <label for="my-input">Result</label>
                                <input id="my-input" class="form-control" type="text" name="result" value=""
                                    required>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-check-circle"></i>
                        Save
                    </button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<?php /**PATH C:\Users\mphat\Desktop\LARAVEL PROJECTS\pet_care\resources\views/admin/diagnosis/create.blade.php ENDPATH**/ ?>