
<div class="modal fade" id="edit<?php echo e($id); ?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
                <div class="modal-header">
                        <h5 class="modal-title">EDIT</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
            
            <form method="POST" action="<?php echo e(route('subComponents')); ?>">
                <?php echo csrf_field(); ?>
                <?php echo method_field('patch'); ?>
            <div class="modal-body">
                <div class="container-fluid">
                   <input type="hidden" name="id" value="<?php echo e($id); ?>">
                   <div class="form-group">
                     <label for="name">Sub-component</label>
                     <input type="text" name="name" value="<?php echo e($subcomponent->name); ?>" class="form-control" placeholder="" aria-describedby="helpId" required>
                     
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
<?php /**PATH /home/codelab8/manaso.codelab265.net/resources/views/subComponentEditModal.blade.php ENDPATH**/ ?>