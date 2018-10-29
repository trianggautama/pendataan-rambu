<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kelurahan extends Model
{
    protected $table ='kelurahan';
    protected $fillable = [
        'nama_kelurahan','kecamatan_id',
    ];

    public function kecamatan(){
        return $this->belongsTo('App\kecamatan');
      }

}