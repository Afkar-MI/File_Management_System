<!-- Modal -->
<div class="modal fade" id="subject" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Subject</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="subject_form" onsubmit="return false">
                    <div class="form-group">
                        <label><b>Subject Code</b></label>
                        <input type="text" class="form-control" name="subject_code" id="subject_code" aria-describedby="emailHelp" placeholder="Enter Subject Code">
                        <small id="sbjCode_error" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                        <label><b>Subject Name</b></label>
                        <input type="text" class="form-control" name="subject_name" id="subject_name" aria-describedby="emailHelp" placeholder="Enter Subject Name">
                        <small id="sbjName_error" class="form-text text-muted"></small>
                    </div>
                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>