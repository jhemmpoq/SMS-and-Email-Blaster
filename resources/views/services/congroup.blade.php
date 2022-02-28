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
  <div class="container">
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
              <li><button type="button" href="/registers" class="btn btn-outline-primary">Sign Up</button></li>
              <li><button type="button" href="/logins" class="btn btn-primary">Login</button></li>
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
</div>
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
                        <a href="/services" class="nav-link align-middle px-0">
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
                <h3 class="head-page-title">Group Contacts</h3>
                    <ul class="list-unstyled">
                    {{-- <div class="card border-primary"> --}}

                      <div class="container-fluid mt-100">
                        <div class="row">
                            <div class="col-lg-12 main-datatable">
                                <div class="card">
                                    <div class="card-body">
                                        
                                      <div class="row d-flex">
                                        <div class="col-lg-4 search">
                                          <input class="form-control" id="myInput" onkeyup="myFunction()" type="text" placeholder="Search..">
                                        </div>
                                        <div class="col-lg-8 createNew">
                                          <a class="btn btn-primary btn-create" href="/contacts/groups/addgroup" role="button"><i class="bi bi-plus-circle"></i>  Create New</a> <br>
                                        </div> <br>
                                      </div> 
                                      <div class="active-member">
                                            <div class="table-responsive">
                                                <table id="conGroup" class="table table-striped table-xs mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">
                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                            </th>
                                                            <th scope="col">Name</th>
                                                            <th scope="col">Member</th>
                                                            <th scope="col">Status</th>
                                                            <th scope="col">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><input class="form-check-input px-2" type="checkbox" value="" id="flexCheckDefault"></td>
                                                            <td>Samantha Incorporated</td>
                                                            <td>143</td>
                                                            <td> <span class="badge bg-primary">Active</span></td>
                                                            <td>
                                                                <div class="btn-group">
                                                                    <a href="" class="dropdown-toogle dropdown-icon" data-bs-toggle="dropdown">
                                                                        <i class="fa fa-pencil-square-o"></i>
                                                                    </a>
                                                                    <ul class="dropdown-menu">
                                                                        <li>
                                                                            <a href="#" target="_blank">
                                                                                Dummy Details
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" target="_blank">
                                                                                Dummy Details
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" target="_blank">
                                                                                Dummy Details
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <span class="actionCust">
                                                                    <a href="#">
                                                                        <i class="fa fa-line-chart"></i>
                                                                    </a>
                                                                </span>
                                                                <div class="btn-group">
                                                                    <a class="dropdown-toogle dropdown-icon" data-bs-toggle="dropdown">
                                                                        <i class="fa fa-ellipsis-h"></i>
                                                                    </a>
                                                                    <ul class="dropdown-menu dropdown-more">
                                                                        <li>
                                                                            <a href="#" target="_blank">
                                                                                <i class="fa fa-clone"></i>Duplicate
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" target="_blank">
                                                                                <i class="fa fa-trash"></i>Delete
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" target="_blank">
                                                                                <i class="fa fa-list"></i>Activity
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>

                                                            </td>
                                                        </tr>    
                                                        
                                                        <tr>
                                                            <td><input class="form-check-input px-2" type="checkbox" value="" id="flexCheckDefault"></td>
                                                            <td>Johnson Incorporated</td>
                                                            <td>274</td>
                                                            <td> <span class="badge bg-primary">Active</span> </td>
                                                            <td>
                                                                <span class="actionButton">
                                                                    <a href="#">
                                                                        <i class="bi bi-eye-fill"></i>
                                                                    </a>
                                                                    <a href="#" class="px-3">
                                                                        <i class="bi bi-pencil-fill"></i>
                                                                    </a>
                                                                    <a href="#">
                                                                        <i class="bi bi-trash-fill"></i>
                                                                    </a>
                                                                </span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><input class="form-check-input px-2" type="checkbox" value="" id="flexCheckDefault"></td>
                                                            <td>Peace Incorporated </td>
                                                            <td>126</td>
                                                            <td> <span class="badge bg-danger">Unactive</span></td>
                                                            <td>
                                                                <span class="actionButton">
                                                                    <a href="#">
                                                                        <i class="bi bi-eye-fill"></i>
                                                                    </a>
                                                                    <a href="#" class="px-3">
                                                                        <i class="bi bi-pencil-fill"></i>
                                                                    </a>
                                                                    <a href="#">
                                                                        <i class="bi bi-trash-fill"></i>
                                                                    </a>
                                                                </span>
                                                            </td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td><input class="form-check-input px-2" type="checkbox" value="" id="flexCheckDefault"></td>
                                                            <td>Simply Corporation</td>
                                                            <td>96</td>
                                                            <td><span class="badge bg-primary">Active</span></td>
                                                            <td>
                                                                <span class="actionButton">
                                                                    <a href="#">
                                                                        <i class="bi bi-eye-fill"></i>
                                                                    </a>
                                                                    <a href="#" class="px-3">
                                                                        <i class="bi bi-pencil-fill"></i>
                                                                    </a>
                                                                    <a href="#">
                                                                        <i class="bi bi-trash-fill"></i>
                                                                    </a>
                                                                </span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><input class="form-check-input px-2" type="checkbox" value="" id="flexCheckDefault"></td>
                                                            <td>Sample Corporation </td>
                                                            <td>118</td>
                                                            <td> <span class="badge bg-primary">Active</span> </td>
                                                            <td>
                                                                <span class="actionButton">
                                                                    <a href="#">
                                                                        <i class="bi bi-eye-fill"></i>
                                                                    </a>
                                                                    <a href="#" class="px-3">
                                                                        <i class="bi bi-pencil-fill"></i>
                                                                    </a>
                                                                    <a href="#">
                                                                        <i class="bi bi-trash-fill"></i>
                                                                    </a>
                                                                </span>
                                                            </td>
                                                        </tr>
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
                    {{-- </div> --}}
                </ul>
            </div>
        
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

{{-- 
<script>
    function myFunction() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
            }       
        }
        }
</script> --}}
  
  
  
 
  @extends('layouts.footer')
  
  @section('content')

  @endsection

</body>
</html>