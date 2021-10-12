<?php
namespace App\Http\Controllers;
use App\Http\Requests\TodoRequest;
use App\Models\Todo;
 

class TodoController extends Controller{
    
    public function index(){
        $todos = Todo::all();
         return view('todos.index')->with(['todos' => $todos]);
}
 

    public function create(){
        return view('todos.create');

    }

   
    public function store(TodoRequest $request){
        Todo::create($request->all());
        return redirect()->back()->with('message', 'Todo Created Successfully');
    }

   
    public function show(Todo $todo)
    {
        //
    }

   
    public function edit(Todo $todo){
        return view('todos.edit');
      
    }
 
    public function update(Request $request, Todo $todo){
        //
    }

   
    public function destroy(Todo $todo){
        //
    }
}
