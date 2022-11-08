
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
                <div class="modal-header">
                        <h5 class="modal-title">ADD</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
            
            <form method="POST" action="<?php echo e(route('outcomes')); ?>">
                <?php echo csrf_field(); ?>
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

                <div class="row p-2 mt-3" style="background-color: rgb(243, 243, 243)" data-duplicate="sub-components">
                       <div class="col-md-4">
                           <div class="form-group">
                             <label for="">
                                 Sub component
                             </label>
                             <select class="form-control mt-2" name="subcomponent" id="">
                                 <?php $__currentLoopData = $subcomponents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcomponent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($subcomponent->id); ?>">
                                        <?php echo e($subcomponent->name); ?>

                                    </option>
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                               
                             </select>
                           </div>
                       </div>

                       <div class="col-md-8">
                        <div class="form-group">
                            <label for="name">Outcome</label>
                            <div class="btn-group float-right">
                                <button class="btn btn-default btn-sm" type="button" data-duplicate-add="outcome">
                                    <i class="fa fa-plus-circle"></i>
                                </button>
                                <button class="btn btn-default btn-sm" type="button" data-duplicate-remove="outcome">
                                 <i class="fa fa-times-circle"></i>
                             </button>
            
                            </div>
                            <input type="text" name="name[]" id="outcome" class="form-control mt-2" placeholder="" aria-describedby="helpId" data-duplicate="outcome" required>
                            
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
<?php /**PATH C:\Users\Developer\Desktop\laravel Projects\manaso\resources\views/outcomeModal.blade.php ENDPATH**/ ?>