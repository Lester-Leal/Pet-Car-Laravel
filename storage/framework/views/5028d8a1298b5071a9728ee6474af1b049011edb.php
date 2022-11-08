
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
                <div class="modal-header">
                        <h5 class="modal-title">ADD</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>

            <form method="POST" action="<?php echo e(route('event.type')); ?>">
                <?php echo csrf_field(); ?>
            <div class="modal-body">
                <div class="container-fluid">
                   <div class="form-group">
                     <label for="name">Name</label>
                     <input type="text"
                       class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="" required>
                   </div>

                    <div class="form-group">
                      <label for="project_id">Project</label>
                      <select class="form-control" name="project_id" id="project" required>
                          <option value="">Select one</option>
                          <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <option value="<?php echo e($project->id); ?>">
                                  <?php echo e($project->name); ?>

                              </option>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                      </select>
                    </div>

                    <div class="form-group">
                      <label for="purpose_id">Objective</label>
                      <select class="form-control" name="objective_id" id="objective_id" required>
                        <option>Select one</option>


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
<?php /**PATH C:\Users\Developer\Desktop\laravel Projects\manaso\resources\views/eventtypes/create.blade.php ENDPATH**/ ?>