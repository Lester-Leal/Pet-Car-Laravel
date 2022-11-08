
<div class="modal fade" id="participants" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
                <div class="modal-header">
                        <h5 class="modal-title">ADD</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>

            <form method="POST" action="<?php echo e(route('project.clm.activity.participant')); ?>">
                <?php echo csrf_field(); ?>
            <div class="modal-body">
                <div class="container-fluid">
                     <input type="hidden" name="eventplan_id" value="<?php echo e($event->id); ?>">

                     <div class="">
                        <div class="btn-group" >
                            <button class="btn btn-default btn-sm" type="button" data-duplicate-add="resource">
                                <i class="fa fa-plus-circle"></i>
                            </button>
                            <button class="btn btn-default btn-sm" type="button" data-duplicate-remove="resource">
                               <i class="fa fa-times-circle"></i>
                           </button>
                        </div>
                        <hr style="margin-top: 1px">
                        <div class="row" data-duplicate="resource">
                            <div class="col-md-3" id="participant_name">
                                <div class="form-group">
                                  <label for="item">Name</label>
                                  <input type="text"
                                    class="form-control" name="name[]" id="item" aria-describedby="helpId" placeholder="">

                                </div>
                            </div>
                            <div class="col-md-3" id="participant_dob">
                                <div class="form-group">
                                  <label for="quantity">Date of birth</label>
                                  <input type="date"
                                    class="form-control" name="dob[]" id="quantity" aria-describedby="helpId" placeholder="">

                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="gender">Gender</label>
                                    <select class="form-control" name="gender[]" id="gender">
                                      <option>Select one</option>
                                      <option>Male</option>
                                      <option>Female</option>
                                    </select>
                                  </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="location">District</label>
                                    <select class="form-control" name="location[]">
                                      <option value="">Select one</option>
                                      <?php $__currentLoopData = $districts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $district): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <option value="<?php echo e($district->id); ?>">
                                              <?php echo e($district->name); ?>

                                          </option>
                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                  </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="number">Contact</label>
                                    <input type="text" name="number[]" id="number" class="form-control" placeholder="" aria-describedby="helpId">

                                  </div>
                            </div>



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
<?php /**PATH C:\Users\Developer\Desktop\laravel Projects\manaso\resources\views/projects/clm/activity/participants.blade.php ENDPATH**/ ?>