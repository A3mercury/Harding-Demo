<?php

use App\Task;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tasks = [
            [
                'user_id' => 1,
                'title'   => 'Shopping List',
            ],
            [
                'user_id' => 1,
                'title'   => 'Reminders',
            ],
            [
                'user_id' => 1,
                'title'   => 'Books',
            ],
            [
                'user_id' => 2,
                'title'   => 'Shopping List',
            ],
            [
                'user_id' => 2,
                'title'   => 'Reminders',
            ],
        ];

        foreach ($tasks as $task) {
            Task::create($task);
        };
    }
}
