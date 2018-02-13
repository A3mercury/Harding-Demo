<?php

namespace App\Http\Controllers;

use App\Task;
use App\TaskItem;
use Carbon\Carbon;

class TaskItemsController extends Controller
{
    public function store()
    {
        $this->validate(request(), [
            'task_id' => 'required|integer|exists:tasks,id',
            'label'   => 'required|max:48',
        ]);

        $task_item = TaskItem::create([
            'task_id' => request('task_id'),
            'label' => request('label')
        ]);

        return json_encode([
            'message' => 'success',
        ]);
    }

    public function complete()
    {
        $this->validate(request(), [
            'item_id' => 'required|integer|exists:task_items,id',
        ]);

        $task_item = TaskItem::find(request('item_id'));
        $task_item->update([
            'completed' => $task_item->completed ? null : Carbon::now(),
        ]);

        return json_encode([
            'message' => 'success',
        ]);
    }
}
