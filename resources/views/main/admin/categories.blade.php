@extends('main.admin')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head >
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../css/style.css" rel="stylesheet" />
</head>
<body >
<div class="row align-items-center bg-dark py-3 px-xl-5 d-none d-lg-flex" >
            <div class="col-lg-4" >
                <a href="" class="text-decoration-none">
                <span  class="h1 text-uppercase text-dark bg-primary px-2 ml-n1" >multi</span>
                    <span class="h1 text-uppercase text-primary bg-dark px-2">shop</span>
                    
                </a>
            </div>
            <div class="col-lg-4 ">
            <span class=" py-2 h1 text-uppercase text-primary bg-dark px-2">Categories page</span>
            </div>
            <div class="col-lg-4 col-6 text-right">
            <span class="h1 text-uppercase text-primary bg-dark px-2">Admin panel</span>
            </div>
        </div>
    </div>
<br>
<br>


@foreach ($categories as $category)
<div style="padding: 5px 0px 0px 250px">
<table class="table table-striped table-dark" >
  <thead>

    <tr >
      <th ' ><h2 style='color:yellow'>#Id</h1></th>
      <th '><h2 style='color:yellow'>Image</h1></th>
      <th '><h2 style='color:yellow'>Name</h1></th>

        
          

    </tr>
  </thead >
  <tbody >
    <tr>
      <td '> <h3 style='color:white'>{{$category['id']}}</td>
      <td '><img src="{{asset('storage/'.$category['image'])}}" alt="" width="70"></td>
      <td '><h3 style='color:white'>{{$category['name']}}</td>
        <td   ><a class="btn btn-primary" href="{{url('admin/category/create')}}" role="button" style="width: 100px">ADD</a><br><br><a style="width: 100px" class="btn btn-primary" href="{{url('admin/category/'.$category['id'].'/edit')}}" role="button">EDIT</a><br></td> <td style="padding: 50px 0px">
          <form action="{{ url('admin/category/' . $category['id']) }}" method="POST">
              @method('DELETE')
              @csrf
              <button onclick="return confirm('Are you sure?')" class="btn btn-danger">Delete</button>
          </form>
      </td>
        
        
        

    </tr>
   
  </tbody>
</table>
</div>
@endforeach
<div style="margin: 0 40%">
  {!!$categories->links()!!}
  </div>
</body>
</html>
@endsection