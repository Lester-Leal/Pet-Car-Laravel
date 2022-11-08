
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
                <div class="modal-header">
                        <h5 class="modal-title">ADD</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>

        <form method="POST" action="<?php echo e(route('indicators.outcomes')); ?>">
            <?php echo csrf_field(); ?>
                <input type="hidden" name="indicator_type" value="output">
            <div class="modal-body">
                <div class="container-fluid">
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

                  <div class="form-group">
                    <label for="">
                        Outcome
                    </label>
                    <select class="form-control mt-2" name="outcome_id" id="outcome_id" required>
                        <option value="">Select one</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="">
                        Intermediate outcome
                    </label>
                    <select class="form-control mt-2" name="intermediateoutcome_id" id="intermediateoutcome_id">
                        <option value="">Select one</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="">
                        Output
                    </label>
                    <select class="form-control mt-2" name="output_id" id="output_id" required>
                        <option value="">Select one</option>
                    </select>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="indicator">Indicator</label>
                        <input type="text" name="indicator" id="indicator" class="form-control" placeholder="" aria-describedby="helpId" required>

                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="target">Baseline</label>
                        <input type="text" name="baseline" id="target" class="form-control" placeholder="" aria-describedby="helpId">
                      </div>
                    </div>
                  </div>

                  


                  <div class="form-group">
                    <label for="period">Frequency</label>
                    <select class="form-control" name="period" id="period" required>
                      <option value="">Select one</option>
                      <option>Annually</option>
                      <option>Quarterly</option>
                    </select>
                  </div>

                  <div class="" id="quarter_section" style="display: none">
                    <div class="btn-group" role="group" aria-label="Button group">
                        <button class="btn btn-default btn-sm" type="button" data-duplicate-add="targets">
                            <i class="fa fa-plus-circle"></i>
                        </button>
                        <button class="btn btn-default btn-sm" type="button" data-duplicate-remove="targets">
                          <i class="fa fa-times-circle"></i>
                      </button>
                    </div>
                      <div class="row" data-duplicate="targets">
                        <div class="col-md-6">
                            <div class="form-group">
                              <label for="period">Quarter</label>
                              <select class="form-control" name="quarter[]">
                                <option>Select one</option>
                                <?php $__currentLoopData = $quarters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $quarter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($quarter->id); ?>">
                                        <?php echo e($quarter->name); ?>

                                    </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                              <label for="target">Target</label>
                              <input type="text" name="target[]" id="target" class="form-control" placeholder="" aria-describedby="helpId">
                            </div>
                        </div>
                      </div>
                  </div>

                  <div class="row" id="annual_section" style="display: none">
                      <div class="col-md-6">
                          <div class="form-group">
                            <label for="">Period</label>
                            <select class="form-control" name="annual_period" id="">
                              <option>Annual</option>
                            </select>
                          </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                            <label for="target">Target</label>
                            <input type="text" name="annual_target"  class="form-control" placeholder="" aria-describedby="helpId">
                          </div>
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
<?php /**PATH C:\Users\Developer\Desktop\laravel Projects\manaso\resources\views/indicators/output/create.blade.php ENDPATH**/ ?>