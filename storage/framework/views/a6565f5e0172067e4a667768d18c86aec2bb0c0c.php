
<div class="modal fade" id="edit<?php echo e($id); ?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
                <div class="modal-header">
                        <h5 class="modal-title">ADD</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>

            <form method="POST" action="<?php echo e(route('membership.edit')); ?>">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="id" value="<?php echo e($id); ?>">
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" class="form-control" value="<?php echo e($membership->name); ?>" aria-describedby="helpId" required>
                              </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="contact">Contact Detail</label>
                                <input type="text" name="contact" id="contact" class="form-control" value="<?php echo e($membership->contact); ?>" aria-describedby="helpId">
                              </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Number of male members</label>
                                <input type="number" name="male" id="" class="form-control" min="0" value="<?php echo e($membership->male); ?>" aria-describedby="helpId" required>

                              </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Number of female members</label>
                                <input type="number" name="female" id="" class="form-control" min="0" value="<?php echo e($membership->female); ?>" aria-describedby="helpId" required>
                              </div>
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="specialization">Area of specialization</label>
                      <input type="text" name="specialization" id="specialization" class="form-control" value="<?php echo e($membership->specialization); ?>" aria-describedby="helpId" required>
                    </div>
                    <div class="form-group">
                        <label for="district">District</label>
                        <select class="form-control" name="district" id="district" required>
                          <option value="<?php echo e($membership->district); ?>">Select District</option>
                          <?php $__currentLoopData = $districts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $district): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <option><?php echo e($district->name); ?></option>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                      </div>

                    <div class="form-group">
                      <label for="status">Membership Status</label>
                      <select class="form-control" name="status" id="status" required>
                        <option><?php echo e($membership->status); ?></option>
                        <option>PAID</option>
                        <option>NOT PAID</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="certificate">Certificate issued</label>
                      <select class="form-control" name="certificate" id="certificate" required>
                        <option><?php echo e($membership->certificate); ?></option>
                        <option>YES</option>
                        <option>NO</option>
                      </select>
                    </div>


                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>

            </form>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\Developer\Desktop\laravel Projects\manaso\resources\views/membership/edit.blade.php ENDPATH**/ ?>