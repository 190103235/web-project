<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_model2 extends Model
{
    use HasFactory;
    protected $table = "user_table2";
    protected $fillable = ['name', 'surname', 'iin', 'number'];

    public function index() {
        return $this->hasOne(tariff::class);
    }
}
