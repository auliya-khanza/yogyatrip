<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\pemasukan;
use App\tiket;
use App\objek;

class ChartController extends Controller
{
    //menampilkan chart pemasukan
    public function lihatPemasukan(){
        $pemasukan = pemasukan::all();
        $bulan = [];
        $hasil_pemasukan = [];
        foreach($pemasukan as $p){
            $bulan[] = $p->bulan;
            $hasil_pemasukan[] = $p->jumlah;
        }
        return view ('admin/statistik',['bulan'=>$bulan, 'hasil_pemasukan'=>$hasil_pemasukan]);
    }

    //menampilkan chart tiket
    public function lihatTiket(){
        $objek = objek::all();
        $tiket = tiket::all();
        $nama_objek[] = DB::table('objek')
                ->select('nama_objek')
                ->join ('tikets', 'tikets.id_objek', '=', 'objek.id_objek')
                ->get();
        foreach($objek as $p){
            $nama_objek[] = $p->nama_objek;
            
        }
        dd($nama_objek);
        return view ('admin/statistik',['nama_objek'=>$nama_objek]);
    }

    //menghitung banyak objek wisata
    public function countObjek(){
        return $count = DB::table('objek')->count();
    }
}
