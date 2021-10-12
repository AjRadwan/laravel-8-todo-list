@extends('layouts.app')

@section('content')

@foreach ($todos as $todo)
<h2>{{$todo->title}}</h2>
@endforeach

@endsection