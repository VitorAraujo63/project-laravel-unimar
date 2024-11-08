<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Finances extends Model
{
    protected $table = "myfinance";
    public $timestamps = false;
    protected $fillable = [
        "id",
        "value",
        "type",
    ];
}
