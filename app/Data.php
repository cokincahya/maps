<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    protected $table = 'tb_data';
    protected $fillable= ['id','id_kelurahan', 'level', 'ppln','ppdn','tl','lainnya','rawat','sembuh','meninggal','total','tanggal','status'];

    public function data()
    {
        return $this->belongsTo(Kelurahan::class, 'id_kelurahan');
    }
}
