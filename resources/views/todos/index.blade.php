@extends('layouts.app')
@section('content')

 
<div class="d-flex justify-content-center mb-5">
    <h1 class="mr-4">Todolist</h1>
    <a href="{{url('todos/create')}}" type="button" class="btn btn-primary mb-2">Create</a>
</div>

 
<div class="d-flex justify-content-center">

<ul class="list-group">
    @foreach ($todos as $todo)
        <li class="list-group-item display-4">

            {{$todo->title}}

            <a href="{{url('todos/edit')}}/{{$todo->id}}" type="button" class="btn btn-primary mb-2">Edit</a>


            <a href="" type="button" class="btn btn-warning mb-2">Delete</a>
        </li>
       
    @endforeach
</ul>
</div>


@endsection