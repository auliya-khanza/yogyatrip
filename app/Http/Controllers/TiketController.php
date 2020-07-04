<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\tiket;
use App\objek;

class TiketController extends Controller
{
    public function index(){
		//MENGAMBIL DATA DARI TABLE PEMASUKAN 
		// $objek = objeks::all();
    	$tiket = DB:: table('tikets')->get();

    	//MENGAMBIL DATA PEMASUKAN KE VIEW 
    	return view('admin/tiket',['tikets' => $tiket]);
	}

	public function tambah(){
		return view('admin/tiket_tambah');
	}


	public function submit(Request $request)
	{
		$pemasukan = DB::table('tikets')->get();

	// insert data ke table pegawai
	DB::table('tikets')->insert([
        'id' => $request->id,
        'id_objek' => $request->id_objek,
		'bulan' => $request->bulan,
		'tahun' => $request->tahun,
		'jumlah' => $request->jumlah,
	]);

	return redirect('/admin/tiket');
	}

	public function edit($id)
	{
	// mengambil data pemasukan berdasarkan id yang dipilih
	$objek = DB::table('tikets')->where('id',$id)->get();
	// passing data pemasukan yang didapat ke view edit.blade.php
	return view('admin/tiket_edit',['tikets' => $tiket]);

	}

	public function update(Request $request)
	{
	// insert data ke table pemasukan
	DB::table('tikets')->where('id',$request->id)->update([
        'id' => $request->id,
        'id_objek' => $request->id_objek,
		'bulan' => $request->bulan,
		'tahun' => $request->tahun,
		'jumlah' => $request->jumlah,
	]);
	return redirect('/admin/tiket');

	}

	public function hapus($id)
	{
	// menghapus data objek wisata berdasarkan id yang dipilih
	DB::table('tikets')->where('id',$id)->delete();

	return redirect('/admin/tiket');
	}
}
