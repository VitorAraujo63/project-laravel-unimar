<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Finances extends Model
{
    protected $table = "finance";
    public $timestamps = false;
    protected $fillable = [
        "id",
        "value",
        "type",
    ];
}
