<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [

        'title',
        'description',
        'priority',
    ];

    public function employee() { //singolare

        return $this -> belongsTo(Employee::class);
    }
}
