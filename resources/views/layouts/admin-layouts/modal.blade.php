<!-- Add License -->
<div id="showcategoriesModal" class="modal fade" tabindex="-1"
    aria-labelledby="myModalLabel" aria-hidden="true"
    style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-light p-3" style="background-color: #C395E4 !Important;">
                <h5 class="modal-title" id="exampleModalLabel" style="color: white !important">Create License</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    id="close-modal" style="color:white !important"></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label for="inputState" class="form-label">Company Name</label>
                            <select id="inputState" class="form-select" data-choices data-choices-sorting="true">
                                <option selected disabled>Company Name</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Client Domain</label>
                            <input type="url" class="form-control" placeholder="Enter Client Domain">
                        </div>
                        <div class="mb-3">
                            <label for="StartleaveDate" class="form-label">License Start Date</label>
                            <input type="date" class="form-control" data-provider="flatpickr" id="StartleaveDate">
                        </div>
                        <div class="mb-3">
                            <label for="EndleaveDate" class="form-label">License End Date</label>
                            <input type="date" class="form-control" data-provider="flatpickr" id="EndleaveDate">
                        </div>
                        <div class="mb-3">
                            <label for="inputState" class="form-label">Warning Days Count</label>
                            <select id="inputState" class="form-select" data-choices data-choices-sorting="true">
                                <option selected disabled>Warning Days Count</option>
                                <option>...</option>
                            </select>
                        </div>
                        <hr>
                        <div class="modal-footer">
                            <div class="hstack gap-2 justify-content-end">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success submit-btn" name="save"
                                    style="background-color: #C395E4 !important;">Save<span
                                        class="spinner-border loader1 spinner-border-sm" role="status"
                                        aria-hidden="true" style="display:none"></span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Add Company -->
<div id="showcompanyModal" class="modal fade" tabindex="-1"
    aria-labelledby="myModalLabel" aria-hidden="true"
    style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-light p-3" style="background-color: #C395E4 !Important;">
                <h5 class="modal-title" id="exampleModalLabel" style="color: white !important">Create Companies</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    id="close-modal" style="color:white !important"></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Company Name</label>
                            <input type="url" class="form-control" placeholder="Company Name">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Address</label>
                            <input type="url" class="form-control" placeholder="Enter Address">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="url" class="form-control" placeholder="Enter Email">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Primary Phone</label>
                            <input type="url" class="form-control" placeholder="Enter Primary Phone">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Secondary Phone</label>
                            <input type="url" class="form-control" placeholder="Enter Secondary Phone">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Website</label>
                            <input type="url" class="form-control" placeholder="Enter Website">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Slogan</label>
                            <input type="url" class="form-control" placeholder="Enter Slogan">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Logo</label>
                            <input class="form-control" type="file" id="formFile">
                        </div>
                        <hr>
                        <div class="modal-footer">
                            <div class="hstack gap-2 justify-content-end">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success submit-btn" name="save"
                                    style="background-color: #C395E4 !important;">Save<span
                                        class="spinner-border loader1 spinner-border-sm" role="status"
                                        aria-hidden="true" style="display:none"></span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Add Checked-Out -->
<div id="showcheckedoutModal" class="modal fade" tabindex="-1"
    aria-labelledby="myModalLabel" aria-hidden="true"
    style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-light p-3" style="background-color: #C395E4 !Important;">
                <h5 class="modal-title" id="exampleModalLabel" style="color: white !important">Create Checked-Out</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    id="close-modal" style="color:white !important"></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Account Name</label>
                            <input type="text" class="form-control" placeholder="Account Name">
                        </div>
                        <hr>
                        <div class="modal-footer">
                            <div class="hstack gap-2 justify-content-end">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success submit-btn" name="save"
                                    style="background-color: #C395E4 !important;">Save<span
                                        class="spinner-border loader1 spinner-border-sm" role="status"
                                        aria-hidden="true" style="display:none"></span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Add Checked-Out -->
