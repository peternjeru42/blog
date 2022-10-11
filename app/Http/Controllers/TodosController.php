<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodosController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        return view('Todos.index')->with('todos', $todos);
    }

    public function show($id)
    {
        $todo = Todo::find($id);
        return view('Todos.show')->with('todo', $todo);
    }

    
    public function create()
    {
       return view('Todos.create');
        
      
    }

    public function store(Request $req)

    {
        //validation of data before storing to db
        $this->validate($req,[
            'name'=>'required|max:30',
            'description'=>'required'
         ]);
       
        //new instance of the Todo Model
        $todo = new Todo();
        //data for the new todo instance
        $todo->name = $req->name;
        $todo->description = $req->description;
        $todo->completed = false;

        //saving the new todo to the db
        $todo->save();

        session()->flash('success', 'Todo has been saved successfully');
        //redirecting the user back to the todos page to view all todos
        return redirect('/todos');
    }

    public function edit($id)
    {
        $todo = Todo::find($id);
       
        return view('Todos.edit')->with('todo', $todo);;
        
      
    }  

    public function update(Request $req, $id)
    {
        
        
        $todo =Todo::find($id);
        $todo->name = $req['name'];
        $todo->description = $req['description'];
        $todo->save();

        session()->flash('success', 'Todo has been updated successfully');

        return redirect ('/todos');
    }

    public function delete($id)
    {
       
        $todo = Todo::find($id)->delete();

        session()->flash('success', 'Todo has been deleted successfully');
        return redirect ('/todos');
    }

}
