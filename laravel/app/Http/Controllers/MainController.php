<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;
use App\Typology;
use App\Employee;


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

        $tasks = Task::all();

        return view('pages.task-index', compact('tasks'));
    }

    public function taskShow($id) {
        $task = Task::findOrFail($id);

        return view('pages.task-show', compact('task'));
    }

    public function taskCreate() {
        $employees = Employee::all();
        $typologies = Typology::all();

        return view('pages.task-create', compact('employees', 'typologies'));
    }
    public function taskStore(Request $request) {

        $new = $request -> all(); //dati che arrivano dal form
        //dd($new);

        //UNO A MOLTI
        $employee = Employee::findOrFail($new['employee_id']); //prende gli employee associati alla section
        $task = Task::make($request -> all()); //Task appena fatto ma non ancora salvato
        $task -> employee() -> associate($employee); //associa l'employee con la task
        $task -> save(); //aggiunge nel db

        //MOLTI A MOLTI
         $typologies = Typology::findOrfail($new['typologies']);
         $task -> typologies() -> attach($typologies); //attach: aggiunge senza toglie

        return redirect() -> route('task-show', $task -> id);
    }

    public function taskEdit($id) {

        $task = Task::findOrFail($id); //si recupera il task dalla tabella
        $employees = Employee::all(); //tutti gli emp
        $typologies = Typology::all(); //tutte le typ

        return view('pages.task-edit', compact('task', 'employees', 'typologies')); //e li compatta
    }
    public function update(Request $request, $id) {

        $edit = $request -> all();

        // dd($edit);
        
        $employee = Employee::findOrFail($edit['employee_id']);
        $task = Task::findOrFail($id);
        $task -> update($edit); //la funzione update aggiorna i dati
        $task -> employee() -> associate($employee);
        $task -> save();

        $typologies = Typology::findOrfail($edit['typologies']);
        $task -> typologies() -> sync($typologies); //sync: posso sia aggiungere che rimuovere

        return redirect() -> route('task-show', $task -> id);
    }
    




    // TYPOLOGIES
    public function typologyIndex() {

        $typologies = Typology::all();

        return view('pages.typology-index', compact('typologies'));
    }
    public function typologyShow($id) {
        $typology = Typology::findOrFail($id);

        return view('pages.typology-show', compact('typology'));
    }
}
