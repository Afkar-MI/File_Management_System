<!-- Modal -->
<div class="modal fade" id="update_FileName" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update File Name</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="update_FileName_form" onsubmit="return false">
                    <div class="form-group">
                        <input type="hidden" name="fid" id="fid" value=""/>
                        <label>File Name</label>
                        <input type="text" class="form-control" name="fileNameUpdate" id="fileNameUpdate" aria-describedby="emailHelp">
                        <small id="file_error" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                        <label>File Number</label>
                        <input type="text" class="form-control" name="file_number" id="file_number" aria-describedby="emailHelp">
                        <small id="filenumber_error" class="form-text text-muted"></small>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
            <!--<div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>-->
        </div>
    </div>
</div>