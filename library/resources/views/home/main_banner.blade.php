<!-- ***** Main Banner Area Start ***** -->
<div class="main-banner">
    <div class="container">
      <div class="row">


      @if (session()->has('message'))

      <div class = "alert alert-success">

      {{session()->get('message')}}

      <button type="button" class="close" data-dismiss="alert" aria-hidden = "true" >
      x
      </button>
      </div>
      @endif


        <div class="col-lg-6 align-self-center">
          <div class="header-text" >
            <h6 >Book is Knowledge</h6>
            <h2 style ="color:orange">Hello wellcome to CADT library</h2>
            <p style ="color:orange">Read your book and gain Knowledge for free here!</p>
            <div class="buttons">
              <div class="border-button">
                <a href="explore.html">Explore Top Books</a>
              </div>
              <div class="main-button">
                <a href="" target="_blank">Watch Our Videos</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 offset-lg-1">
          <div class="">
            <div class="item">
              <img src="" alt="">
            </div>
            <div class="item">
              <img src="" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ***** Main Banner Area End ***** -->