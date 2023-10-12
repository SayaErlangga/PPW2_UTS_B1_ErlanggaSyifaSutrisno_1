<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemain extends Model
{
    use HasFactory;
    protected $table = 'pemain';
    protected $fillable = ['id_pemain', 'nama_pemain', 'no_punggung', 'posisi', 'created_at', 'updated_at'];
}