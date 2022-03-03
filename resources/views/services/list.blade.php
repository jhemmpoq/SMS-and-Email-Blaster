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
  {{-- <div class="head">
    <img class="image" alt="" srcset="">
    <h2 class="title">SMS &amp; Email Blaster</h2>
    <h4 class="sub-title">"Make your work Easier"</h4>
  </div> --}}

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
          
            <div class="col py-3">
                <h3 class="head-page-title">Contact List</h3>
                    <ul class="list-unstyled">
                      <div class="container-fluid mt-100">
                        <div class="row">
                            
                                <nav aria-label="breadcrumb pull-right">
                                    <ol class="breadcrumb">
                                      <li class="breadcrumb-item"><a href="/services">Services</a></li>
                                      <li class="breadcrumb-item"><a href="/services">Contacts</a></li>
                                      <li class="breadcrumb-item active" aria-current="page">List</li>
                                    </ol>
                                  </nav>
                            
                            <div class="col-lg-12">
                                
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row d-flex tablehead">
                                            <div class="col-lg-4 search">
                                              <input class="form-control" id="myInput" onkeyup="myFunction()" type="text" placeholder="Search..">
                                            </div>
                                            <div class="col-lg-8 createNew">
                                              <a class="btn btn-primary btn-create" href="/contacts/list/addlist" role="button"><i class="bi bi-plus-circle"></i>  Create New</a> <br>
                                            </div> <br>
                                        </div> 
                                      
                                      <div class="active-member">
                                            <div class="table-responsive">
                                                <table id="dtBasicExample" class="table table-striped table-xs mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">
                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                            </th>
                                                            <th scope="col">Name</th>
                                                            <th scope="col">Email</th>
                                                            <th scope="col">Contact No.</th>
                                                            <th scope="col">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><input class="form-check-input px-2" type="checkbox" value="" id="flexCheckDefault"></td>
                                                            <td>Apple Disousa</td>
                                                            <td>name@mail.com</td>
                                                            <td> +639 12 3456 789</td>
                                                            <td>
                                                                <span class="actionButton">
                                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#viewList">
                                                                        <i class="bi bi-eye-fill"></i>
                                                                    </a>
                                                                    <a href="#" class="px-3" data-bs-toggle="modal" data-bs-target="#editList">
                                                                        <i class="bi bi-pencil-fill"></i>
                                                                    </a>
                                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#deleteList">
                                                                        <i class="bi bi-trash-fill"></i>
                                                                    </a>
                                                                  </span>
                                                            
                                                            </td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td><input class="form-check-input px-2" type="checkbox" value="" id="flexCheckDefault"></td>
                                                            <td>Johnson Smith</td>
                                                            <td>name@mail.com</td>
                                                            <td>+639 12 3456 789</td>
                                                            <td>
                                                                <span class="actionButton">
                                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#viewList">
                                                                        <i class="bi bi-eye-fill"></i>
                                                                    </a>
                                                                    <a href="#" class="px-3" data-bs-toggle="modal" data-bs-target="#editList">
                                                                        <i class="bi bi-pencil-fill"></i>
                                                                    </a>
                                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#deleteList">
                                                                        <i class="bi bi-trash-fill"></i>
                                                                    </a>
                                                                  </span>

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><input class="form-check-input px-2" type="checkbox" value="" id="flexCheckDefault"></td>
                                                            <td>Nathon Lyon</td>
                                                            <td>name@mail.com</td>
                                                            <td> +639 12 3456 789</td>
                                                            <td>
                                                                <span class="actionButton">
                                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#viewList">
                                                                        <i class="bi bi-eye-fill"></i>
                                                                    </a>
                                                                    <a href="#" class="px-3" data-bs-toggle="modal" data-bs-target="#editList">
                                                                        <i class="bi bi-pencil-fill"></i>
                                                                    </a>
                                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#deleteList">
                                                                        <i class="bi bi-trash-fill"></i>
                                                                    </a>
                                                                  </span>

                                                            </td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td><input class="form-check-input px-2" type="checkbox" value="" id="flexCheckDefault"></td>
                                                            <td>Simply Clever</td>
                                                            <td>name@mail.com</td>
                                                            <td> +639 12 3456 789</td>
                                                            <td>
                                                                <span class="actionButton">
                                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#viewList">
                                                                        <i class="bi bi-eye-fill"></i>
                                                                    </a>
                                                                    <a href="#" class="px-3" data-bs-toggle="modal" data-bs-target="#editList">
                                                                        <i class="bi bi-pencil-fill"></i>
                                                                    </a>
                                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#deleteList">
                                                                        <i class="bi bi-trash-fill"></i>
                                                                    </a>
                                                                  </span>

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><input class="form-check-input px-2" type="checkbox" value="" id="flexCheckDefault"></td>
                                                            <td>Dorn Sumaiya</td>
                                                            <td>name@mail.com</td>
                                                            <td> +639 12 3456 789</td>
                                                            <td>
                                                                <span class="actionButton">
                                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#viewList">
                                                                        <i class="bi bi-eye-fill"></i>
                                                                    </a>
                                                                    <a href="#" class="px-3" data-bs-toggle="modal" data-bs-target="#editList">
                                                                        <i class="bi bi-pencil-fill"></i>
                                                                    </a>
                                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#deleteList">
                                                                        <i class="bi bi-trash-fill"></i>
                                                                    </a>
                                                                  </span>

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                          <td><input class="form-check-input px-2" type="checkbox" value="" id="flexCheckDefault"></td>
                                                          <td>Samanth Disousa</td>
                                                          <td>name@mail.com</td>
                                                          <td> +639 12 3456 789</td>
                                                          <td>
                                                            <span class="actionButton">
                                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#viewList">
                                                                        <i class="bi bi-eye-fill"></i>
                                                                    </a>
                                                                    <a href="#" class="px-3" data-bs-toggle="modal" data-bs-target="#editList">
                                                                        <i class="bi bi-pencil-fill"></i>
                                                                    </a>
                                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#deleteList">
                                                                        <i class="bi bi-trash-fill"></i>
                                                                    </a>
                                                                  </span>

                                                        </td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td><input class="form-check-input px-2" type="checkbox" value="" id="flexCheckDefault"></td>
                                                            <td>Johnson Smith</td>
                                                            <td>name@mail.com</td>
                                                            <td> +639 12 3456 789</td>
                                                            <td>
                                                                <span class="actionButton">
                                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#viewList">
                                                                        <i class="bi bi-eye-fill"></i>
                                                                    </a>
                                                                    <a href="#" class="px-3" data-bs-toggle="modal" data-bs-target="#editList">
                                                                        <i class="bi bi-pencil-fill"></i>
                                                                    </a>
                                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#deleteList">
                                                                        <i class="bi bi-trash-fill"></i>
                                                                    </a>
                                                                  </span>

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><input class="form-check-input px-2" type="checkbox" value="" id="flexCheckDefault"></td>
                                                            <td>Nathon Lyon</td>
                                                            <td>name@mail.com</td>
                                                            <td> +639 12 3456 789</td>
                                                            <td>
                                                                <span class="actionButton">
                                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#viewList">
                                                                        <i class="bi bi-eye-fill"></i>
                                                                    </a>
                                                                    <a href="#" class="px-3" data-bs-toggle="modal" data-bs-target="#editList">
                                                                        <i class="bi bi-pencil-fill"></i>
                                                                    </a>
                                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#deleteList">
                                                                        <i class="bi bi-trash-fill"></i>
                                                                    </a>
                                                                  </span>

                                                            </td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td><input class="form-check-input px-2" type="checkbox" value="" id="flexCheckDefault"></td>
                                                            <td>Simply Clever</td>
                                                            <td>name@mail.com</td>
                                                            <td> +639 12 3456 789</td>
                                                            <td>
                                                                <span class="actionButton">
                                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#viewList">
                                                                        <i class="bi bi-eye-fill"></i>
                                                                    </a>
                                                                    <a href="#" class="px-3" data-bs-toggle="modal" data-bs-target="#editList">
                                                                        <i class="bi bi-pencil-fill"></i>
                                                                    </a>
                                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#deleteList">
                                                                        <i class="bi bi-trash-fill"></i>
                                                                    </a>
                                                                  </span>

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><input class="form-check-input px-2" type="checkbox" value="" id="flexCheckDefault"></td>
                                                            <td>Dorn Sumaiya</td>
                                                            <td>name@mail.com</td>
                                                            <td> +639 12 3456 789</td>
                                                            <td>
                                                                <span class="actionButton">
                                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#viewList">
                                                                        <i class="bi bi-eye-fill"></i>
                                                                    </a>
                                                                    <a href="#" class="px-3" data-bs-toggle="modal" data-bs-target="#editList">
                                                                        <i class="bi bi-pencil-fill"></i>
                                                                    </a>
                                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#deleteList">
                                                                        <i class="bi bi-trash-fill"></i>
                                                                    </a>
                                                                  </span>

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                          <td><input class="form-check-input px-2" type="checkbox" value="" id="flexCheckDefault"></td>
                                                          <td>Samanth Disousa</td>
                                                          <td>name@mail.com</td>
                                                          <td> +639 12 3456 789</td>
                                                          <td>
                                                            <span class="actionButton">
                                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#viewList">
                                                                        <i class="bi bi-eye-fill"></i>
                                                                    </a>
                                                                    <a href="#" class="px-3" data-bs-toggle="modal" data-bs-target="#editList">
                                                                        <i class="bi bi-pencil-fill"></i>
                                                                    </a>
                                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#deleteList">
                                                                        <i class="bi bi-trash-fill"></i>
                                                                    </a>
                                                                  </span>

                                                        </td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td><input class="form-check-input px-2" type="checkbox" value="" id="flexCheckDefault"></td>
                                                            <td>Johnson Smith</td>
                                                            <td>name@mail.com</td>
                                                            <td> +639 12 3456 789</td>
                                                            <td>
                                                                <span class="actionButton">
                                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#viewList">
                                                                        <i class="bi bi-eye-fill"></i>
                                                                    </a>
                                                                    <a href="#" class="px-3" data-bs-toggle="modal" data-bs-target="#editList">
                                                                        <i class="bi bi-pencil-fill"></i>
                                                                    </a>
                                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#deleteList">
                                                                        <i class="bi bi-trash-fill"></i>
                                                                    </a>
                                                                  </span>

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><input class="form-check-input px-2" type="checkbox" value="" id="flexCheckDefault"></td>
                                                            <td>Nathon Lyon</td>
                                                            <td>name@mail.com</td>
                                                            <td> +639 12 3456 789</td>
                                                            <td>
                                                                <span class="actionButton">
                                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#viewList">
                                                                        <i class="bi bi-eye-fill"></i>
                                                                    </a>
                                                                    <a href="#" class="px-3" data-bs-toggle="modal" data-bs-target="#editList">
                                                                        <i class="bi bi-pencil-fill"></i>
                                                                    </a>
                                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#deleteList">
                                                                        <i class="bi bi-trash-fill"></i>
                                                                    </a>
                                                                  </span>

                                                            </td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td><input class="form-check-input px-2" type="checkbox" value="" id="flexCheckDefault"></td>
                                                            <td>Simply Clever</td>
                                                            <td>name@mail.com</td>
                                                            <td> +639 12 3456 789</td>
                                                            <td>
                                                                <span class="actionButton">
                                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#viewList">
                                                                        <i class="bi bi-eye-fill"></i>
                                                                    </a>
                                                                    <a href="#" class="px-3" data-bs-toggle="modal" data-bs-target="#editList">
                                                                        <i class="bi bi-pencil-fill"></i>
                                                                    </a>
                                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#deleteList">
                                                                        <i class="bi bi-trash-fill"></i>
                                                                    </a>
                                                                  </span>

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><input class="form-check-input px-2" type="checkbox" value="" id="flexCheckDefault"></td>
                                                            <td>Dorn Sumaiya</td>
                                                            <td>name@mail.com</td>
                                                            <td> +639 12 3456 789</td>
                                                            <td>
                                                                <span class="actionButton">
                                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#viewList">
                                                                        <i class="bi bi-eye-fill"></i>
                                                                    </a>
                                                                    <a href="#" class="px-3" data-bs-toggle="modal" data-bs-target="#editList">
                                                                        <i class="bi bi-pencil-fill"></i>
                                                                    </a>
                                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#deleteList">
                                                                        <i class="bi bi-trash-fill"></i>
                                                                    </a>
                                                                  </span>

                                                            </td>
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
                                                <nav aria-label="...">
                                                    <ul class="pagination">
                                                      <li class="page-item disabled">
                                                        <span class="page-link">Previous</span>
                                                      </li>
                                                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                      <li class="page-item active">
                                                        <span class="page-link">
                                                          2
                                                          <span class="sr-only">(current)</span>
                                                        </span>
                                                      </li>
                                                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                      <li class="page-item">
                                                        <a class="page-link" href="#">Next</a>
                                                      </li>
                                                    </ul>
                                                  </nav>
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

            <!-- Modal -->
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