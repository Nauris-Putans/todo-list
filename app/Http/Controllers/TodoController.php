<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoCreateRequest;
use App\Todo;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;

class TodoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        $todos = Todo::orderBy('completed')->get();
        return view('todos.index', compact('todos'));
    }

    /**
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('todos.create');
    }

    /**
     * @param TodoCreateRequest $request
     * @return RedirectResponse
     */
    public function store(TodoCreateRequest $request)
    {
        Todo::create($request->all());
        return redirect(route('todo.index'))->with('message', 'Todo created successfully');
    }

    /**
     * @param Todo $todo
     * @return Application|Factory|View
     */
    public function edit(Todo $todo)
    {
        return view('todos.edit', compact('todo'));
    }

    /**
     * @param TodoCreateRequest $request
     * @param Todo $todo
     * @return Application|RedirectResponse|Redirector
     */
    public function update(TodoCreateRequest $request,Todo $todo)
    {
        $todo->update(['title' => $request->title]);
        return redirect(route('todo.index'))->with('message', 'Updated!');
    }

    /**
     * @param Todo $todo
     * @return RedirectResponse
     */
    public function complete(Todo $todo)
    {
        $todo->update(['completed' => true]);
        return redirect()->back()->with('message', 'Task marked as completed');
    }

    /**
     * @param Todo $todo
     * @return RedirectResponse
     */
    public function incomplete(Todo $todo)
    {
        $todo->update(['completed' => false]);
        return redirect()->back()->with('message', 'Task marked as incompleted');
    }

    /**
     * @param Todo $todo
     * @return Application|RedirectResponse|Redirector
     */
    public function destroy(Todo $todo)
    {
        $todo->delete();
        return redirect(route('todo.index'))->with('message', 'Task deleted');
    }
}
