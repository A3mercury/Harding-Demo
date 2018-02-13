<?php

use App\TaskItem;
use Illuminate\Database\Seeder;

class TaskItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            // Shopping list
            [
                'task_id' => 1,
                'label'   => 'Eggs'
            ],
            [
                'task_id' => 1,
                'label'   => 'Cheese'
            ],
            [
                'task_id' => 1,
                'label'   => 'Bread'
            ],
            [
                'task_id' => 1,
                'label'   => 'Milk'
            ],
            [
                'task_id' => 1,
                'label'   => 'Coffee'
            ],
            [
                'task_id' => 1,
                'label'   => 'Paper towels'
            ],
            [
                'task_id' => 1,
                'label'   => 'Chicken'
            ],
            [
                'task_id' => 4,
                'label'   => 'Chips'
            ],
            [
                'task_id' => 4,
                'label'   => 'Bean dip'
            ],
            // Reminders
            [
                'task_id' => 2,
                'label'   => 'Pay rent'
            ],
            [
                'task_id' => 2,
                'label'   => 'Code daily'
            ],
            [
                'task_id' => 2,
                'label'   => 'Work out'
            ],
            // Books
            [
                'task_id' => 3,
                'label'   => 'Harry Potter and the Half Blood Prince'
            ],
            [
                'task_id' => 3,
                'label'   => 'Blue Ocean Strategy'
            ],
            [
                'task_id' => 3,
                'label'   => 'Ben Shapiro: Evil in America'
            ],
        ];

        foreach ($items as $item) {
            TaskItem::create($item);
        }
    }
}
