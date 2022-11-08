<div class="modal fade" id="add">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">
              ADD
          </h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="POST" action="<?php echo e(route('implementation_plan')); ?>">
          <?php echo csrf_field(); ?>

          <div class="modal-body">
            <div class="container-fluid">
                <div class="form-group">
                  <label for="">Responsible Person</label>
                  <input type="text" name="person" id="" class="form-control" placeholder="" aria-describedby="helpId" required>
                </div>
                <div class="form-group">
                    <label for="project_id">Project</label>
                    <select class="form-control" name="project_id" id="project_id" required>
                      <option>Select one</option>

                           <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                               <option value="<?php echo e($project->id); ?>">
                                   <?php echo e($project->name); ?>

                               </option>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </select>
                  </div>
                  <div class="form-group">
                   <label for="">
                       Objective
                   </label>
                   <select class="form-control mt-2" name="objective_id" id="objective_id" required>
                       <option value="">Select one</option>
                   </select>
                 </div>

                <div class="form-group" style="display: none" id="level_panel">
                  <label for="level">Program Level</label>
                  <select class="form-control" name="stage" id="level" required>
                    <option value="">Select one</option>
                    <option>Outcome</option>
                    <option>Intermediate outcome</option>
                    <option>Output</option>
                  </select>
                </div>

                 <div class="form-group" id="outcome_panel" style="display: none">
                    <label for="">
                        Outcome
                    </label>
                    <select class="form-control mt-2" name="outcome_id" id="outcome_id" required>
                        <option value="">Select one</option>
                    </select>
                  </div>

                  <div class="form-group" id="intermediateoutcome_panel" style="display: none">
                    <label for="">
                        Intermediate Outcome
                    </label>
                    <select class="form-control mt-2" name="intermediateoutcome_id" id="intermediateoutcome_id">
                        <option value="">Select one</option>
                    </select>
                  </div>

                  <div class="form-group" id="output_panel" style="display: none">
                    <label for="">
                        Output
                    </label>
                    <select class="form-control mt-2" name="output_id" id="output_id">
                        <option value="">Select one</option>
                    </select>
                  </div>

                  <div id="indicator_activity_panel" style="display: none">


                    <div class="form-group">
                        <label for="indicator">Indicator</label>
                        <select class="form-control" name="indicator_id" id="indicator_id" required>
                        <option value="">Select one</option>

                        </select>
                    </div>

                    <div class="form-group">
                        <label for="indicator">
                             Activity
                        </label>
                        <select class="form-control" name="activity_id" id="activity_id" required>
                        <option value="">Select one</option>

                        </select>
                    </div>
                  </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="start_date">Start Date</label>
                          <input type="date" name="start_date" id="start_date" class="form-control" placeholder="" aria-describedby="helpId" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="end_start">End Date</label>
                          <input type="date" name="end_date" id="end_start" class="form-control" placeholder="" aria-describedby="helpId" required>

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
  </div>
<?php /**PATH C:\Users\Developer\Desktop\laravel Projects\manaso\resources\views/implementation/create.blade.php ENDPATH**/ ?>