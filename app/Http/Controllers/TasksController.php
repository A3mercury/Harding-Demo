<?php

namespace App\Http\Controllers;

use App\Task;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TasksController extends Controller
{
    public function tasks()
    {
        return json_encode([
            'tasks' => Task::visibleTo(Auth::user())->incompleted()->get()
        ]);
    }

    public function create()
    {
        $this->validate(request(), [
            'label' => 'required|string|max:48',
        ]);

        $task = Task::create([
            'user_id' => Auth::user()->id,
            'label' => request('label')
        ]);

        return json_encode([
            'message' => 'success',
        ]);
    }

    public function complete()
    {
        $this->validate(request(), [
            'task_id' => 'required|integer|exists:tasks,id',
        ]);

        $task = Task::find(request('task_id'));
        $task->update([
            'completed' => $task->completed ? null : Carbon::now(),
        ]);

        return json_encode([
            'message' => 'success',
        ]);
    }
}
