<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ToDoUser extends Model
{
    use HasFactory;
    protected $table = "to_do_users";
    protected $fillable = [
        "name",
        "surname",
        "email",
        "password"
    ];
}
