<?php

namespace App\Http\Controllers;

use App\Task;
use View;
use App\Http\Requests\CreateTask;

class TasksController extends Controller
{
    public function todolist()
    {

            //return View::make('todolist');
        $tasks = Task::all();

        return View::make('todolist')->with('tasks', $tasks);
                 //or
                // return View::make('todolist', compact('tasks'));
                //or
                //return View::make('home',['tasks'=> $tasks]);
    }

    public function create()
    {
        return View::make('create');
    }

    public function edit(Task $task)
    {
        return View::make('edit', compact('task'))->render();
    }

    public function delete(Task $task)
    {
        return View::make('delete', compact('task'));
    }

    public function store(CreateTask $request)
    {
        //dd($request->all());

        Task::create($request->all());

        return redirect('todolist');

       // var_dump($request::all());
       // Task::create($request::all());
    }
}