<div id="showinhouseModal" class="modal fade" tabindex="-1"
    aria-labelledby="myModalLabel" aria-hidden="true"
    style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-light p-3" style="background-color: #C395E4 !Important;">
                <h5 class="modal-title" id="exampleModalLabel" style="color: white !important">Create In-House</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    id="close-modal" style="color:white !important"></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Account Name</label>
                            <input type="text" class="form-control" placeholder="Account Name">
                        </div>
                        <hr>
                        <div class="modal-footer">
                            <div class="hstack gap-2 justify-content-end">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success submit-btn" name="save"
                                    style="background-color: #C395E4 !important;">Save<span
                                        class="spinner-border loader1 spinner-border-sm" role="status"
                                        aria-hidden="true" style="display:none"></span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Add Title -->
<div id="showtitleModal" class="modal fade" tabindex="-1"
    aria-labelledby="myModalLabel" aria-hidden="true"
    style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-light p-3" style="background-color: #C395E4 !Important;">
                <h5 class="modal-title" id="exampleModalLabel" style="color: white !important">Create Title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    id="close-modal" style="color:white !important"></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Title Code</label>
                            <input type="text" class="form-control" placeholder="Title Code">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <input type="text" class="form-control" placeholder="Description">
                        </div>
                        <hr>
                        <div class="modal-footer">
                            <div class="hstack gap-2 justify-content-end">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success submit-btn" name="save"
                                    style="background-color: #C395E4 !important;">Save<span
                                        class="spinner-border loader1 spinner-border-sm" role="status"
                                        aria-hidden="true" style="display:none"></span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Add Source -->
<div id="showsourceModal" class="modal fade" tabindex="-1"
    aria-labelledby="myModalLabel" aria-hidden="true"
    style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-light p-3" style="background-color: #C395E4 !Important;">
                <h5 class="modal-title" id="exampleModalLabel" style="color: white !important">Create Source</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    id="close-modal" style="color:white !important"></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Source Code</label>
                            <input type="text" class="form-control" placeholder="Source Code">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <input type="text" class="form-control" placeholder="Description">
                        </div>
                        <hr>
                        <div class="modal-footer">
                            <div class="hstack gap-2 justify-content-end">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success submit-btn" name="save"
                                    style="background-color: #C395E4 !important;">Save<span
                                        class="spinner-border loader1 spinner-border-sm" role="status"
                                        aria-hidden="true" style="display:none"></span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Add Hotel-Date -->
<div id="showhoteldateModal" class="modal fade" tabindex="-1"
    aria-labelledby="myModalLabel" aria-hidden="true"
    style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-light p-3" style="background-color: #C395E4 !Important;">
                <h5 class="modal-title" id="exampleModalLabel" style="color: white !important">Create Hotel-Date</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    id="close-modal" style="color:white !important"></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Date</label>
                            <input type="date" class="form-control" placeholder="Source Code">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Type</label>
                            <input type="text" class="form-control" placeholder="Description">
                        </div>
                        <hr>
                        <div class="modal-footer">
                            <div class="hstack gap-2 justify-content-end">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success submit-btn" name="save"
                                    style="background-color: #C395E4 !important;">Save<span
                                        class="spinner-border loader1 spinner-border-sm" role="status"
                                        aria-hidden="true" style="display:none"></span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Add Communications -->
<div id="showcommunicationsModal" class="modal fade" tabindex="-1"
    aria-labelledby="myModalLabel" aria-hidden="true"
    style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-light p-3" style="background-color: #C395E4 !Important;">
                <h5 class="modal-title" id="exampleModalLabel" style="color: white !important">Create Communications</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    id="close-modal" style="color:white !important"></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label for="inputState" class="form-label">Department</label>
                            <select id="inputState" class="form-select" data-choices data-choices-sorting="true">
                                <option selected disabled>Department</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" placeholder="Password">
                        </div>
                        <hr>
                        <div class="modal-footer">
                            <div class="hstack gap-2 justify-content-end">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success submit-btn" name="save"
                                    style="background-color: #C395E4 !important;">Save<span
                                        class="spinner-border loader1 spinner-border-sm" role="status"
                                        aria-hidden="true" style="display:none"></span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Add Room Floor -->
