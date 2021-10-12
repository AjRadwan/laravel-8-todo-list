@extends('layouts.app')
@section('content')
 

    <h1 class="text-center mb-4">Todolist</h1>
    <div class="container d-flex justify-content-center">
        <form class="form-inline" method="POST" action="{{url('todos/create')}}">
            @csrf
            <div class="form-group mx-sm-3 mb-2">
              <label for="text" class="sr-only">Enter list</label>
              <input type="text" class="form-control" name="title">
            </div>
            <button class="btn btn-primary mb-2" type="submit" value="create">Create</button>
          </form>
</div>
@endsection
 
 