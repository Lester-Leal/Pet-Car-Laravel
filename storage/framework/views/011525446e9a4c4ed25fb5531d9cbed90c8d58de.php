
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
                <div class="modal-header">
                        <h5 class="modal-title">ADD</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
            
            <form method="POST" action="<?php echo e(route('subComponents')); ?>">
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

                   <div class="form-group">
                       <label for="component">Component</label>
                       <select id="component" class="form-control" name="component_id" id="component" required>
                           <option>Select one</option>
                       </select>
                   </div>

                   <div class="form-group">
                     <label for="name">Sub-component</label>
                     <input type="text" name="name" id="name" class="form-control" placeholder="" aria-describedby="helpId" required>
                     
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
<?php /**PATH /home/codelab8/manaso.codelab265.net/resources/views/subComponentModal.blade.php ENDPATH**/ ?>