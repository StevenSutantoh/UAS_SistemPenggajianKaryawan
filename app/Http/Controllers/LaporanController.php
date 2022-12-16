<?php

namespace App\Http\Controllers;

use App\Models\datakaryawan;
use Illuminate\Http\Request;
use PDF;

class LaporanController extends Controller
{
    public function index(){
        $dky = datakaryawan::all();
        return view('laporan/datakaryawan',['datakaryawan'=>$dky]);

    }

    public function cetak_pdf(){
        $logo_image = base64_encode(file_get_contents(public_path('template/dist/img/LOGO_UPH.jpg')));
        $dky = datakaryawan::all();
        $pdf = PDF::loadview('laporan/datakaryawanpdf',['datakaryawan'=>$dky, 'logo_image'=> $logo_image]);

        return $pdf->download('laporan-datakaryawan.pdf');
    }
}
