   <div class="offcanvas offcanvas-end" tabindex="-1" id="activate" aria-labelledby="offcanvasRightLabel">
                                                <div class="offcanvas-header">
                                                    <h5 id="offcanvasRightLabel">Status</h5>

                                                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                                </div>
                     <div class="offcanvas-body">
                         <form class="needs-validation" method="POST" action="publication-status.php" enctype="multipart/form-data" novalidate>
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
 <!-- active User Modal add  -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="add-banner" aria-labelledby="offcanvasExampleLabel">
                                         <div class="offcanvas-header">
                                                    <h5 id="offcanvasRightLabel">Add Publication</h5>
                                                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                                </div>
                     <div class="offcanvas-body">
                    <form class="needs-validation" method="POST" action="publication_add.php" enctype="multipart/form-data" novalidate>
                    <div class="mb-3">
                        <label for="name" class="form-label">Add Book Name </label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Book Name" required>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Add Book Subtitle </label>
                        <input type="text" class="form-control" name="subtitle" placeholder="Enter Subtitle" required>
                    </div>
                    <div class="mb-3">
                     <label for="image" class="form-label">Upload Image</label>
                     <input type="file" name="file"  class="form-control" required>
                      <div class="invalid-feedback">
                        Please Select file.
                    </div>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Add Academy </label>
                        <input type="text" class="form-control" name="academy" placeholder="Enter Academy Name" required>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Add Date </label>
                        <input type="text" class="form-control" name="date" placeholder="Enter Date" required>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Add url </label>
                        <input type="text" class="form-control" name="url" placeholder="Enter url" required>
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
            <h5 id="offcanvasRightLabel">Edit Publication</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <form class="needs-validation" method="POST" action="edit_book.php" enctype="multipart/form-data" novalidate>
                <input type="hidden" name="id" class="catid">
                <div class="mb-3">
                    <label for="image" class="form-label">Upload Image</label>
                    <input type="file" name="file" class="form-control" required>
                    <div class="invalid-feedback">
                        Please Select file.
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
            <h5 id="offcanvasRightLabel">Edit </h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <form class="needs-validation" method="POST" action="edit_publication.php" enctype="multipart/form-data" novalidate>
                <input type="hidden" name="c_id" class="catid">
                <div class="mb-3">
                    <label for="image" class="form-label">Name</label>
                    <input type="text" name="name" id="edit_name" class="form-control" required>
                    <div class="invalid-feedback">
                        Please Select file.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Subtitle</label>
                    <input type="text" name="subtitle" id="edit_subtitle" class="form-control" required>
                    <div class="invalid-feedback">
                        Please Select Subtitle.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Academy</label>
                    <input type="text" name="name" id="edit_academy" class="form-control" required>
                    <div class="invalid-feedback">
                        Please Select Academy.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Date</label>
                    <input type="text" name="date" id="edit_date" class="form-control" required>
                    <div class="invalid-feedback">
                        Please Select Date.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">URL</label>
                    <input type="text" name="url" id="edit_url" class="form-control" required>
                    <div class="invalid-feedback">
                        Please Select Date.
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
                        <form  method="POST" action="delete-publication.php">
                     <input type="hidden" class="catid" name="id">
                     
                     <button type="submit" name="delete" class="btn btn-light my-2" >Yes</button>
                 <button type="button" class="btn btn-light my-2" data-bs-dismiss="modal">No</button>
                                    </form>
                                </div>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->