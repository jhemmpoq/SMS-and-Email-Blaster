<div class="container">
    @yield('content')
</div>


<div class="segment">
    <div class="view-segment">
        <div class="view-list">
            <div class="modal fade" id="viewSegment" tabindex="-1" aria-labelledby="viewSegmentLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="viewSegmentLabel">View Segment</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label for="inputSName">Segment Name</label>
                                    <p type="text" class="form-control" id="inputSName" placeholder="Segment Name">Segment Name</p>
                                  </div>
                                <div class="form-row row my-4">
                                    <label for="inputSActivity">Activity</label>
                                  <div class="form-group col-md-6">
                                    <select class="form-select" aria-label="Default select example" disabled>
                                        <option>Open this select menu</option>
                                        <option selected value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                      </select>
                                  </div>
                                  <div class="form-group col-md-6 row">
                                    <select class="form-select" aria-label="Default select example" disabled>
                                        <option>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option selected value="2">Two</option>
                                        <option value="3">Three</option>
                                      </select>
                                  </div>
                                </div>
                                <div class="form-row row my-4">
                                    <label for="inputSActivity">List</label>
                                  <div class="form-group col-lg-5">
                                    <select class="form-select" aria-label="Default select example" disabled>
                                        <option>Open this select menu</option>
                                        <option selected value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                      </select>
                                  </div>
                                  <div class="form-group col-lg-2 d-grid">
                                    <a href="#" class="btn btn-dark disabled">OR</a>
                                  </div>
                                  <div class="form-group col-lg-5 row">
                                    <select class="form-select" aria-label="Default select example" disabled>
                                        <option>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option selected value="2">Two</option>
                                        <option value="3">Three</option>
                                      </select>
                                  </div>
                                </div>
                                <div class="form-row row my-4">
                                  <label for="inputCity">Contacts Details</label>
                                  <div class="form-group col-md-5">
                                    <select class="form-select" aria-label="Default select example" disabled>
                                        <option>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option selected value="2">Two</option>
                                        <option value="3">Three</option>
                                      </select>
                                  </div>
                                  <div class="form-group col-md-3">
                                    <select class="form-select" aria-label="Default select example" disabled>
                                        <option>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option selected value="2">Two</option>
                                        <option value="3">Three</option>
                                      </select>
                                  </div>
                                  <div class="form-group col-md-4">
                                    <select class="form-select" aria-label="Default select example" disabled>
                                        <option>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option selected value="2">Two</option>
                                        <option value="3">Three</option>
                                      </select>
                                  </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

    <div class="edit-segment">
        <div class="modal fade" id="editSegment" tabindex="-1" aria-labelledby="editSegmentLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editSegmentLabel">Edit Segment</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="inputSName">Segment Name</label>
                                <input type="text" class="form-control" id="inputSName" placeholder="Segment Name">
                              </div>
                            <div class="form-row row my-4">
                                <label for="inputSActivity">Activity</label>
                              <div class="form-group col-md-6">
                                <select class="form-select" aria-label="Default select example">
                                    <option>Open this select menu</option>
                                    <option selected value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                  </select>
                              </div>
                              <div class="form-group col-md-6 row">
                                <select class="form-select" aria-label="Default select example">
                                    <option>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option selected value="2">Two</option>
                                    <option value="3">Three</option>
                                  </select>
                              </div>
                            </div>
                            <div class="form-row row my-4">
                                <label for="inputSActivity">List</label>
                              <div class="form-group col-lg-5">
                                <select class="form-select" aria-label="Default select example">
                                    <option>Open this select menu</option>
                                    <option selected value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                  </select>
                              </div>
                              <div class="form-group col-lg-2 d-grid">
                                <a href="#" class="btn btn-dark">OR</a>
                              </div>
                              <div class="form-group col-lg-5 row">
                                <select class="form-select" aria-label="Default select example">
                                    <option>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option selected value="2">Two</option>
                                    <option value="3">Three</option>
                                  </select>
                              </div>
                            </div>
                            <div class="form-row row my-4">
                              <label for="inputCity">Contacts Details</label>
                              <div class="form-group col-md-5">
                                <select class="form-select" aria-label="Default select example">
                                    <option>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option selected value="2">Two</option>
                                    <option value="3">Three</option>
                                  </select>
                              </div>
                              <div class="form-group col-md-3">
                                <select class="form-select" aria-label="Default select example">
                                    <option>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option selected value="2">Two</option>
                                    <option value="3">Three</option>
                                  </select>
                              </div>
                              <div class="form-group col-md-4">
                                <select class="form-select" aria-label="Default select example">
                                    <option>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option selected value="2">Two</option>
                                    <option value="3">Three</option>
                                  </select>
                              </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="delete-segment">
        <div class="modal fade" id="deleteSegment" tabindex="-1" aria-labelledby="deleteSegment" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to delete?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="campaign">
    <div class="sms">
        {{-- VIEW MODAL --}}
        <div class="modal fade" id="viewSMSCampaign" tabindex="-1" aria-labelledby="viewSMSCampaignLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="viewSMSCampaignLabel">View SMS Campaign</h5>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Segment Name:</label>
                        <p class="form-control">Sale Campaign, Giving Vouchers</p>
                        </div>
                        <div class="form-group">
                        <label for="message-text" class="col-form-label">Message:</label>
                            <p class="form-control" id="message-text">Sed et interdum orci. Proin porta vehicula leo, sed luctus quam 
                            sodales et. Maecenas fermentum blandit porttitor. Etiam iaculis fermentum urna, at laoreet arcu 
                            iaculis ac. Nulla tincidunt semper enim, vitae semper urna varius vel. Vestibulum ante ipsum primis 
                            in faucibus orci luctus et ultrices posuere cubilia curae; Quisque ornare est nec velit tristique 
                            venenatis eget et justo.
                            </p>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
            </div>
        </div>
        {{-- END VIEW MODAL --}}

        {{-- EDIT MODAL --}}
        <div class="modal fade" id="editSMSCampaign" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Segment</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <form>
                        <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Segment Name:</label>
                        <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                        <label for="message-text" class="col-form-label">Message:</label>
                        <textarea class="form-control" id="message-text"></textarea>
                        </div>
                    </form>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
            </div>
        </div>
        {{-- END EDIT MODAL --}}

        {{-- DELETE MODAL --}}
        <div class="modal fade" id="deleteSMSCampaign" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                Are you sure you want to delete?  
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-danger">Delete</button>
                </div>
            </div>
            </div>
        </div>
        {{-- END DELETE MODAL --}}
    </div>

    <div class="email">
        {{-- VIEW MODAL --}}
        <div class="modal fade" id="viewEmailCampaign" tabindex="-1" aria-labelledby="viewEmailCampaignLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="viewEmailCampaignLabel">View Email Campaign</h5>
                </div>
                <div class="modal-body">
                    <div class="form-row">
                        <div class="form-group-inline col form-data">
                            <div class="form-row row">
                                <label for="inputName">Name</label>
                                    <div class="form-group col-md-8">
                                        <p class="form-control" id="inputName" placeholder="Name">Sale Campaign, Giving Vouchers</p>
                                    </div>
                                    <div class="form-group col-lg-4">
                                        <a class="form-control btn btn-primary">Personalize</a>
                                    </div>
                            </div>
                        </div>
                        <div class="form-group-inline col form-data">
                            <label for="inputHeeader">Preheader</label>
                            <p type="text" class="form-control" id="inputHader" placeholder="Preheader">Messae Title</p>
                        </div>
                        <div class="form-group-inline col form-data">
                            <label for="inputFName">From Name</label>
                            <p type="text" class="form-control" id="inputFName" placeholder="From Name">From Name</p>
                        </div>
                        <div class="form-group-inline col form-data">
                            <div class="form-row row">
                                    <div class="form-group col-md-6">
                                        <label for="inputFAddress">From Address</label>
                                        <select class="form-select" aria-label="Default select example" disabled>
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                
                                    <div class="form-group col-md-6">
                                        <label for="inputRTAddress">Reply-To-Address</label>
                                        <select class="form-select" aria-label="Default select example" disabled>
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
            </div>
        </div>
        {{-- END VIEW MODAL --}}

        {{-- EDIT MODAL --}}
        <div class="modal fade" id="editEmailCampaign" tabindex="-1" aria-labelledby="editEmailCampaignLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editEmailCampaignLabel">Edit Email Campaign</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <div class="form-row">
                        <div class="form-group-inline col form-data">
                            <div class="form-row row">
                                <label for="inputName">Name</label>
                                <div class="form-group col-md-8">
                                <input type="tezt" class="form-control" id="inputName" placeholder="Name" value="Sale Campaign, Giving Vouchers">
                                </div>
                                <div class="form-group col-md-4">
                                <button class="form-control btn btn-primary" data-bs-toogle="modal" data-bs-target="#editEmailModal2">Personalize</button>
                                </div>
                            </div>
                        </div>
                        <div class="form-group-inline col form-data">
                            <label for="inputHeeader">Preheader</label>
                            <input type="text" class="form-control" id="inputHader" placeholder="Preheader" value="Message Title">
                        </div>
                        <div class="form-group-inline col form-data">
                            <label for="inputFName">From Name</label>
                            <input type="text" class="form-control" id="inputFName" placeholder="From Name" value="From Name">
                        </div>
                        <div class="form-group-inline col form-data">
                            <div class="form-row row">
                                    <div class="form-group col-md-6">
                                        <label for="inputFAddress">From Address</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option>Open this select menu</option>
                                            <option selected value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                
                                    <div class="form-group col-md-6">
                                        <label for="inputRTAddress">Reply-To-Address</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option selected value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" data-bs-toogle="modal" data-bs-target="$editModal2">Save changes</button>
                </div>
            </div>
            </div>
        </div>
        {{-- END EDIT MODAL --}}

        {{-- EDIT MODAL 2 --}}
        <div class="modal fade" id="editEmailModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Segment</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    ...
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" data-bs-target="#editEmailModal2" data-bs-toogle="modal">Save changes</button>
                </div>
            </div>
            </div>
        </div>
        {{-- END EDIT MODAL 2 --}}




        {{-- DELETE MODAL --}}
        <div class="modal fade" id="deleteEmailCampaign" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                Are you sure you want to delete?  
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-danger">Delete</button>
                </div>
            </div>
            </div>
        </div>
        {{-- END DELETE MODAL --}}
    </div>


    <div class="both">

        <div class="view-both">
            <div class="modal fade" id="viewBoth" aria-hidden="true" aria-labelledby="viewBothLabel" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="viewBothLabel">SMS and Email</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
    
                        <div class="modal-body">
                            <div class="d-grid gap-2 col-6 my-4 mx-auto">
                                <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#editBothSMS">SMS</button> <br>
                                <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#editBothEmail">Email</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="modal fade" id="editBothSMS" aria-hidden="true" aria-labelledby="editBothSMSlabel" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="editBothSMSlabel">Edit SMS</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Segment Name:</label>
                            <input type="text" class="form-control" id="recipient-name">
                            </div>
                            <div class="form-group">
                            <label for="message-text" class="col-form-label">Message:</label>
                            <textarea class="form-control" id="message-text"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button class="btn btn-primary" data-bs-target="#editBothSel" data-bs-toggle="modal">Next</button>
                    </div>
                </div>
                </div>
            </div>
    
            <div class="modal fade" id="editBothEmail" aria-hidden="true" aria-labelledby="editBothEmailLabel" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button class="btn" data-bs-toggle="modal" data-bs-target="editBothSel"><i class="fa fa-angle-left"></i></button>
                            <h5 class="modal-title" id="editBothEmailLabel">Edit Email</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="form-row">
                                <div class="form-group-inline col form-data">
                                    <div class="form-row row">
                                        <label for="inputName">Name</label>
                                        <div class="form-group col-md-8">
                                        <input type="tezt" class="form-control" id="inputName" placeholder="Name" value="Sale Campaign, Giving Vouchers">
                                        </div>
                                        <div class="form-group col-md-4">
                                        <button class="form-control btn btn-primary" data-bs-toogle="modal" data-bs-target="#editEmailModal2">Personalize</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group-inline col form-data">
                                    <label for="inputHeeader">Preheader</label>
                                    <input type="text" class="form-control" id="inputHader" placeholder="Preheader" value="Message Title">
                                </div>
                                <div class="form-group-inline col form-data">
                                    <label for="inputFName">From Name</label>
                                    <input type="text" class="form-control" id="inputFName" placeholder="From Name" value="From Name">
                                </div>
                                <div class="form-group-inline col form-data">
                                    <div class="form-row row">
                                            <div class="form-group col-md-6">
                                                <label for="inputFAddress">From Address</label>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option>Open this select menu</option>
                                                    <option selected value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        
                                            <div class="form-group col-md-6">
                                                <label for="inputRTAddress">Reply-To-Address</label>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option>Open this select menu</option>
                                                    <option value="1">One</option>
                                                    <option selected value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="editBothSMS">Back</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="edit-both">
            <div class="modal fade" id="editBothSel" aria-hidden="true" aria-labelledby="editBothLabel" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editBothLabel">SMS and Email</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
    
                        <div class="modal-body">
                            <div class="d-grid gap-2 col-6 my-4 mx-auto">
                                <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#editBothSMS">SMS</button> <br>
                                <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#editBothEmail">Email</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="modal fade" id="editBothSMS" aria-hidden="true" aria-labelledby="editBothSMSlabel" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="editBothSMSlabel">Edit SMS</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Segment Name:</label>
                            <input type="text" class="form-control" id="recipient-name">
                            </div>
                            <div class="form-group">
                            <label for="message-text" class="col-form-label">Message:</label>
                            <textarea class="form-control" id="message-text"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button class="btn btn-primary" data-bs-target="#editBothSel" data-bs-toggle="modal">Next</button>
                    </div>
                </div>
                </div>
            </div>
    
            <div class="modal fade" id="editBothEmail" aria-hidden="true" aria-labelledby="editBothEmailLabel" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button class="btn" data-bs-toggle="modal" data-bs-target="editBothSel"><i class="fa fa-angle-left"></i></button>
                            <h5 class="modal-title" id="editBothEmailLabel">Edit Email</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="form-row">
                                <div class="form-group-inline col form-data">
                                    <div class="form-row row">
                                        <label for="inputName">Name</label>
                                        <div class="form-group col-md-8">
                                        <input type="tezt" class="form-control" id="inputName" placeholder="Name" value="Sale Campaign, Giving Vouchers">
                                        </div>
                                        <div class="form-group col-md-4">
                                        <button class="form-control btn btn-primary" data-bs-toogle="modal" data-bs-target="#editEmailModal2">Personalize</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group-inline col form-data">
                                    <label for="inputHeeader">Preheader</label>
                                    <input type="text" class="form-control" id="inputHader" placeholder="Preheader" value="Message Title">
                                </div>
                                <div class="form-group-inline col form-data">
                                    <label for="inputFName">From Name</label>
                                    <input type="text" class="form-control" id="inputFName" placeholder="From Name" value="From Name">
                                </div>
                                <div class="form-group-inline col form-data">
                                    <div class="form-row row">
                                            <div class="form-group col-md-6">
                                                <label for="inputFAddress">From Address</label>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option>Open this select menu</option>
                                                    <option selected value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        
                                            <div class="form-group col-md-6">
                                                <label for="inputRTAddress">Reply-To-Address</label>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option>Open this select menu</option>
                                                    <option value="1">One</option>
                                                    <option selected value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="editBothSMS">Back</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="delete-both">
            <div class="modal fade" id="deleteBoth" tabindex="-1" aria-labelledby="deleteBothLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Are you sure you want to delete?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
