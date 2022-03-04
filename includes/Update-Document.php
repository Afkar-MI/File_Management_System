<!-- Modal -->
<div class="modal fade" id="form_documents" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Documents</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="update_document_form" onsubmit="return false">
                    <div class="form-group">
                        <label>Batch</label>
                        <select class="form-control" id="select_batch" name="select_batch" required/>



                        </select>
                    </div>
                    <div class="form-group">
                        <label>Subject</label>
                        <select class="form-control" id="select_subject" name="select_subject" required/>



                        </select>
                    </div>
                    <div class="form-group">
                        <label>File Name</label>
                        <select class="form-control" id="select_file_name" name="select_file_name" required/>



                        </select>
                    </div>
                    <div class="form-group">
                        <input type="hidden" id="did" name="did" value=""/>
                        <label class="form-label w-100">Document</label>
                        <input type="file" name="document" id="document" class="form-control" placeholder="drop the file (pdf)">
                    </div>
                    <button type="submit" class="btn btn-success">Update Document</button>
                </form>
            </div>
            <!--<div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>-->
        </div>
    </div>
</div>