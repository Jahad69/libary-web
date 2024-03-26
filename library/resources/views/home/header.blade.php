 <!-- ***** Preloader Start ***** -->
 <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="s">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="{{url('/')}}" class="logo">
                        <img src="assets/images/cadt-logo.png" style="border-radius: 50%;" alt=""width="100" height="100">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="{{url('/')}}" class="active">Home</a></li>
                        <li><a href="{{url('explore')}}">Explore</a></li>
                        <li><a href="details.html">Item Details</a></li>
                        
                        <li><a href="create.html">Create Yours</a></li>


                        @if (Route::has('login'))
               
                    @Auth

                    <li>
                        <a href="{{url('book_history')}}">My history</a>
                    </li>
                    
                    <x-app-layout></x-app-layout>
                    
                    @else
                    <li><a href="{{ route('login') }}">login</a></li>

                        @if (Route::has('register'))
                        <li><a href="{{ route('register') }}">register</a></li>
                        @endif
                    @endauth
                
            @endif


                        
                        
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
