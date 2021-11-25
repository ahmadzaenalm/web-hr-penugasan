<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CutiKaryawan extends Model
{
    use HasFactory;
    protected $table = 'cuti_karyawan';
    protected $fillable = ['user_id', 'tgl_cuti','lama_cuti','keterangan_cuti','status' ];
    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id','id');
    }
}
