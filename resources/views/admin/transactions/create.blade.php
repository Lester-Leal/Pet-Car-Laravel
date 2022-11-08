<div class="modal fade" id="add">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">
                    Create
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="{{ route('admin.transactions.store') }}" id="transactionForm">
                @csrf
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">

                            <div class="form-group">
                                <label for="user_id">Customer</label>
                                <select class="form-control" name="user_id" id="user_id">
                                    <option value="">Select</option>
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}">
                                            {{ $user->name }}
                                        </option>
                                    @endforeach

                                </select>
                            </div>

                            <div class="form-group">
                                <label for="invoice_id">Invoice</label>
                                <select class="form-control" name="invoice_id" id="invoice_id">

                                </select>
                            </div>
 
                            <div class="form-group">
                                <label for="amount">Total cost</label>
                                <input type="text" id="total_cost" class="form-control" placeholder=""
                                    aria-describedby="helpId" value="0" readonly>
                                <small id="helpId" class="text-muted">Total cost to be paid by customer</small>
                            </div>

                            <div class="form-group">
                                <label for="my-input">Amount Paid</label>
                                <input class="form-control" type="number" id="amount_paid" name="amount"
                                    value="0" required>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id="transactionButton">
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
