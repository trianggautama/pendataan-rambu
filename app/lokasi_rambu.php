<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lokasi_rambu extends Model
{
    protected $table ='lokasi_rambu';
    protected $fillable = [
        'kelurahan_id','rambu_id','lat','lang','alamat','status_pasang',
    ];

    public function kelurahan(){
        return $this->belongsTo('App\kelurahan');
      }

    public function rambu(){
        return $this->belongsTo('App\rambu');
      }

}