</div>

<div class="contact-list">

    <div class="view-list">
        <div class="modal fade" id="viewList" tabindex="-1" aria-labelledby="viewlistLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="viewlistLabel">View Contact</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-row">
                            <div class="form-group-inline col form-data">
                              <label for="inputName">Name</label>
                              <p type="text" class="form-control" id="inputName" placeholder="Name">Name</p>
                            </div>
                            <div class="form-group-inline col form-data">
                              <label for="inputEmail">Email</label>
                              <p type="email" class="form-control" id="inputEmail" placeholder="Email">Email</p>
                            </div>
                            <div class="form-group-inline col form-data">
                              <label for="inputNumber">Contact Number</label>
                              <p type="text" class="form-control" id="inputNumber" placeholder="Contact Number">Contact Number</p>
                            </div>
                          </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="edit-list">
        <div class="modal fade" id="editList" tabindex="-1" aria-labelledby="editListLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Contact</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-row">
                            <div class="form-group-inline col form-data">
                              <label for="inputName">Name</label>
                              <input type="text" class="form-control" id="inputName" placeholder="Name" value="Name">
                            </div>
                            <div class="form-group-inline col form-data">
                              <label for="inputEmail">Email</label>
                              <input type="email" class="form-control" id="inputEmail" placeholder="Email" value="Email">
                            </div>
                            <div class="form-group-inline col form-data">
                              <label for="inputNumber">Contact Number</label>
                              <input type="text" class="form-control" id="inputNumber" placeholder="Contact Number" value="Contact Number">
                            </div>
                          </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-link" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="delete-list">
        <div class="modal fade" id="deleteList" tabindex="-1" aria-labelledby="deleteLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    Are you sure you want to delete?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="contact-group">
    <div class="view-group">
        <div class="modal fade" id="viewGroup" tabindex="-1" aria-labelledby="viewGroupLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="viewGroupLabel">View Group</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-row">
                            <div class="form-group-inline col form-data">
                              <label for="inputName">Name</label>
                              <p type="text" class="form-control" id="inputName" placeholder="Name">Name</p>
                            </div>
                            <div class="form-group-inline col form-data">
                              <label for="inputMember">Number of Member</label>
                              <p type="text" class="form-control" id="inputMember" placeholder="Number of Member">***</p>
                            </div>
                            <div class="form-group-inline col form-data">
                                <select class="form-select" aria-label="Default select example" disabled>
                                    <option>Select status</option>
                                    <option selected value="1">Active</option>
                                    <option value="2">Unactive</option>
                                  </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="edit-group">
        <div class="modal fade" id="editGroup" tabindex="-1" aria-labelledby="editGroupLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editGroupLabel">Edit Group</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-row">
                            <div class="form-group-inline col form-data">
                              <label for="inputName">Name</label>
                              <input type="text" class="form-control" id="inputName" placeholder="Name" value="Name">
                            </div>
                            <div class="form-group-inline col form-data">
                              <label for="inputMember">Number of Member</label>
                              <p id="inputMember">***</p>
                            </div>
                            <div class="form-group-inline col form-data">
                                <label for="groupStatus">Status</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option>Select status</option>
                                    <option selected class="bg-primary" value="1">Active</option>
                                    <option value="2" class="bg-danger">Unactive</option>
                                </select>
                                  <a class="mt-2 pull-right" href="/contacts/groups/editgroup">More Options</a>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="delete-list">
        <div class="modal fade" id="deleteGroup" tabindex="-1" aria-labelledby="deleteGroupLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to delete?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="add-group">
    <div class="addGMem">
        <div class="modal fade" id="addGMember" tabindex="-1" aria-labelledby="addGMemberLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addGMemberLabel">Add Group Member</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <table id="dtBasicExample" class="table table-striped table-xs mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    </th>
                                    <th scope="col">Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input class="form-check-input px-2" type="checkbox" value="" id="flexCheckDefault"></td>
                                    <td>Apple Disousa</td>
                                </tr>
                                
                                <tr>
                                    <td><input class="form-check-input px-2" type="checkbox" value="" id="flexCheckDefault"></td>
                                    <td>Johnson Smith</td>
                                </tr>
                                <tr>
                                    <td><input class="form-check-input px-2" type="checkbox" value="" id="flexCheckDefault"></td>
                                    <td>Nathon Lyon</td>
                                </tr>
                            </tbody>
                            <div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body" id="mediumBody">
                                            <div>
                                                <!-- the result to be displayed apply here -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Add</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="addGOMember">
        <div class="modal fade" id="addGOMember" tabindex="-1" aria-labelledby="addGOMemberLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addGOMemberLabel">Add from other Group</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <table id="conGroup" class="table table-striped table-xs mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    </th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Member</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input class="form-check-input px-2" type="checkbox" value="" id="flexCheckDefault"></td>
                                    <td>Samantha Incorporated</td>
                                    <td>143</td>
                                </tr>    
                                
                                <tr>
                                    <td><input class="form-check-input px-2" type="checkbox" value="" id="flexCheckDefault"></td>
                                    <td>Johnson Incorporated</td>
                                    <td>274</td>
                                </tr>
                                <tr>
                                    <td><input class="form-check-input px-2" type="checkbox" value="" id="flexCheckDefault"></td>
                                    <td>Peace Incorporated </td>
                                    <td>126</td>
                                </tr>
                                
                                <tr>
                                    <td><input class="form-check-input px-2" type="checkbox" value="" id="flexCheckDefault"></td>
                                    <td>Simply Corporation</td>
                                    <td>96</td>
                                </tr>
                                <tr>
                                    <td><input class="form-check-input px-2" type="checkbox" value="" id="flexCheckDefault"></td>
                                    <td>Sample Corporation </td>
                                    <td>118</td>
                                </tr>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<div class="template">
    <div class="view-list">
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="edit-list">
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="delete-list">
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


