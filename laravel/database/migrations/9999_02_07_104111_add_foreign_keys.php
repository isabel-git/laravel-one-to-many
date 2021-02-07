<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeys extends Migration
{
    //per ogni task abbiamo UNO ED UN SOLO EMPLOYEE
    //per ogni employee abbiamo MOLTI TASKS (task ha la foreign key)

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('tasks', function (Blueprint $table) {

            $table  -> foreign('employee_id', 'task-employee')
                    -> references('id') // nome della chiave primaria della tab employee
                    -> on('employees'); //nome della tab referenziata
        });

        Schema::table('task_typology', function (Blueprint $table) { //DA TASK_TYPOLOGY
            $table  -> foreign('task_id', 'tt-task')  // A TASK
                    -> references('id') 
                    -> on('tasks'); 
            $table  -> foreign('typology_id', 'tt-typology') // A TYPOLOGY
                    -> references('id') 
                    -> on('typologies'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('task_typology', function (Blueprint $table) {

            //IN ORDINE SPECULARE
            $table  -> dropForeign('tt-typology'); // TYPOLOGY 

            $table  -> dropForeign('tt-task'); // TASK

        });

        Schema::table('tasks', function (Blueprint $table) { 

            $table -> dropForeign('task-employee');
        });

    }

    // CANCELLA IL DB E RI-CREALO
}
