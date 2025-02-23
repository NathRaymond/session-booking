<!-- Book Session -->
<div id="showsessionModal" class="modal fade" tabindex="-1"
    aria-labelledby="myModalLabel" aria-hidden="true"
    style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-light p-3" style="background-color: #C395E4 !important;">
                <h5 class="modal-title" id="exampleModalLabel" style="color: white !important">Create Session</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    id="close-modal" style="color:white !important"></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form class="magicFormSubmit" action="{{ route('sessiontype.add') }}"
                        method="POST" data-nextaction="reload">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Session Name</label>
                            <input type="text" name="session_name" class="form-control" placeholder="Enter Session Name">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Session Time Duration</label>
                            <input type="text" name="session_time" class="form-control" placeholder="Enter Session Duration">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Session Price</label>
                            <input type="text" name="session_price" class="form-control" placeholder="Enter Session Price">
                        </div>
                        <hr>
                        <div class="modal-footer">
                            <div class="hstack gap-2 justify-content-end">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success"
                                    style="background-color: #C395E4 !important;">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>