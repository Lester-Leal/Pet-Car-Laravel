<div class="modal fade" id="budget<?php echo e($id); ?>">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">
            ACTIVITIES
        </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" action="<?php echo e(route('users')); ?>">
        <?php echo csrf_field(); ?>
      <div class="modal-body">
        <div class="card">
          <div class="card-body">

            <div class="row">
              <div class="col-md-12 bg-success p-2">
                <strong>
                  Activity
                </strong>
              </div>


            </div>
            <hr style="margin: 0px">

            <?php $__currentLoopData = $implementation->activities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $activity): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <div class="row">
              <div class="col-md-12 bg-warning">
                <?php echo e($activity->projectactivities->activity); ?>

              </div>
            </div>
            <hr style="margin: 0px">
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

          </div>
        </div>
      </div>

      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<?php /**PATH C:\Users\Developer\Desktop\laravel Projects\manaso\resources\views/implementation/budget.blade.php ENDPATH**/ ?>