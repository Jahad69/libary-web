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
                        <img src="https://www.cadt.edu.kh/wp-content/uploads/2021/10/CADT-IDT-Logos-Navy_CADT-IDT-Lockup-2-English-2-small.png" alt="" width="" height="">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="{{url('/')}}" class="active">Home</a></li>
                        <li><a href="{{url('explore')}}">Explore</a></li>
                        <li><a href="{{url('details')}}">Book Details</a></li>
                        
                        <li><a href="{{url('')}}">Create Yours</a></li>


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
