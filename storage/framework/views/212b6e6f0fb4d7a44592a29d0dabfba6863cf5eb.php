
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
                <div class="modal-header">
                        <h5 class="modal-title">ADD</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
            
            <form method="POST" action="<?php echo e(route('facilities')); ?>">
                <?php echo csrf_field(); ?>
            <div class="modal-body">
                <div class="container-fluid">
                   
                    <div class="form-group">
                      <label for="type_id">Type</label>
                      <select class="form-control" name="type_id" id="type_id">
                        <option>Select one</option>

                            <?php $__currentLoopData = $facilitytypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $facilitytype): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($facilitytype->id); ?>"><?php echo e($facilitytype->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>
                    </div>

                   <div class="form-group">
                     <label for="name">name</label>
                     <input type="text" name="name" id="name" class="form-control" placeholder="" aria-describedby="helpId" required>
                     
                   </div>

                   <div class="form-group">
                    <label for="name">ART clinic number</label>
                    <input type="text" name="art_clinic_number" id="name" class="form-control" placeholder="" aria-describedby="helpId" required>
                    
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
<?php /**PATH /home/codelab8/manaso.codelab265.net/resources/views/facilities/create.blade.php ENDPATH**/ ?>