<!DOCTYPE html>
<html lang="en">


  <head>

    @include('home.css')

    <style type="text/css"> 

    .table_deg{
        border: 1px solid white;
        margin : auto;
        text-align: center;
        margin-top:200px;
        color: white;
    }
    th{
        background-color: orange;
        color:white;
        font-weight:bold;
        font-size:18px;
        padding: 10px;
    }
    td{
        color:white;
        background-color: black;
        border : 1px solid white;
    }
    .book_img{
        width: 120px;
        height: 90px;
        margin:auto;
    }
    </style>
  </head>

<body>

 @include('home.header')
 

 <div class="currently-market">
    <div class="container">
      <div class="row">

        @if(session()->has ('message'))

        <div style ="margin-top:100px;"class ="alert alert-success">

        {{session()->get('message')}}
        <button type="button" class="close" aria-hidden="true" data-bs-dismiss="alert">x</button>


        </div>


        @endif



        <table class="table_deg">

        <tr>
            <th>Book Name</th>
            <th>Book Author</th>
            <th>Book Status</th>
            <th>Book Image</th>
            <th>Cancel Request</th>
            
        </tr>
        @foreach($data as $data)
        <tr>
            <td>{{$data->book->title}}</td>
            <td>{{$data->book->author_name}}</td>
            <td>{{$data->status}}</td>
            <td>
                <img class="book_img" src="book/{{$data->book->book_img}}" alt="">
            </td>
            <td>

                @if($data->status == 'Applied')

                <a href="{{url('cancel_request',$data->id)}}" class="btn btn-warning">Cancel </a>

                @else
                <p style ="color : white; font-weight: bold;">Not Allowed</p>

                @endif
            </td>
        </tr>

        @endforeach
        </table>


        </div>
    </div>
</div>
    





     @include('home.footer')
  

  
  </body>
</html>