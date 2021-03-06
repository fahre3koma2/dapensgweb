<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    use HasFactory;
    protected $table = 'biodata';
    protected $fillable = [
        'user_id', 'name', 'nohp', 'jabatan', 'unit', 'alamat', 'status','no_pegawai'
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function units()
    {
        return $this->hasOne(Unit::class, 'id', 'unit');
    }
}
