   <div class="offcanvas offcanvas-end" tabindex="-1" id="activate" aria-labelledby="offcanvasRightLabel">
                                                <div class="offcanvas-header">
                                                    <h5 id="offcanvasRightLabel">Status</h5>

                                                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                                </div>
                     <div class="offcanvas-body">
                         <form class="needs-validation" method="POST" action="webinar-status.php" enctype="multipart/form-data" novalidate>
                          <input type="hidden" name="id" class="catid">
                     
                        <div class="mb-3">
                         <select class="form-control" name="status">
                            <option>Select Status</option>
                             <option value="Active">Active</option>
                             <option value="Deactive">Deactive</option>
                         </select>
                           <div class="invalid-feedback">
                                Please Select Status.
                            </div>
                     </div>


                         <div class="text-end">
                                <button type="submit" name="edit_status" class="btn btn-success waves-effect waves-light">Update</button>
                                <button type="reset" class="btn btn-danger waves-effect waves-light" onclick="Custombox.close();">Cancel</button>
                            </div>
                        </form>
                  </div>
             </div>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="edit" aria-labelledby="offcanvasRightLabel">
                                                <div class="offcanvas-header">
                                                    <h5 id="offcanvasRightLabel">Edit</h5>

                                                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                                </div>
                     <div class="offcanvas-body">
                         <form class="needs-validation" method="POST" action="edit_webinar.php" enctype="multipart/form-data" novalidate>
                          <input type="hidden" name="id" class="catid">
                     
                       <div class="mb-3">
                    <label for="name" class="form-label">Add Webinar Name </label>
                    <input type="text" class="form-control" id="edit_name" name="name" placeholder="Enter Webinar Name" required>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Select Date </label>
                    <input type="date" class="form-control" id="edit_date" name="date" required>
                </div>
               
                <div class="mb-3">
                    <label for="name" class="form-label">Select Duration </label>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="time" class="form-control" id="edit_start" name="start" required>
                        </div>
                        <div class="col-md-6">
                            <input type="time" class="form-control" id="edit_end" name="end" required>
                        </div>
                    </div>
                </div>
                <div class=


                         <div class="text-end">
                                <button type="submit" name="update" class="btn btn-success waves-effect waves-light">Update</button>
                                <button type="reset" class="btn btn-danger waves-effect waves-light" onclick="Custombox.close();">Cancel</button>
                            </div>
                        </form>
                  </div>
             </div>
 <!-- active User Modal add  -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="add-banner" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 id="offcanvasRightLabel">Add Webinar</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <form class="needs-validation" method="POST" action="webinar_add.php" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="image" class="form-label">Upload Thumbnail</label>
                    <input type="file" name="image"  accept=" .jpg , .jpeg , .png " class="form-control" required>
                    <div class="invalid-feedback">
                        Please Select Photo.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Add Webinar Name </label>
                    <input type="text" class="form-control" name="name" placeholder="Enter Webinar Name" required>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Select Date </label>
                    <input type="date" class="form-control" name="date" required>
                </div>
               
                <div class="mb-3">
                    <label for="name" class="form-label">Select Duration </label>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="time" class="form-control" name="start" required>
                        </div>
                        <div class="col-md-6">
                            <input type="time" class="form-control" name="end" required>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label"> Status </label>
                    <select class="form-control" name="status" required>
                        <option value="Active">Active</option>
                         <option value="Deactive">Deactive</option>
                    </select>
                </div>
                <div class="text-end">
                     <button type="submit" name="add" class="btn btn-success waves-effect waves-light">Submit</button>
                    <button type="button" class="btn btn-danger waves-effect waves-light" onclick="Custombox.close();">Cancel</button>
                </div>
            </form>
        </div>
    </div>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="banner" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 id="offcanvasRightLabel">Edit Banner</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <form class="needs-validation" method="POST" action="edit_w_image.php" enctype="multipart/form-data" novalidate>
                <input type="hidden" name="id" class="catid">
                <div class="mb-3">
                    <label for="image" class="form-label">Upload Image</label>
                    <input type="file" id="image" name="imae"  accept=" .jpg , .jpeg , .png " class="form-control" required>
                    <div class="invalid-feedback">
                        Please Select Photo.
                    </div>
                </div>
                <div class="text-end">
                    <button type="submit" name="update" class="btn btn-success waves-effect waves-light">Submit</button>
                    <button type="button" class="btn btn-danger waves-effect waves-light" onclick="Custombox.close();">Cancel</button>
                </div>
            </form>
          </div>
     </div>
     
         <div class="offcanvas offcanvas-end" tabindex="-1" id="c_image" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 id="offcanvasRightLabel">Edit Contain Image</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <form class="needs-validation" method="POST" action="edit_c_image.php" enctype="multipart/form-data" novalidate>
                <input type="hidden" name="c_id" class="catid">
                <div class="mb-3">
                    <label for="image" class="form-label">Upload Image</label>
                    <input type="file" id="banner" name="image"  accept=" .jpg , .jpeg , .png " class="form-control" required>
                    <div class="invalid-feedback">
                        Please Select Photo.
                    </div>
                </div>
                <div class="text-end">
                    <button type="submit" name="update" class="btn btn-success waves-effect waves-light">Submit</button>
                    <button type="button" class="btn btn-danger waves-effect waves-light" onclick="Custombox.close();">Cancel</button>
                </div>
            </form>
          </div>
     </div>
     <div class="offcanvas offcanvas-end" tabindex="-1" id="thumbnail" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 id="offcanvasRightLabel">Edit Thumbnail</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <form class="needs-validation" method="POST" action="edit_w_image.php" enctype="multipart/form-data" novalidate>
                <input type="hidden" name="id" class="catid">
                <div class="mb-3">
                    <label for="image" class="form-label">Upload Image</label>
                    <input type="file" name="image"  accept=" .jpg , .jpeg , .png " class="form-control" required>
                    <div class="invalid-feedback">
                        Please Select Thumbnail.
                    </div>
                </div>
                <div class="text-end">
                    <button type="submit" name="update" class="btn btn-success waves-effect waves-light">Submit</button>
                    <button type="button" class="btn btn-danger waves-effect waves-light" onclick="Custombox.close();">Cancel</button>
                </div>
            </form>
          </div>
     </div>
         <!-- Danger Alert Modal Delete add-user -->
                <div id="delete" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content modal-filled bg-danger">
                            <div class="modal-body p-4">
                                <div class="text-center">
                                    <i class="dripicons-wrong h1 text-white"></i>
                         <h4 class="mt-2 text-white">Oh snap!</h4>
                         <p class="mt-3 text-white">Are You Sure You Wants to Delete?</p>
                        <form  method="POST" action="webinar-delete.php">
                     <input type="hidden" class="catid" name="id">
                     
                     <button type="submit" name="delete" class="btn btn-light my-2" >Yes</button>
                 <button type="button" class="btn btn-light my-2" data-bs-dismiss="modal">No</button>
                                    </form>
                                </div>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->