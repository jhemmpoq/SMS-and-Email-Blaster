 <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.html" class="logo">
                <img src="{{ asset('images/logo-v1.png') }}" alt="" />
              <img src="assets/images/logo-v1.png" alt="">
             </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="/">Home</a></li>
              <li class="scroll-to-section"><a href="#services" class="active">Services</a></li>
              <li class="scroll-to-section"><a href="#">Pricing</a></li>
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
  <div>
    @yield('content')
  </div>

  <!-- ***** Header Area End ***** -->
            