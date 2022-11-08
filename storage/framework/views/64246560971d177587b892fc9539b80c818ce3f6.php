<div class="modal fade" id="edit<?php echo e($id); ?>">
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
            <form method="POST" action="<?php echo e(route('admin.pets.update', ['pet' => $id])); ?>">
                <?php echo csrf_field(); ?>
                <?php echo method_field('patch'); ?>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">


                            <div class="form-group">
                                <label for="category_id">Category</label>
                                <select class="form-control" name="category_id" id="category_id">
                                    <option value="<?php echo e($pet->category_id); ?>"><?php echo e($pet->category->name); ?></option>
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($category->id); ?>">
                                            <?php echo e($category->name); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </select>
                            </div>

                            <div class="form-group">
                                <label for="my-input">Name</label>
                                <input id="my-input" class="form-control" type="text" name="name"
                                    value="<?php echo e($pet->name); ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="my-input">Age</label>
                                <input id="my-input" class="form-control" type="number" name="age"
                                    value="<?php echo e($pet->age); ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="gender">Gender</label>
                                <select class="form-control" name="gender" id="gender">
                                    <option value="<?php echo e($pet->gender); ?>"><?php echo e($pet->gender); ?></option>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="my-input">Breed</label>
                                        <input id="my-input" class="form-control" type="bleed" name="bleed"
                                            required value="<?php echo e($pet->bleed); ?>">
                                    </div>
                                </div>

                            </div>

                            <div class="form-group">
                                <label for="gender">Status</label>
                                <select class="form-control" name="status" id="gender" required>
                                    <option value="<?php echo e($pet->status); ?>">select</option>
                                    <option value="1">Inpatient</option>
                                    <option value="2">Outpatient</option>
                                </select>
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
<?php /**PATH C:\Users\mphat\Desktop\LARAVEL PROJECTS\pet_care\resources\views/admin/pets/edit.blade.php ENDPATH**/ ?>