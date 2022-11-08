<div class="modal fade" id="edit<?php echo e($id); ?>">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">
              EDIT
          </h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="POST" action="<?php echo e(route('indicators.intermediate.outcomes')); ?>">
          <?php echo csrf_field(); ?>
          <?php echo method_field('patch'); ?>

          <div class="modal-body">
              <div class="card">
                <div class="card-body">

                    <div class="form-group">
                      <label for="">
                          Indicator
                      </label>
                        <input type="hidden" name="id" value="<?php echo e($id); ?>">
                        <input type="text" name="indicator" value="<?php echo e($outcome->indicator); ?>" class="form-control" placeholder="" aria-describedby="helpId" required>

                    </div>
                    <div class="form-group">
                        <label for="">
                            Baseline
                        </label>

                          <input type="text" name="baseline" value="<?php echo e($outcome->baseline); ?>" class="form-control" placeholder="" aria-describedby="helpId" required>

                      </div>

                      <input type="hidden" name="period_type" value="<?php echo e($outcome->period); ?>">

                      <?php if($outcome->period=="Annually"): ?>
                        <div class="row">
                            <div class="col-md-12">
                                <?php $__currentLoopData = $outcome->detail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <input type="hidden" name="indicator_id" value="<?php echo e($detail->indicator_id); ?>">

                                <div class="form-group">
                                  <label for="target">Target</label>
                                  <input type="text" name="target" id="target" class="form-control" placeholder="" aria-describedby="helpId" value="<?php echo e($detail->target); ?>" required>

                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                      <?php else: ?>
                      <?php $__currentLoopData = $outcome->detail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <div class="row">
                          <div class="col-md-6">
                            <input type="hidden" name="indicator_id[]" value="<?php echo e($detail->id); ?>">

                            <div class="form-group">
                              <label for="period">Period</label>
                              <input type="text" name="period[]" id="period" class="form-control" placeholder="" aria-describedby="helpId" value="<?php echo e($detail->periods->name); ?>" readonly>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group">
                                <label for="target">Target</label>
                                <input type="text" name="target[]" id="target" class="form-control" placeholder="" aria-describedby="helpId" value="<?php echo e($detail->target); ?>" required>

                              </div>
                          </div>
                      </div>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      <?php endif; ?>


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
<?php /**PATH C:\Users\Developer\Desktop\laravel Projects\manaso\resources\views/indicators/intermediate/update.blade.php ENDPATH**/ ?>