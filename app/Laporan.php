<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    protected $table = 'tb_laporan';
    protected $fillable = [
        'id_kabupaten', 'sembuh', 'positif','rawat','meninggal','tgl_data',
    ];
}
