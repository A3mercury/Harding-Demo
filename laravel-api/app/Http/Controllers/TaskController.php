<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function index()
    {
        return json_encode([
            'message' => 'success',
            'tasks' => Task::visibleTo(Auth::user())->get(),
        ]);
    }
}
