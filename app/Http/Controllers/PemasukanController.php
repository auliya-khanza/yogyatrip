<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pemasukan;
use DB;

class PemasukanController extends Controller
{
    public function index(){
		//MENGAMBIL DATA DARI TABLE PEMASUKAN 
		// $objek = objeks::all();
        $pemasukan = DB:: table('pemasukans')->get();

    	//MENGAMBIL DATA PEMASUKAN KE VIEW 
    	return view('admin/pemasukan',['pemasukans' => $pemasukan]);
    }

	public function tambah(){
		return view('admin/pemasukan_tambah');
	}


	public function submit(Request $request)
	{
		$pemasukan = DB::table('pemasukans')->get();

	// insert data ke table pegawai
	DB::table('pemasukans')->insert([
		'id' => $request->id,
        'bulan' => $request->bulan,
        'tahun' => $request->tahun,
		'jumlah' => $request->jumlah,
	]);

	return redirect('/admin/pemasukan');
	}

	public function edit($id)
	{
	// mengambil data pemasukan berdasarkan id yang dipilih
	$objek = DB::table('pemasukans')->where('id',$id)->get();
	// passing data pemasukan yang didapat ke view edit.blade.php
	return view('admin/pemasukan_edit',['pemasukans' => $pemasukan]);

	}

	public function update(Request $request)
	{
	// insert data ke table pemasukan
	DB::table('pemasukans')->where('id',$request->id)->update([
		'id' => $request->id,
        'bulan' => $request->bulan,
        'tahun' => $request->tahun,
		'jumlah' => $request->jumlah,
	]);
	return redirect('/admin/pemasukan');

	}

	public function hapus($id)
	{
	// menghapus data objek wisata berdasarkan id yang dipilih
	DB::table('pemasukans')->where('id',$id)->delete();

	return redirect('/admin/pemasukan');
	}
}
