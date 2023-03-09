<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MahasiswaModel;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function __construct()
    {
        $this->MahasiswaModel = new MahasiswaModel();
    }

    public function index(){
        $datamahasiswa = MahasiswaModel::all();
        
        return view('datamahasiswa', $datamahasiswa);
    }

    public function nurfanis(){
        $datamahasiswa = MahasiswaModel::all();
return view('nurfanis', compact ('datamahasiswa'));
    }

}