<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jenis_rambu extends Model
{
    protected $table ='jenis_rambu';
    protected $fillable = [
        'nama_jenis',
    ];
    public function rambu(){
        return $this->hasMany('App\rambu');
      }
}
