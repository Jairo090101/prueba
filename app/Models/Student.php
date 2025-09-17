<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    use HasFactory;

    protected $table = 'student'; // si tu tabla se llama students
    protected $fillable = ['name','email','phone','language'];
}
