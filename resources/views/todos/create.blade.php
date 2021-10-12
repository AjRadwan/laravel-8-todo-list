@extends('layouts.app')
@section('content')



<div class="container">
  <h1 class="text-center mb-4">Todolist</h1>
  @include('flash') {{--  this showing flash meessage  --}}
    <div class="d-flex justify-content-center">
 <form class="form-inline" method="POST" action="{{url('todos/create')}}">
            @csrf
             <div class="form-group mx-sm-3 mb-2">
             <input type="text" class="form-control" name="title">
             </div>
            <button class="btn btn-primary mb-2" type="submit" value="create">Create</button>
          </form>        
</div>
</div>
@endsection
 
 