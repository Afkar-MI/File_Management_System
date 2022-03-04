<div class="modal fade" id="batches" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Batch</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="batch_form" onsubmit="return false">
                    <div class="form-group">
                        <label><b>Batch Name</b></label>
                        <input type="text" class="form-control" name="batch_name" id="batch_name" placeholder="Enter Batch Name">
                        <small id="batch_error" class="form-text text-muted"></small>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Batch</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
