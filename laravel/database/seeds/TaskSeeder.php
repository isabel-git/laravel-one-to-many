<?php

use Illuminate\Database\Seeder;

use App\Task;
use App\Employee;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Task::class, 50)
            -> make()
            -> each(function($task) { //cicla i risultati del faker

                // dd($task);
                //$employee = Employee::findOrFail(1); 
                $employee = Employee::inRandomOrder() -> first();
                $task -> employee() -> associate($employee);
                $task -> save();
            }); 
        
        }
}