<div id="showroomfloorModal" class="modal fade" tabindex="-1"
    aria-labelledby="myModalLabel" aria-hidden="true"
    style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-light p-3" style="background-color: #C395E4 !Important;">
                <h5 class="modal-title" id="exampleModalLabel" style="color: white !important">Create Room-Floor</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    id="close-modal" style="color:white !important"></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Floor Number</label>
                            <input type="text" class="form-control" placeholder="Floor Number">
                        </div>
                        <hr>
                        <div class="modal-footer">
                            <div class="hstack gap-2 justify-content-end">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success submit-btn" name="save"
                                    style="background-color: #C395E4 !important;">Save<span
                                        class="spinner-border loader1 spinner-border-sm" role="status"
                                        aria-hidden="true" style="display:none"></span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Add Room Type -->
<div id="showroomtypeModal" class="modal fade" tabindex="-1"
    aria-labelledby="myModalLabel" aria-hidden="true"
    style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-light p-3" style="background-color: #C395E4 !Important;">
                <h5 class="modal-title" id="exampleModalLabel" style="color: white !important">Create Room-Type</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    id="close-modal" style="color:white !important"></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Room Type Name</label>
                            <input type="text" class="form-control" placeholder="Room Type Name">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Breakfast</label>
                            <input type="text" class="form-control" placeholder="Breakfast">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Room Type Rate</label>
                            <input type="text" class="form-control" placeholder="Room Type Rate">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Double Rate</label>
                            <input type="text" class="form-control" placeholder="Double Rate">
                        </div>
                        <hr>
                        <div class="modal-footer">
                            <div class="hstack gap-2 justify-content-end">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success submit-btn" name="save"
                                    style="background-color: #C395E4 !important;">Save<span
                                        class="spinner-border loader1 spinner-border-sm" role="status"
                                        aria-hidden="true" style="display:none"></span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Add Room Rate -->
<div id="showroomratesModal" class="modal fade" tabindex="-1"
    aria-labelledby="myModalLabel" aria-hidden="true"
    style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-light p-3" style="background-color: #C395E4 !Important;">
                <h5 class="modal-title" id="exampleModalLabel" style="color: white !important">Create Room-And-Rates</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    id="close-modal" style="color:white !important"></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label for="inputState" class="form-label">Room Type</label>
                            <select id="inputState" class="form-select" data-choices data-choices-sorting="true">
                                <option selected disabled>Room Type</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="inputState" class="form-label">Room Floor</label>
                            <select id="inputState" class="form-select" data-choices data-choices-sorting="true">
                                <option selected disabled>Room Floor</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Room Number</label>
                            <input type="text" class="form-control" placeholder="Room Number">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Breakfast</label>
                            <input type="text" class="form-control" placeholder="Breakfast">
                        </div>
                        <hr>
                        <div class="modal-footer">
                            <div class="hstack gap-2 justify-content-end">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success submit-btn" name="save"
                                    style="background-color: #C395E4 !important;">Save<span
                                        class="spinner-border loader1 spinner-border-sm" role="status"
                                        aria-hidden="true" style="display:none"></span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Add Room Status -->
