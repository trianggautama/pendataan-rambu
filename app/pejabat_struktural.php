<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pejabat_struktural extends Model
{
    protected $table ='pejabat_struktural';
    protected $fillable = [
        'nama','NIP','jabatan',
    ];

}
