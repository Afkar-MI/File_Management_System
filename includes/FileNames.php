<!-- Modal -->
<div class="modal fade" id="file_names" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New File Name</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="filename_form" onsubmit="return false">
                    <div class="form-group">
                        <label><b>File Name</b></label>
                        <input type="text" class="form-control" name="file_name" id="file_name" placeholder="Enter File Name">
                        <small id="file_error" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                        <label><b>File Number</b></label>
                        <input type="text" class="form-control" name="file_number" id="file_number" placeholder="Enter File Number">
                        <small id="filenumber_error" class="form-text text-muted"></small
                    </div>
                    <button type="submit" class="btn btn-primary">Add File Name</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
