@extends('layouts.app')

@section('content')


   <h2 class="text-center my-4">Edit Todo</h2>
    <div class="row justify-content-center">
     <div class="col-md-6">

       @if (count($errors) > 0)
         <div class = "alert alert-danger">
            <ul>
               @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
               @endforeach
            </ul>
         </div>
      @endif
     
<form action="{{url('update-todos/'.$todo->id)}}" method="POST">

@csrf

<div class="form-group">
  <label for="exampleFormControlInput1" class="form-label">Todo Name</label>
  <input type="text" class="form-control" required name="name" value="{{$todo->name}}" >
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Todo Descrption</label>
  <textarea class="form-control" name="description" required rows="4" cols="5" >{{$todo->description}}</textarea>
</div>


<div class="form-group col-6">
          
          <button type="submit" class="btn btn-success btn-block">update</button>
        </div>

</form>
</div>
</div>


@endsection
