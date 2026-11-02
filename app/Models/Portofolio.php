<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    protected $table = 'portofolio_1129';
    protected $primaryKey = 'portofolio_id';
    protected $fillable = [
        'tentang_saya',
        'data_pribadi',
        'pengalaman_kerja',
        'keahlian',
        'pendidikan',
    ];
}
