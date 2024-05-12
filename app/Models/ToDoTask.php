<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ToDoTask extends Model
{
    use HasFactory;
    protected $table = "to_do_tasks";
    protected $fillable = [
        "profileID",
        "name",
        "surname",
        "email",
        "password",
        "taskTitle",
        "taskContent",
        "taskStatus"
    ];
}
