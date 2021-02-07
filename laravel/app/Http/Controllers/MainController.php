<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Task;

use Illuminate\Http\Request;

class MainController extends Controller
{
    // EMPLOYEES
    public function employeeIndex() {

        $employees = Employee::all();
        return view('pages.employee-index', compact('employees'));
    }
    public function employeeShow($id) {
        $employee = Employee::findOrFail($id);
        return view('pages.employee-show', compact('employee'));
    }

    // TASKS
    public function taskIndex() {

        $tasks = task::all();
        return view('pages.task-index', compact('tasks'));
    }
    public function taskShow($id) {
        $task = task::findOrFail($id);
        return view('pages.task-show', compact('task'));
    }
}
