@extends('layouts/main')
@section('title','Yogya Trip - Obyek Wisata')
@section('container')
<div class="jumbotron jumbotron-fluid">
			
        <!-- @foreach($objek as $p) -->
            <br>
            <br>
			<div class="container">
                <br><br>
				<h3>Detail Transaksi</h3>
                <br><br><br>
                
                <h4>Nama Obyek Wisata</h4><br>
                <p>{{ $p->nama_objek }}</p>
                <br>

                <h4>Harga</h4><br>
                <p>{{ $p->harga_tiket }}</p>
                <br>

                <h4>Jumlah tiket</h4><br>
                <input type="text" name="jumlah_tiket" required="required"></textarea>
                <br><br>
                
                <!-- lanjut total pembayaran -->
                <a href="" class="btn btn-info" role="button" title="Detail pembayaran"><i class="glyphicon glyphicon-plus"></i>Beli tiket</a>
            </div>
            <a href="/user/objek_wisata/lihat/{id}"> Kembali</a>
</div>
        <!-- @endforeach -->
@endsection