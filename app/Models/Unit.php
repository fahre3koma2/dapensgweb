<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $table = "unit";

    protected $fillable = [
        'id', 'nama', 'keterangan', 'created_at', 'updated_at',

    ];
}
