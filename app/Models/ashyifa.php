<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ashyifa extends Model
{
    use HasFactory;
    Protected $table= "ashyifa";
    protected $fillable= ['Nama_Pasukan','Email','Asal_Sekolah','Asal_Daerah','Nama_Pelatih'];
}
