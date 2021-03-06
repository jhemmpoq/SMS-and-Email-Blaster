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
    {{-- <div>
        @yield('content')
    </div> --}}
    <!-- Bootstrap core CSS -->
    {{-- <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">


    <!-- Additional CSS Files -->
    {{-- <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-digimedia-v1.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css"> --}}
    <link rel="stylesheet" href="{{ asset('css/dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/templatemo-digimedia-v1.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animated.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.css') }}">
<!--

TemplateMo 568 DigiMedia

https://templatemo.com/tm-568-digimedia

-->
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
    <!-- Sidebar-->
    {{-- <div class="border-end nav-bar" id="sidebar-wrapper">
        <div class="sidebar-heading border-bottom nav-bar">Menu</div>
        <div class="list-group list-group-flush nav-bar">
            <a class="list-group-item list-group-item-action list-group-item-primary p-3 nav-bar" href="/">Home</a>
            <a class="list-group-item list-group-item-action list-group-item-primary p-3 nav-bar" href="/segment">Segments</a>
            <a class="list-group-item list-group-item-action list-group-item-primary p-3 nav-bar" href="/campaigns">Campaigns</a>
            
        </div>
    </div> --}}
    <div class="container-fluid">     
      <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">Menu</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="/services" class="nav-link align-middle px-0" >
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Contacts</span> </a>
                        <ul class="collapse show nav flex-column ms-4" id="submenu1" data-bs-parent="#menu">
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
          
            <div class="col">
                <p class="head-page-title">Add SMS and Email Campaign</p>
                    <ul class="list-unstyled">
                      <div class="container-fluid mt-100">
                        <div class="row">
                            <div class="col d-flex justify-content-center">
                                <div class="card col-lg-10">
                                    <div class="card-body">
                                            <h3 class="col-lg-12">Add SMS Campaign</h3>
                                            <div class="form-row">
                                              <div class="form-group-inline col form-data">
                                                <label for="inputName">Name</label>
                                                <input type="text" class="form-control" id="inputName" placeholder="Name">
                                              </div>
                                              <div class="form-group-inline col form-data">
                                                <label for="inputEmail">Email</label>
                                                <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                                              </div>
                                              <div class="form-group-inline col form-data">
                                                <label for="inputNumber">Contact Number</label>
                                                <input type="text" class="form-control" id="inputNumber" placeholder="Contact Number">
                                              </div>
                                            </div>
                                            <br><hr class="hr"><br>

                                            <h3 class="col-lg-12">Add Email Campaign</h3>
                                            <div class="form-row">
                                              <div class="form-group-inline col form-data">
                                                  <div class="form-row row">
                                                      <label for="inputName">Name</label>
                                                      <div class="form-group col-md-10">
                                                      <input type="tezt" class="form-control" id="inputName" placeholder="Name">
                                                      </div>
                                                      <div class="form-group col-md-2">
                                                      <a class="form-control btn btn-success">Personalize</a>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="form-group-inline col form-data">
                                                  <label for="inputHeeader">Preheader</label>
                                                  <input type="text" class="form-control" id="inputHader" placeholder="Preheader">
                                              </div>
                                              <div class="form-group-inline col form-data">
                                                  <label for="inputName">From Name</label>
                                                  <input type="text" class="form-control" id="inputName" placeholder="Name">
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
                                            
                                            <div class="add-button">
                                                <a href="/campaign" class="btn btn-link" >Cancel</a>
                                                <a href="/campaign" class="btn btn-primary" >Create</a>
                                             
                                            </div>
                                         
                                    </div>
                            </div>
                        </div>
                    </div>
                    {{-- </div> --}}
                </ul>
            </div>

            <!-- Modal -->
      </div>
  </div>

  
    
  <!-- Page content wrapper-->
    
</div>


{{-- <script type="text/javascript">
  $(document).ready(function () {
  $('#dtBasicExample').DataTable();
  $('.dataTables_length').addClass('bs-select');
});

</script> --}}

  
  
 
  @extends('layouts.footer')
  
  @section('content')

  @endsection

</body>
</html>