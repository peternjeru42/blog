@extends('layouts.app')

@section('content')

   <div class="container">
    <h2 class="text-center my-4">{{$todo->name}}</h2>
    </div>
       <div class="row justify-content-center">
       <div class="col-md-6">
    <div class="card card-default">
            <div class="card-header">Details</div>

   

                  <div class="card-body">{{$todo->description}} </div>
            </div>
            
            <a href="{{url('edit-todos/'.$todo->id)}}"class="btn btn-info my-2 btn-block col-3 fw-bold" >Edit</a>
            <a href="{{url('delete-todos/'.$todo->id)}}"class="btn btn-danger my-2 btn-block col-3 fw-bold" >Delete</a>
             </div>
              </div>
   
@endsection