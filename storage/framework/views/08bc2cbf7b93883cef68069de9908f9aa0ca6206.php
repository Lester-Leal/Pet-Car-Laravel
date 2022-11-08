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
            <form method="POST" action="<?php echo e(route('admin.pets.store')); ?>">
                <?php echo csrf_field(); ?>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">

                        <div class="form-group">
                                <label for="my-input">Pets name</label>
                                <input id="my-input" class="form-control" type="text" name="name" value=""
                                    required>

                          

                            <div class="form-group">
                                <label for="category_id">Category</label>
                                <select class="form-control" name="category_id" id="category_id">
                                    <option value="">Select</option>
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($category->id); ?>">
                                            <?php echo e($category->name); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </select>
                            </div>

                            <!-- <div class="form-group">
                                <label for="my-input">Pets name</label>
                                <input id="my-input" class="form-control" type="text" name="name" value=""
                                    required> -->
                            </div>

                            <div class="form-group">
                                <label for="my-input">Age</label>
                                <input id="my-input" class="form-control" type="text" name="age" required>
                            </div>

                            <div class="form-group">
                                <label for="gender">Gender</label>
                                <select class="form-control" name="gender" id="gender">
                                    <option value="">select</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="my-input">Height</label>
                                <input id="my-input" class="form-control" type="text" name="name" value=""
                                    required>
                            </div>

                            <div class="form-group">
                                <label for="my-input">Weight</label>
                                <input id="my-input" class="form-control" type="text" name="name" value=""
                                    required>
                            </div>


                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="my-input">Breed</label>
                                        <input id="my-input" class="form-control" type="bleed" name="bleed"
                                            required>
                                    </div>
                                </div>

                            
                            <div class="form-group">
                                <label for="gender">Status</label>
                                <select class="form-control" name="status" id="gender" required>
                                    <option value="">select</option>
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
<?php /**PATH C:\xampp\htdocs\pet_care\resources\views/admin/pets/create.blade.php ENDPATH**/ ?>