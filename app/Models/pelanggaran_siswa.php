<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelanggaran_siswa extends Model
{
    use HasFactory;
    protected $table = 'pelanggaran_siswa';
    protected $guarded = ['id'];


    public function users()
    {
        return $this->belongsTo(User::class, 'id_users');
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'id_kelas');
    }

    public function jenis_pelanggaran()
    {
        return $this->belongsTo(Jenis_pelanggaran::class, 'id_jenis_pelanggaran');
    }

    
}
