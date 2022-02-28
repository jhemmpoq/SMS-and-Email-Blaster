<div class="container">
    @yield('content')
</div>

<div class="campaign">
    <div class="sms">
        {{-- VIEW MODAL --}}
        <div class="modal fade" id="viewSMSCampaign" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">View Segment</h5>
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
                <button type="button" class="btn btn-link" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger">Delete</button>
                </div>
            </div>
            </div>
        </div>
        {{-- END DELETE MODAL --}}
    </div>

    <div class="email">
        {{-- VIEW MODAL --}}
        <div class="modal fade" id="viewEmailCampaign" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">View Segment</h5>
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
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                
                                    <div class="form-group col-md-6">
                                        <label for="inputRTAddress">Reply-To-Address</label>
                                        <select class="form-select" aria-label="Default select example">
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
        <div class="modal fade" id="editEmailCampaign" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Segment</h5>
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
                <button type="button" class="btn btn-link" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger">Delete</button>
                </div>
            </div>
            </div>
        </div>
        {{-- END DELETE MODAL --}}
    </div>


    <div class="both">

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
                        <button type="button" class="btn btn-primary">Save changes</button>
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
                    Are you sure yo want to delete?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-link" data-bs-dismiss="modal">Close</button>
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
                        <button type="button" class="btn btn-primary">Save changes</button>
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
                        <h5 class="modal-title" id="editGroupLabel">Modal title</h5>
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
                              <input type="text" class="form-control" id="inputMember" placeholder="Number of Member" value="***">
                            </div>
                            <div class="form-group-inline col form-data">
                                <select class="form-select" aria-label="Default select example">
                                    <option>Select status</option>
                                    <option selected class="bg-primary" value="1">Active</option>
                                    <option value="2" class="bg-danger">Unactive</option>
                                  </select>
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


