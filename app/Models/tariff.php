<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tariff extends Model
{
    use HasFactory;

    protected $table = "tariff_table";
    protected $fillable = ['tariff_name', 'tariff_price', 'user_model2_id'];

    public function index() {
        return $this->belongsTo(user_model2::class);
    }
}
