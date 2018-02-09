<?php

namespace App\Http\Controllers;

use App\TaskItem;

class TaskItemsController extends Controller
{
    public function store()
    {
        $this->validate(request(), [
            'task_id' => 'required|integer|exists:tasks,id',
            'label'   => 'required|max:48',
        ]);

        $task_item = TaskItem::create(request());

        return json_encode([
            'message' => 'success',
        ]);
    }
}
