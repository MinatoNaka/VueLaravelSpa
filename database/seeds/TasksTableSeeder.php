<?php

use App\Task;
use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            Task::create([
                    'title' => 'title' . $i,
                    'content' => 'content' . $i,
                    'person_in_charge' => 'person_in_charge' . $i,
                ]
            );
        }
    }
}
