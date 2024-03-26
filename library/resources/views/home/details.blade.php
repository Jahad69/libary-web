<!DOCTYPE html>
<html lang="en">

  <head>
     <base href="/public">
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
            <h2><em>Book</em> Detail</h2>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="">
          @foreach($data as $data)
            <div class="">
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

                  <br>

                  <p class="bid">
                    Category : {{$data->category->cat_title}}<br> 
                  </p>
                  <p class="bid">
                    Description : {{$data->description}} 
                  </p>
                  <br>
                  <div>
                    <a class="btn btn-primary" href="{{url('borrow_books',$data->id)}}">Apply to Borrow</a>
                  </div>
                </div>
              </div>
            </div>
          @endforeach  


          </div>
        </div>
      </div>
    </div>
  </div>


@include('home.footer')
  

  
  </body>
</html>