<!DOCTYPE html>
<html>
  @include('admin.css')

  <style type="text/css">
    .div_center{
        text-align : center;
        margin: auto;
    }
    .cat_label{
        font-size: 30px;
        font-weight: bold;
        padding :30px;
        color: white;
    }
    .center{
        margin: auto;
        width: 50%;
        text-align: center;
        margin-top:50px;
        border:1px solid white;
    }
    th{
        background-color:skyblue;
        padding: 10px;
    }
    tr{
        border: 1px solid white;
        padding: 10px;
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
            

            <div class="div_center">
                
            @if (session()->has('message'))

            <div class = "alert alert-success">

            {{session()->get('message')}}

            <button type="button" class="close" data-dismiss="alert" aria-hidden = "true" >
                x
            </button>
            </div>
            @endif
            <h1 class="cat_label">ADD CATEGORY</h1>


            <form action="{{url('add_category')}}" method="Post">
                @csrf
            <span style ="padding-right : 15px;">
            <label> Category Name</label>


            <input type="text"name ="category" required>
            </span>
            
            <input class="btn btn-primary" type="submit" value="Add Category">
            </form>
            </div>

            <div>
                
            <table class = "center">

            
                <tr>
                    <th>Category Name</th>
                    <th>Action</th>
                </tr>
                @foreach($data as $data)
                <tr>
                    
                    <td>  {{$data->cat_title}}</td>
                    <td>  <a class="btn btn-info" href="{{url('edit_category', $data->id)}}">Update</a>            <a class="btn btn-danger" href="{{url('cat_delete', $data->id)}}">Delete</a></td>
                </tr>

            @endforeach

            </table>
            </div>




          </div>
      </div>
    </div>
        @include('admin.footer')
  </body>
</html>