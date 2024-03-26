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
                    <a href="index.html" class="logo">
                        <img src="https://www.cadt.edu.kh/wp-content/uploads/2021/10/CADT-IDG-Logos-Navy_CADT-IDG-Lockup-2-English-2-small.png" alt=""width="300" height="70">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="index.html" class="active">Home</a></li>
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
