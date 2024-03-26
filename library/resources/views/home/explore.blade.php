<!DOCTYPE html>
<html lang="en">

  <head>

    @include('home.css')
  </head>

<body>

 @include('home.header')
 

    
 <div class="currently-market">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-heading">
            <div class="line-dec"></div>
            <h2><em>Items</em> Currently In The Market.</h2>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="filters">
            <ul>
              <li data-filter="*"  class="active">All Books</li>
              <li data-filter=".msc">Popular</li>
              <li data-filter=".dig">Latest</li>
              
            </ul>
          </div>
        </div>

        <form action ="{{url('search')}}" method="get">

        @csrf
        <div class="row">
            
        

        <div class="col-md-8">

        <input class="from-control" type="search" name="search" placeholder="Search for book title, auther name , category ">

        </div>

        <div class="col-md-12">

            <input style="background-color:orange" class ="btn btn -primary"type="submit" value ="Search">
        </div>
        

        </div>

        </form>
        <div class="col-lg-12">
          <div class="row grid">

            @foreach($data as $data)
          
            <div class="col-lg-6 currently-market-item all msc">
              <div class="item">
                <div class="left-image">
                  <img src="book/{{$data->book_img}}" alt="" style="border-radius: 20px; width: 200px;">
                </div>
                <div class="right-content">
                  <h4>{{$data->title}}</h4>
                  <span class="author">
                    <img src="assets/images/author.jpg" alt="" style="max-width: 50px; border-radius: 50%;">
                    <h6>{{$data->author_name}}</h6>
                  </span>
                  <div class="line-dec"></div>
                  <span class="bid">
                    Current Available<br><strong>{{$data->quantity}}</strong><br> 
                  </span>
                  <!-- <span class="ends">
                    Total<br><strong>20</strong><br>
                  </span> -->
                  <div class="text-button">
                    <a href="">View Book Details</a>
                  </div>
                  <br>
                  <div>
                    <a class="btn btn-primary" href="{{url('borrow_books',$data->id)}}">Apply to Borrow</a>
                  </div>
                </div>
              </div>
            </div>
            
            @endforeach
            <!-- <div class="col-lg-6 currently-market-item all msc">
              <div class="item">
                <div class="left-image">
                  <img src="assets/images/book2.webp" alt="" style="border-radius: 20px; min-width: 195px;">
                </div>
                <div class="right-content">
                  <h4>Broken Blade</h4>
                  <span class="author">
                    <img src="assets/images/author.jpg" alt="" style="max-width: 50px; border-radius: 50%;">
                    <h6>Robert T Kiyosaki</h6>
                  </span>
                  <div class="line-dec"></div>
                  <span class="bid">
                    Current Available<br><strong>10</strong><br> 
                  </span>
                  <span class="ends">
                    Total<br><strong>20</strong><br>
                  </span>
                  <div class="text-button">
                    <a href="details.html">View Item Details</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 currently-market-item all msc">
              <div class="item">
                <div class="left-image">
                  <img src="assets/images/book3.webp" alt="" style="border-radius: 20px; min-width: 195px;">
                </div>
                <div class="right-content">
                  <h4>Dwarves</h4>
                  <span class="author">
                    <img src="assets/images/author.jpg" alt="" style="max-width: 50px; border-radius: 50%;">
                    <h6>Robert T Kiyosaki</h6>
                  </span>
                  <div class="line-dec"></div>
                  <span class="bid">
                    Current Available<br><strong>10</strong><br> 
                  </span>
                  <span class="ends">
                    Total<br><strong>20</strong><br>
                  </span>
                  <div class="text-button">
                    <a href="details.html">View Item Details</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 currently-market-item all msc">
              <div class="item">
                <div class="left-image">
                  <img src="assets/images/book4.webp" alt="" style="border-radius: 20px; min-width: 195px;">
                </div>
                <div class="right-content">
                  <h4>Steven Erikson</h4>
                  <span class="author">
                    <img src="assets/images/author.jpg" alt="" style="max-width: 50px; border-radius: 50%;">
                    <h6>Robert T Kiyosaki</h6>
                  </span>
                  <div class="line-dec"></div>
                  <span class="bid">
                    Current Available<br><strong>10</strong><br> 
                  </span>
                  <span class="ends">
                    Total<br><strong>20</strong><br>
                  </span>
                  <div class="text-button">
                    <a href="details.html">View Item Details</a>
                  </div>
                </div>
              </div>
            </div> -->


          </div>
        </div>
      </div>
    </div>
  </div>

     @include('home.footer')
  

  
  </body>
</html>