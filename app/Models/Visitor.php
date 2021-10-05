<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    protected $table = "visitor";

    protected $fillable = [
        'id', 'user_id', 'unit_user', 'keterangan', 'last_activity', 'created_at', 'updated_at',
    ];

    public function units()
    {
        return $this->hasOne(Unit::class, 'id', 'unit_user');
    }
}


