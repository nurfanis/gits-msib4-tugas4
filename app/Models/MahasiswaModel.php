<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MahasiswaModel extends Model
{
    // public function all(){
    //     return DB::table('mahasiswa')->get();
    // }

    protected $table = 'mahasiswa';
}