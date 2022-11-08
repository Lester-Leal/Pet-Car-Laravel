
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
                <div class="modal-header">
                        <h5 class="modal-title">ADD</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>

            <form method="POST" action="<?php echo e(route('event.plan')); ?>">
                <?php echo csrf_field(); ?>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="form-group">
                      <label for="">Project</label>
                      <select class="form-control" name="project_id" id="project" required>
                        <option value="">Select one</option>
                        <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option><?php echo e($project->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="district_id">District</label>
                      <select class="form-control" name="district_id" id="district_id" required>
                        <option value="">Select one</option>
                        <?php $__currentLoopData = $districts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $district): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($district->id); ?>">
                                <?php echo e($district->name); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>
                    </div>

                    <div class="form-group" id="facility_section">
                      <label for="facility_id">Facility</label>
                      <select class="form-control" name="facility_id" id="facility_id">
                        <option value="">Select one</option>
                        <?php $__currentLoopData = $facilities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $facility): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($facility->id); ?>">
                                <?php echo e($facility->name); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>
                    </div>

                    <div class="" id="cso_section" style="display: none">
                        <div class="form-group">
                          <label for="cso_name">Name of CSO</label>
                          <input type="text" name="cso_name" id="cso_name" class="form-control" placeholder="" aria-describedby="helpId">

                        </div>

                        <div class="form-group">
                          <label for="community_art">Community art</label>
                          <input type="text" name="community_art" id="community_art" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="facilitator">Facilitator</label>
                                <input type="text" name="facilitator" id="facilitator" class="form-control" placeholder="" aria-describedby="helpId" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="facilitator_designation">Facilitator Designation</label>
                                <input type="text" name="facilitator_designation" id="facilitator_designation" class="form-control" placeholder="" aria-describedby="helpId" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group" id="facilitator_number_section" style="display: none">
                      <label for="facilitator_number">Facilitator Number</label>
                      <input type="text" name="facilitator_number" id="facilitator_number" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>

                    <div class="form-group" id="event_section" style="display: none">
                      <label for="event">Event</label>
                      <input type="text" name="event" id="event" class="form-control" placeholder="" aria-describedby="helpId">

                    </div>

                    <div class="form-group">
                      <label for="event_date">Date of event</label>
                      <input type="date" name="event_date" id="event_date" class="form-control" placeholder="" aria-describedby="helpId" required>
                    </div>

                    <div class="form-group">
                      <label for="topic">Topic of discussion</label>
                      <textarea class="form-control" name="topic" id="topic" rows="3" required></textarea>
                    </div>

                    <div class="row" id="focal_person_section">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="focal_person">Name of Data Focal Person(DFP)</label>
                                <input type="text" name="focal_person" id="focal_person" class="form-control" placeholder="" aria-describedby="helpId" required>
                              </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                              <label for="phone">Contact Number of (DFP)</label>
                              <input type="text" name="phone" id="phone" class="form-control" placeholder="" aria-describedby="helpId" required>

                            </div>
                        </div>
                    </div>

                    <div class="row" style="display: none" id="supervisor_section">
                        <div class="col-md-6">
                            <div class="form-group">
                              <label for="suppervisor">Supervisor</label>
                              <input type="text" name="supervisor" id="suppervisor" class="form-control" placeholder="" aria-describedby="helpId">

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                              <label for="supervisor_number">Supervisor number</label>
                              <input type="text" name="supervisor_number" id="supervisor_number" class="form-control" placeholder="" aria-describedby="helpId">

                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                      <label for="participants">Do you want to add Participants attending the activity?</label>
                      <select class="form-control" name="participants" id="participants" required>
                        <option value="">Select one</option>
                        <option>Yes</option>
                        <option>No</option>
                      </select>
                    </div>

                     <div class="" style="display: none" id="participant_section">
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

                            <div class="col-md-2" id="target_population_section" style="display: none">
                                <div class="form-group" >
                                    <label for="target_population">Target</label>
                                    <select class="form-control" name="target[]" id="target_population">

                                      <option>Mine Worker</option>
                                      <option>Ex-Mine Worker</option>
                                      <option>Family Member of Mine Worker</option>
                                      <option>Family Member of Ex Mine Worker</option>

                                    </select>
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
<?php /**PATH C:\Users\Developer\Desktop\laravel Projects\manaso\resources\views/events/plan/create.blade.php ENDPATH**/ ?>