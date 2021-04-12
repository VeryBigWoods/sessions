<?php

namespace App\Http\Livewire;

use App\Models\Todo;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class TodoList extends Component
{

    private $todoList = [];

    protected $listeners = ['todoSaved' => 'onTodoSaved'];

    public function onTodoSaved()
    {
        $user = Auth::user();
        $this->todoList = Todo::where('user_id', $user->id)->get();
    }

    public function render()
    {
        $user = Auth::user();
        $this->todoList = Todo::where('user_id', $user->id)->get();
        return view('livewire.todo-list', ['todoList' => $this->todoList]);
    }
}