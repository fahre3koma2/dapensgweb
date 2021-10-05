<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    protected $table = "visitor";

    protected $fillable = [
        'id', 'user_id', 'keterangan', 'last_activity', 'created_at', 'updated_at',
    ];
}


