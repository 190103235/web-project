<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_model1 extends Model
{
    use HasFactory;

    protected $table = "user_table1";
    protected $fillable = ['number', 'password', 'email', 'photo'];
}