<div id="showroomstatusModal" class="modal fade" tabindex="-1"
    aria-labelledby="myModalLabel" aria-hidden="true"
    style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-light p-3" style="background-color: #C395E4 !Important;">
                <h5 class="modal-title" id="exampleModalLabel" style="color: white !important">Create Room-Status</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    id="close-modal" style="color:white !important"></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label for="inputState" class="form-label">Occupancy Status</label>
                            <select id="inputState" class="form-select" data-choices data-choices-sorting="true">
                                <option selected disabled>Occupancy Status</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="inputState" class="form-label">Block Status</label>
                            <select id="inputState" class="form-select" data-choices data-choices-sorting="true">
                                <option selected disabled>Block Status</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="inputState" class="form-label">House Keeping Status</label>
                            <select id="inputState" class="form-select" data-choices data-choices-sorting="true">
                                <option selected disabled>House Keeping Status</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="inputState" class="form-label">Out of Order Reason</label>
                            <select id="inputState" class="form-select" data-choices data-choices-sorting="true">
                                <option selected disabled>Out of Order Reason</option>
                                <option>...</option>
                            </select>
                        </div>

                        <hr>
                        <div class="modal-footer">
                            <div class="hstack gap-2 justify-content-end">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success submit-btn" name="save"
                                    style="background-color: #C395E4 !important;">Save<span
                                        class="spinner-border loader1 spinner-border-sm" role="status"
                                        aria-hidden="true" style="display:none"></span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Add Bar Rate -->
<div id="showbarrateModal" class="modal fade" tabindex="-1"
    aria-labelledby="myModalLabel" aria-hidden="true"
    style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-light p-3" style="background-color: #C395E4 !Important;">
                <h5 class="modal-title" id="exampleModalLabel" style="color: white !important">Create Bar-Rates</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    id="close-modal" style="color:white !important"></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label for="inputState" class="form-label">Rate Name</label>
                            <select id="inputState" class="form-select" data-choices data-choices-sorting="true">
                                <option selected disabled>Rate Name</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Lower Occupancy Percentage</label>
                            <input type="text" class="form-control" placeholder="Lower occupancy Percentage">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Higher Occupancy Percentage</label>
                            <input type="text" class="form-control" placeholder="Higher Occupancy Percentage">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Percentage Increase</label>
                            <input type="text" class="form-control" placeholder="Percentage Increase">
                        </div>
                        <div class="mb-3">
                            <label for="inputState" class="form-label">Set By System</label>
                            <select id="inputState" class="form-select" data-choices data-choices-sorting="true">
                                <option selected disabled>Set By System</option>
                                <option>...</option>
                            </select>
                        </div>

                        <hr>
                        <div class="modal-footer">
                            <div class="hstack gap-2 justify-content-end">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success submit-btn" name="save"
                                    style="background-color: #C395E4 !important;">Save<span
                                        class="spinner-border loader1 spinner-border-sm" role="status"
                                        aria-hidden="true" style="display:none"></span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Add Rate Name -->
<div id="showbarratenameModal" class="modal fade" tabindex="-1"
    aria-labelledby="myModalLabel" aria-hidden="true"
    style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-light p-3" style="background-color: #C395E4 !Important;">
                <h5 class="modal-title" id="exampleModalLabel" style="color: white !important">Create Rate-Name</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    id="close-modal" style="color:white !important"></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Rate Name</label>
                            <input type="text" class="form-control" placeholder="Rate Name">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <input type="text" class="form-control" placeholder="Description">
                        </div>
                        <hr>
                        <div class="modal-footer">
                            <div class="hstack gap-2 justify-content-end">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success submit-btn" name="save"
                                    style="background-color: #C395E4 !important;">Save<span
                                        class="spinner-border loader1 spinner-border-sm" role="status"
                                        aria-hidden="true" style="display:none"></span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Add Rate Type -->
