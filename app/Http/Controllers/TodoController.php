<?php

namespace App\Http\Controllers;

use App\Todo;
use Faker\Provider\Lorem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TodoController extends Controller
{
    public function index()
    {
        return view('todos.index');
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store(Request $request)
    {
        $rules = [
            'title' => 'required|max:255',
        ];

        $messages = [
            'title.max' => 'Todo title should not be greater than 255 chars',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
//        $request->validate([
//           'title' => 'required|max:255',
//        ]);

        Todo::create($request->all());
        return redirect()->back()->with('message', 'Todo created successfully');
    }

    public function edit()
    {
        return view('todos.edit');
    }
}
