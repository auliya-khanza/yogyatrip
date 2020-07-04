<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\objek;


class Viewcontroller extends Controller
{
    public function indexAdmin(){
		//MENGAMBIL DATA DARI TABLE OBJEK 
		// $objek = objeks::all();
    	$objek = DB:: table('objek')->get();

    	//MENGAMBIL DATA BARANG KE VIEW 
    	return view('admin/obyek',['objek' => $objek]);
	
	}

	public function indexUser(){
		//MENGAMBIL DATA DARI TABLE OBJEK 
		// $objek = objeks::all();
    	$objek = DB:: table('objek')->get();

    	//MENGAMBIL DATA BARANG KE VIEW 
    	return view('user/obyek',['objek' => $objek]);
	
	}

	public function tambah(){
		return view('admin/obyek_tambah');
	}


	public function submit(Request $request)
	{
		$this->validate($request,['image'=>'required|file|image']);

        $file = $request->file('image');

        $nama_file = time()."_".$file->getClientOriginalName();

        $tujuan_upload = 'data_file';

        $file->move($tujuan_upload,$nama_file);


		$objek = DB::table('objek')->get();

	// insert data ke table pegawai
	DB::table('objek')->insert([
		'id_objek' => $request->id_objek,
		'nama_objek' => $request->nama_objek,
		'Alamat' => $request->Alamat,
		'deskripsi' => $request->deskripsi,
		'jam_operasional' => $request->jam_operasional,
		'harga_tiket' => $request->harga_tiket,
		'image' => $nama_file
	]);

	return redirect('/admin/objek_wisata');
	}



	public function edit($id)
	{
	// mengambil data objek berdasarkan id yang dipilih
	$objek = DB::table('objek')->where('id_objek',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('admin/obyek_edit',['objek' => $objek]);

	}

	public function update(Request $request)
	{
	// insert data ke table pegawai
	DB::table('objek')->where('id_objek',$request->id_objek)->update([
		'id_objek' => $request->id_objek,
		'nama_objek' => $request->nama_objek,
		'Alamat' => $request->Alamat,
		'deskripsi' => $request->deskripsi,
		'jam_operasional' => $request->jam_operasional,
		'harga_tiket' => $request->harga_tiket,

	]);
	return redirect('/admin/objek_wisata');

	}

	public function hapus($id)
	{
	// menghapus data objek wisata berdasarkan id yang dipilih
	DB::table('objek')->where('id_objek',$id)->delete();

	return redirect('/admin/objek_wisata');
	}

	public function lihatAdmin($id)
	{
		$objek = DB::table('objek')->where('id_objek',$id)->get();
		return view('admin/obyek_lihat',['objek' => $objek]);

	}

	public function lihatUser($id)
	{
		$objek = DB::table('objek')->where('id_objek',$id)->get();
		return view('user/obyek_lihat',['objek' => $objek]);

	}

	public function lihatDetailTiket($id)
	{
		$objek = DB::table('objek')->where('id_objek',$id)->get();
		return view('user/lihat_detail_tiket',['objek' => $objek]);

	}
	// public function cari(Request $request)
	// {
	// 	// menangkap data pencarian
	// 	$cari = $request->cari;
 
    // 		// mengambil data dari table pegawai sesuai pencarian data
	// 	$pegawai = DB::table('objek_wisata')
	// 	->where('nama_objek','like',"%".$cari."%")
	// 	->paginate();
 
    // 		// mengirim data pegawai ke view index
	// 	return view('index',['objek' => $objek]);
 
	// }

}
