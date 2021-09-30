<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berkas extends Model
{
    protected $table = "berkas";

    protected $fillable = [
         'no_dokumen', 'perihal', 'keterangan', 'file', 'kategori', 'tanggal', 'created_at', 'updated_at', 'create_by', 'update_by',
    ];
}
