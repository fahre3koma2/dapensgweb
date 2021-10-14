<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gambar extends Model
{
    protected $table = "gambar";

    protected $fillable = [
        'id', 'file', 'jenis', 'type', 'created_at', 'updated_at',
    ];
}
