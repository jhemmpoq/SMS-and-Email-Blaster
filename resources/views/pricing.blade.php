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
    <link rel="stylesheet" href="https://cdn.lineicons.com/3.0/lineicons.css"> 



    <!-- Additional CSS Files -->
    {{-- <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-digimedia-v1.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css"> --}}

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
              <li class="scroll-to-section"><a href="/services">Services</a></li>
              <li class="scroll-to-section"><a href="/pricing" class="active">Pricing</a></li>
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

  {{-- <div class="maintitle">
    <h2 class="text-center">Pricing</h2>
    <p class="submain">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tempor commodo ipsum, ut imperdiet velit tincidunt vitae. Ut semper sem.</p>
  </div> --}}

  {{-- <div class="row" style="margin: 10vh 5vh;">
    <div class="col-md-4">
      <div class="card text-center bg-primary bg-opacity-10">
        <div class="card-header">Basic</div>
        <div class="card-body">
          <h5 class="card-title">$10 Monthly</h5>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer mattis.</p> <br>
            <p class="card-text">✔ Text</p>
            <p class="card-text">✔ Text</p> <br>
            <p class="card-text"><b class="b-text">Text:</b> text</p>
            <p class="card-text"><b class="b-text">Text:</b> text</p>
            <p class="card-text"><b class="b-text">Text:</b> text</p> <br>
          <a href="#" class="btn btn-primary">Buy Now</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
        <div class="card text-center bg-info bg-opacity-10">
            <div class="card-header">Standard</div>
            <div class="card-body">
              <h5 class="card-title">$25 Monthly</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer mattis.</p> <br>
                <p class="card-text">✔ Text</p>
                <p class="card-text">✔ Text</p> <br>
                <p class="card-text"><b class="b-text">Text:</b> text</p>
                <p class="card-text"><b class="b-text">Text:</b> text</p>
                <p class="card-text"><b class="b-text">Text:</b> text</p> <br>
              <a href="#" class="btn btn-primary">Buy Now</a>
            </div>
          </div>
    </div>
    <div class="col-md-4">
        <div class="card text-center bg-success bg-opacity-10">
            <div class="card-header">Premium</div>
          <div class="card-body">
            <h5 class="card-title">$50 Monthly</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer mattis.</p> <br>
            <p class="card-text">✔ Text</p>
            <p class="card-text">✔ Text</p> <br>
            <p class="card-text"><b class="b-text">Text:</b> text</p>
            <p class="card-text"><b class="b-text">Text:</b> text</p>
            <p class="card-text"><b class="b-text">Text:</b> text</p> <br>
            <a href="#" class="btn btn-primary">Buy Now</a>
          </div>
        </div>
      </div>
  </div> --}}

  <section class="price_plan_area section_padding_130_80" id="pricing">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-sm-8 col-lg-6">
          <!-- Section Heading-->
          <div class="section-heading text-center wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
            <h6>Pricing Plans</h6>
            <h3>Let's find a way together</h3>
            <p>Appland is completely creative, lightweight, clean &amp; super responsive app landing page.</p>
            <div class="line"></div>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <!-- Single Price Plan Area-->
        <div class="col-12 col-sm-8 col-md-6 col-lg-4">
          <div class="single_price_plan wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
            <div class="title">
              <h3>Free</h3>
              <p>Start a trial</p>
              <div class="line"></div>
            </div>
            <div class="price">
              <h4>$0</h4>
            </div>
            <div class="description">
              <p><i class="lni lni-checkmark-circle"></i>Duration: 7days</p>
              <p><i class="lni lni-checkmark-circle"></i>10 Features</p>
              <p><i class="lni lni-close"></i>No Hidden Fees</p>
              <p><i class="lni lni-close"></i>100+ Video Tuts</p>
              <p><i class="lni lni-close"></i>No Tools</p>
            </div>
            <div class="button"><a class="btn btn-success btn-2" href="#">Buy Now</a></div>
          </div>
        </div>
        <!-- Single Price Plan Area-->
        <div class="col-12 col-sm-8 col-md-6 col-lg-4">
          <div class="single_price_plan active wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
            <!-- Side Shape-->
            <div class="side-shape"><img src="https://bootdey.com/img/popular-pricing.png" alt=""></div>
            <div class="title">
              <h3>Standard</h3>
              <p>For Small Business Team</p>
              <div class="line"></div>
            </div>
            <div class="price">
              <h4>$9.99</h4>
            </div>
            <div class="description">
              <p><i class="lni lni-checkmark-circle"></i>Duration: 3 Month</p>
              <p><i class="lni lni-checkmark-circle"></i>50 Features</p>
              <p><i class="lni lni-checkmark-circle"></i>No Hidden Fees</p>
              <p><i class="lni lni-checkmark-circle"></i>150+ Video Tuts</p>
              <p><i class="lni lni-close"></i>5 Tools</p>
            </div>
            <div class="button"><a class="btn btn-warning" href="#">Buy Now</a></div>
          </div>
        </div>
        <!-- Single Price Plan Area-->
        <div class="col-12 col-sm-8 col-md-6 col-lg-4">
          <div class="single_price_plan wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
            <div class="title">
              <h3>Premium</h3>
              <p>Unlimited Possibilities</p>
              <div class="line"></div>
            </div>
            <div class="price">
              <h4>$49.99</h4>
            </div>
            <div class="description">
              <p><i class="lni lni-checkmark-circle"></i>Duration: 1 year</p>
              <p><i class="lni lni-checkmark-circle"></i>Unlimited Features</p>
              <p><i class="lni lni-checkmark-circle"></i>No Hidden Fees</p>
              <p><i class="lni lni-checkmark-circle"></i>Unlimited Video Tuts</p>
              <p><i class="lni lni-checkmark-circle"></i>Unlimited Tools</p>
            </div>
            <div class="button"><a class="btn btn-info" href="#">Buy Now</a></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  

  
 
  @extends('layouts.footer')
  
  @section('content')

  @endsection

</body>
</html>