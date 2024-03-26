<!DOCTYPE html>
<html>
  @include('admin.css')
  <style type="text/css">
    .center{
      text-align: center;
      margin: auto;
      width: 80%;
      border : 1px solid white;
      margin-top: 60px;
    
    }
    th{
      background-color : orange;
      text-align: center;
      color:white;
      font-size:15px;
      font-weight: bold;
      padding : 10px;
    }

  </style>
  <body>
        @include('admin.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      @include('admin.side_bar')
      <!-- Sidebar Navigation end-->

      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

          <div>

            <form>

              <table class="center">

              <tr>
                <th>User Name</th>
                <th>Email</th>
                <th>Book title </th>
                <th>Quantity</th>
                <th>Borrow status</th>
                <th>Book image</th>
                <th>Change status</th>
              </tr>
              @foreach($data as $data)

               <tr>
               <td>{{$data->user->name}}</td>
                <td>{{$data->user->email}}</td>
                <td>{{$data->Book->title}}</td>
                <td>
                  @if($data->status == 'approved')

                  <span style="color:orange">{{$data->Book->quantity}}</span>

                  @endif

                  @if($data->status == 'rejected')

                  <span style="color:red">{{$data->Book->quantity}}</span>

                  @endif
                  @if($data->status == 'returned')

                  <span style="color:green">{{$data->Book->quantity}}</span>

                  @endif
                  @if($data->status == 'Applied')

                  <span style="color:white">{{$data->Book->quantity}}</span>

                  @endif
                </td>
                <td>{{$data->status}}</td>
                <td><img style="height:150px; width:90px" src="book/{{$data->book->book_img}}" alt=""></td>
                <td>
                  <a class="btn btn-warning" href="{{url('approve_book',$data->id)}}">Approved</a>
                  <a class="btn btn-danger" href="{{url('rejected_book',$data->id)}}">Rejected</a>
                  <a class="btn btn-info" href="{{url('return_book',$data->id)}}">Returned</a>
                </td>
               </tr>

               @endforeach

              </table>

            </form>

          </div>
          
        
        </div>
    </div>
</div>






        @include('admin.footer')
  </body>
</html>