<div id="showratetypeModal" class="modal fade" tabindex="-1"
    aria-labelledby="myModalLabel" aria-hidden="true"
    style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-light p-3" style="background-color: #C395E4 !Important;">
                <h5 class="modal-title" id="exampleModalLabel" style="color: white !important">Create Rate-Type</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    id="close-modal" style="color:white !important"></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label for="inputState" class="form-label">Rate Type Name</label>
                            <select id="inputState" class="form-select" data-choices data-choices-sorting="true">
                                <option selected disabled>Rate Type Name</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="inputState" class="form-label">Room Type</label>
                            <select id="inputState" class="form-select" data-choices data-choices-sorting="true">
                                <option selected disabled>Room Type</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Room Type Rate</label>
                            <input type="text" class="form-control" placeholder="Room Type Rate">
                        </div>
                        <div class="mb-3">
                            <label for="inputState" class="form-label">Active</label>
                            <select id="inputState" class="form-select" data-choices data-choices-sorting="true">
                                <option selected disabled>Active</option>
                                <option>...</option>
                            </select>
                        </div>
                        <hr>
                        <div class="modal-footer">
                            <div class="hstack gap-2 justify-content-end">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success submit-btn" name="save"
                                    style="background-color: #C395E4 !important;">Save<span
                                        class="spinner-border loader1 spinner-border-sm" role="status"
                                        aria-hidden="true" style="display:none"></span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Add Group -->
<div id="showgroupModal" class="modal fade" tabindex="-1"
    aria-labelledby="myModalLabel" aria-hidden="true"
    style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-light p-3" style="background-color: #C395E4 !Important;">
                <h5 class="modal-title" id="exampleModalLabel" style="color: white !important">Create Groups</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    id="close-modal" style="color:white !important"></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Group Name</label>
                            <input type="text" class="form-control" placeholder="Group Name">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Group Email</label>
                            <input type="text" class="form-control" placeholder="Group Email">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Group Code</label>
                            <input type="text" class="form-control" placeholder="Group Code">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Credit Limit</label>
                            <input type="text" class="form-control" placeholder="Credit Limit">
                        </div>
                        <hr>
                        <div class="modal-footer">
                            <div class="hstack gap-2 justify-content-end">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success submit-btn" name="save"
                                    style="background-color: #C395E4 !important;">Save<span
                                        class="spinner-border loader1 spinner-border-sm" role="status"
                                        aria-hidden="true" style="display:none"></span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Add Group Rate -->
<div id="showgrouprateModal" class="modal fade" tabindex="-1"
    aria-labelledby="myModalLabel" aria-hidden="true"
    style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-light p-3" style="background-color: #C395E4 !Important;">
                <h5 class="modal-title" id="exampleModalLabel" style="color: white !important">Create Group-Rate</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    id="close-modal" style="color:white !important"></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label for="inputState" class="form-label">Group Name</label>
                            <select id="inputState" class="form-select" data-choices data-choices-sorting="true">
                                <option selected disabled>Group Name</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="inputState" class="form-label">Room Type</label>
                            <select id="inputState" class="form-select" data-choices data-choices-sorting="true">
                                <option selected disabled>Room Type</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Room Rate</label>
                            <input type="text" class="form-control" placeholder="Room Rate">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Break Fast</label>
                            <input type="text" class="form-control" placeholder="Break Fast">
                        </div>
                        <hr>
                        <div class="modal-footer">
                            <div class="hstack gap-2 justify-content-end">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success submit-btn" name="save"
                                    style="background-color: #C395E4 !important;">Save<span
                                        class="spinner-border loader1 spinner-border-sm" role="status"
                                        aria-hidden="true" style="display:none"></span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Add Membership Type -->
<div id="showmembershiptypeModal" class="modal fade" tabindex="-1"
    aria-labelledby="myModalLabel" aria-hidden="true"
    style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-light p-3" style="background-color: #C395E4 !Important;">
                <h5 class="modal-title" id="exampleModalLabel" style="color: white !important">Create Membership-Type</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    id="close-modal" style="color:white !important"></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Membership Type</label>
                            <input type="text" class="form-control" placeholder="Membership Type">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Discount</label>
                            <input type="text" class="form-control" placeholder="Discount">
                        </div>
                        <hr>
                        <div class="modal-footer">
                            <div class="hstack gap-2 justify-content-end">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success submit-btn" name="save"
                                    style="background-color: #C395E4 !important;">Save<span
                                        class="spinner-border loader1 spinner-border-sm" role="status"
                                        aria-hidden="true" style="display:none"></span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Add User -->
