<?php
namespace App\Http\Controllers;
use App\Http\Requests\TodoRequest;
use Illuminate\Http\Request;
use App\Models\Todo;
 

class TodoController extends Controller{
    
    public function index(){
        $todos = Todo::all();
         return view('todos.index')->with(['todos' => $todos]);
        //  return view('todos.index', compact('todos'));
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
   
    public function edit($id){
       $todo = Todo::find($id);
       return view('todos.edit')->with(['todo' => $todo]);
      
    }
 
    public function update(TodoRequest $request,Todo $todo){

         $todo->update(['title' => $request->title]);
         return redirect(route('todo.index'))->with('message', 'Updated');
    }

   
    public function destroy(Todo $todo){
        //
    }
}
