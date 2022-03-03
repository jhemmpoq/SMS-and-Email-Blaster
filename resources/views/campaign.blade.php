{{-- @extends('layouts.head')
@section('content')

@endsection --}}

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>SMS and Email Blaster</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/templatemo-digimedia-v1.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animated.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.css') }}">
    <script src="{{asset('js/app.js') }}"></script>


  </head>

  <body>
  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.html" class="logo">
                <img src="{{ asset('images/logo-v1.png') }}" alt="" />
              {{-- <img src="assets/images/logo-v1.png" alt=""> --}}
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="/">Home</a></li>
              <li class="scroll-to-section"><a href="/services" class="active">Services</a></li>
              <li class="scroll-to-section"><a href="/pricing">Pricing</a></li>
              <li class="scroll-to-section"><a href="#about">About</a></li>
              <li><button type="button" class="btn btn-outline-primary">Sign Up</button></li>
              <li><button type="button" class="btn btn-primary">Login</button></li>
            </ul>
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->
  <div class="head">
    <img class="image" alt="" srcset="">
    <h2 class="title">SMS &amp; Email Blaster</h2>
    <h4 class="sub-title">"Make your work Easier"</h4>
  </div>

  <div class="d-flex" id="wrapper">
    <div class="container-fluid">
      <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
          <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
              <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                  <span class="fs-5 d-none d-sm-inline">Menu</span>
              </a>
              <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                  <li class="nav-item">
                      <a href="/services" class="nav-link align-middle px-0">
                          <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                      </a>
                  </li>
                  <li>
                      <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                          <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Contacts</span> </a>
                      <ul class="collapse nav flex-column ms-4" id="submenu1" data-bs-parent="#menu">
                          <li class="w-100">
                              <a href="/contact/list" class="nav-link px-0"><i class="bi bi-list-ul"></i> <span class="d-none d-sm-inline">List</span></a>
                          </li>
                          <li>
                              <a href="/contact/group" class="nav-link px-0"><i class="bi bi-people"></i> <span class="d-none d-sm-inline">Groups</span></a>
                          </li>
                      </ul>
                  </li>
                  <li>
                      <a href="/segment" class="nav-link px-0 align-middle">
                          <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Segments</span></a>
                  </li>
                  <li>
                      <a href="/campaign" class="nav-link px-0 align-middle">
                          <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline">Campaigns</span></a>
                  </li>
              </ul>
              <hr>
          </div>
      </div>

          <div class="col py-3">
            <h3 class="head-page-title">Campaigns</h3>
                <ul class="list-unstyled">
                  <div class="container-fluid mt-100">
                    <div class="row">
                      <nav aria-label="breadcrumb pull-right">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="/services">Services</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Campaign</li>
                        </ol>
                      </nav>
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="container">
                                  <div class="row">
                                    <div class="col-12 col-sm-8 col-md-6 col-lg-12">
                                      <div class="card border-dark">
                                        <div class="card-header">
                                          <ul class="nav nav-pills card-header-pills" id="campaign-list">
                                            <li class="nav-item px-3">
                                              <a class="nav-link px-5 active" href="#sms" role="tab" aria-controls="description" aria-selected="true">SMS</a>
                                            </li>
                                            <li class="nav-item px-3">
                                              <a class="nav-link px-5"  href="#email" role="tab" aria-controls="history" aria-selected="false">Email</a>
                                            </li>
                                            <li class="nav-item px-3">
                                              <a class="nav-link px-5" href="#smsandemail" role="tab" aria-controls="deals" aria-selected="false">SMS & Email</a>
                                            </li>
                                          </ul>
                                        </div>

                                        <div class="card-body">

                                           <div class="tab-content mt-3">
                                            <div class="tab-pane active" id="sms" role="tabpanel">
                                              <div class="row d-flex tablehead">
                                                <div class="col-lg-4 search">
                                                  <input class="form-control" id="myInput" onkeyup="myFunction()" type="text" placeholder="Search..">
                                                </div>
                                                <div class="col-lg-8 createNew">
                                                  <a class="btn btn-primary btn-create" href="/campaign/new/addsms" role="button"><i class="bi bi-plus-circle"></i>  Create New</a> <br>
                                                </div> <br>
                                            </div>
                                            <table id="dtBasicExample" class="table table-striped table-xs mb-0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Segment Name</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                      <td>Sale Campaign, Giving Vouchers</td>
                                                      <td>
                                                        <span class="actionButton">
                                                          <a href="#" data-bs-toggle="modal" data-bs-target="#viewSMSCampaign">
                                                              <i class="bi bi-eye-fill"></i>
                                                          </a>
                                                          <a href="#" class="px-3" data-bs-toggle="modal" data-bs-target="#editSMSCampaign">
                                                              <i class="bi bi-pencil-fill"></i>
                                                          </a>
                                                          <a href="#" data-bs-toggle="modal" data-bs-target="#deleteSMSCampaign">
                                                              <i class="bi bi-trash-fill"></i>
                                                          </a>
                                                        </span>
                                                      </td>
                                                  </tr>
                                                </tbody>
                                            </table>
                                            </div>

                                            <div class="tab-pane" id="email" role="tabpanel" aria-labelledby="email-tab">
                                              <div class="row d-flex tablehead">
                                                <div class="col-lg-4 search">
                                                  <input class="form-control" id="myInput" onkeyup="myFunction()" type="text" placeholder="Search..">
                                                </div>
                                                <div class="col-lg-8 createNew">
                                                  <a class="btn btn-primary btn-create" href="/campaign/new/addemail" role="button"><i class="bi bi-plus-circle"></i>  Create New</a> <br>
                                                </div> <br>
                                            </div>
                                              <table id="dtBasicExample" class="table table-striped table-xs mb-0">
                                                  <thead>
                                                    <tr>
                                                        <th scope="col">Segment Name</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                  </thead>
                                                <tbody>
                                                  <tr>
                                                      <td>Sale Campaign, Giving Vouchers</td>
                                                      <td>
                                                        <span class="actionButton">
                                                          <a href="#" data-bs-toggle="modal" data-bs-target="#viewEmailCampaign">
                                                              <i class="bi bi-eye-fill"></i>
                                                          </a>
                                                          <a href="#" class="px-3" data-bs-toggle="modal" data-bs-target="#editEmailCampaign">
                                                              <i class="bi bi-pencil-fill"></i>
                                                          </a>
                                                          <a href="#" data-bs-toggle="modal" data-bs-target="#deleteEmailCampaign">
                                                              <i class="bi bi-trash-fill"></i>
                                                          </a>
                                                        </span>
                                                      </td>
                                                  </tr>



                                                </tbody>
                                              </table>
                                            </div>

                                            <div class="tab-pane" id="smsandemail" role="tabpanel" aria-labelledby="smsandemail-tab">
                                              <div class="row d-flex tablehead">
                                                <div class="col-lg-4 search">
                                                  <input class="form-control" id="myInput" onkeyup="myFunction()" type="text" placeholder="Search..">
                                                </div>
                                                <div class="col-lg-8 createNew">
                                                  <a class="btn btn-primary btn-create" href="/campaign/new/addboth" role="button"><i class="bi bi-plus-circle"></i>  Create New</a> <br>
                                                </div> <br>
                                            </div>
                                              <table id="dtBasicExample" class="table table-striped table-xs mb-0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Segment Name</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <td>Engaged User from Manila</td>
                                                    <td>
                                                      <span class="actionButton">
                                                          <a href="#" data-bs-toggle="modal" data-bs-target="#viewBoth">
                                                              <i class="bi bi-eye-fill"></i>
                                                          </a>
                                                          <a href="#" class="px-3" data-bs-toggle="modal" data-bs-target="#editBothSel">
                                                              <i class="bi bi-pencil-fill"></i>
                                                          </a>
                                                          <a href="#" data-bs-toggle="modal" data-bs-target="#deleteBoth">
                                                              <i class="bi bi-trash-fill"></i>
                                                          </a>
                                                        </span>
                                                    </td>
                                                  </tr>


                                                </tbody>
                                            </table>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                {{-- </div> --}}
            </ul>
        </div>

      </div>
  </div>



  <!-- Page content wrapper-->

</div>
@extends('modal')
@section('content')
  
@endsection


  @extends('layouts.footer')

  @section('content')

  @endsection

</body>
</html>