<div id="showuserModal" class="modal fade" tabindex="-1"
    aria-labelledby="myModalLabel" aria-hidden="true"
    style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-light p-3" style="background-color: #C395E4 !Important;">
                <h5 class="modal-title" id="exampleModalLabel" style="color: white !important">Create Users</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    id="close-modal" style="color:white !important"></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label">First Name</label>
                            <input type="text" class="form-control" placeholder="First Name">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Last Name</label>
                            <input type="text" class="form-control" placeholder="Last Name">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="text" class="form-control" placeholder="Email">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input type="text" class="form-control" placeholder="Username">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Phone Number</label>
                            <input type="text" class="form-control" placeholder="Phone Number">
                        </div>
                        <div class="mb-3">
                            <label for="inputState" class="form-label">Work Status</label>
                            <select id="inputState" class="form-select" data-choices data-choices-sorting="true">
                                <option selected disabled>Work Status</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="inputState" class="form-label">Role</label>
                            <select id="inputState" class="form-select" data-choices data-choices-sorting="true">
                                <option selected disabled>Role</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="text" class="form-control" placeholder="Password">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Comfirm Password</label>
                            <input type="text" class="form-control" placeholder="Comfirm Password">
                        </div>
                        <hr>
                        <div class="modal-footer">
                            <div class="hstack gap-2 justify-content-end">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success submit-btn" name="save"
                                    style="background-color: #C395E4 !important;">Save<span
                                        class="spinner-border loader1 spinner-border-sm" role="status"
                                        aria-hidden="true" style="display:none"></span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Add SHift -->
<div id="showshiftsModal" class="modal fade" tabindex="-1"
    aria-labelledby="myModalLabel" aria-hidden="true"
    style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-light p-3" style="background-color: #C395E4 !Important;">
                <h5 class="modal-title" id="exampleModalLabel" style="color: white !important">Create Shifts</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    id="close-modal" style="color:white !important"></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label for="inputState" class="form-label">Staff</label>
                            <select id="inputState" class="form-select" data-choices data-choices-sorting="true">
                                <option selected disabled>Staff</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="inputState" class="form-label">Shift Name</label>
                            <select id="inputState" class="form-select" data-choices data-choices-sorting="true">
                                <option selected disabled>Shift Name</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Shift Date</label>
                            <input type="date" class="form-control" placeholder="Shift Date">
                        </div>
                        <hr>
                        <div class="modal-footer">
                            <div class="hstack gap-2 justify-content-end">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success submit-btn" name="save"
                                    style="background-color: #C395E4 !important;">Save<span
                                        class="spinner-border loader1 spinner-border-sm" role="status"
                                        aria-hidden="true" style="display:none"></span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Add SHift -->
<div id="showshifttimingsModal" class="modal fade" tabindex="-1"
    aria-labelledby="myModalLabel" aria-hidden="true"
    style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-light p-3" style="background-color: #C395E4 !Important;">
                <h5 class="modal-title" id="exampleModalLabel" style="color: white !important">Create Shift-Timing</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    id="close-modal" style="color:white !important"></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Shift Name</label>
                            <input type="type" class="form-control" placeholder="Shift Name">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Start Time</label>
                            <input type="time" class="form-control" placeholder="Start Time">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">End Time</label>
                            <input type="time" class="form-control" placeholder="End Time">
                        </div>
                        <hr>
                        <div class="modal-footer">
                            <div class="hstack gap-2 justify-content-end">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success submit-btn" name="save"
                                    style="background-color: #C395E4 !important;">Save<span
                                        class="spinner-border loader1 spinner-border-sm" role="status"
                                        aria-hidden="true" style="display:none"></span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>