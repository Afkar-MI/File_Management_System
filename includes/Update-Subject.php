<!-- Modal -->
<div class="modal fade" id="update_subject" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Subject</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="update_subject_form" onsubmit="return false">
                    <div class="form-group">
                        <input type="hidden" name="sid" id="sid" value=""/>
                        <label>Subject Code</label>
                        <input type="text" class="form-control" name="subjectUpdate" id="subjectUpdate" aria-describedby="emailHelp" >
                        <small id="sbjCode_error" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                        <label>Subject Name</label>
                        <input type="text" class="form-control" name="subject_name" id="subject_name" aria-describedby="emailHelp" >
                        <small id="sbjName_error" class="form-text text-muted"></small>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Subject</button>
                </form>
            </div>
            <!--<div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>-->
        </div>
    </div>
</div>