<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rambu extends Model
{
    protected $table ='rambu';
    protected $fillable = [
        'kode_rambu','nama_rambu','jenis_id','keterangan','gambar',
    ];

    public function jenis(){
        return $this->belongsTo('App\jenis_rambu');
      }

    public function rambu(){
        return $this->belongsTo('App\rambu');
      }
}
