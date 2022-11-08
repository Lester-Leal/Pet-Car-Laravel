<div class="modal fade" id="add">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">
            ADD USER
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
            <div class="form-group">
              <label for="my-input">Name</label>
              <input id="my-input" class="form-control" type="text" name="name">
            </div>
              
            <div class="row">

              <div class="col-md-6">
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" name="email" class="form-control" required>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label>Phone</label>
                  <input type="number" name="phone" class="form-control" required>
                </div>
              </div>

            </div>
            
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" name="password" class="form-control" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="">Role</label>
                  <select class="form-control" name="role_id" id="" required>
                    <option value="">......</option>
                    <option value="1">admin</option>
                    <option value="2">staff</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label>Projects</label>
              <div class="row">
                <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                  <div class="col-md-6">
                    <div class="form-check form-check-inline">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="project_id[]" id="" value="<?php echo e($project->id); ?>"> 
                          <?php echo e($project->name); ?>

                      </label>
                    </div>
                  </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>
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
</div><?php /**PATH C:\Users\Developer\Desktop\laravel Projects\manaso\resources\views/userEditModal.blade.php ENDPATH**/ ?>