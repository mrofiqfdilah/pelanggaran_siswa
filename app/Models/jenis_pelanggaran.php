<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jenis_pelanggaran extends Model
{
    use HasFactory;
    protected $table = 'jenis_pelanggaran';
    protected $guarded = ['id'];
}
