<div class="modal fade" id="add">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">
                    Create
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="<?php echo e(route('customer.appointments.store')); ?>">
                <?php echo csrf_field(); ?>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="my-input">Title</label>
                                <input id="my-input" class="form-control" type="text" name="title" required>
                            </div>

                            <div class="form-group">
                                <label for="start">Start date & time</label>
                                <input type="datetime-local" name="start" id="start" class="form-control"
                                    placeholder="" aria-describedby="helpId" required>

                            </div>

                            <div class="form-group">
                                <label for="start">End date & time</label>
                                <input type="datetime-local" name="end" id="end" class="form-control"
                                    placeholder="" aria-describedby="helpId" required>

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
<?php /**PATH C:\Users\mphat\Desktop\LARAVEL PROJECTS\pet_care\resources\views/customers/appointments/create.blade.php ENDPATH**/ ?>