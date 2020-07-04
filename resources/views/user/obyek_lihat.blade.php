@extends('layouts/main')
@section('title','Yogya Trip - Obyek Wisata')
@section('container')
<div class="jumbotron jumbotron-fluid">
			
            @foreach($objek as $p)
            <br>
            <br>
			<div class="container">
				<h1 class="display-4">{{ $p->nama_objek }}</h1>
			</div>
			</div>
			<div class="container">
                <br><br>
                
                <p><img src="{{url('/data_file/'.$p->image)}}" width="500px" height="500px"></p>
                <br><br>

                <h4>Deskripsi</h4><br>
                <p>{{ $p->deskripsi }}</p>
                <br><br>

                <h4>Alamat</h4><br>
                <p>{{ $p->Alamat }}</p>
                <br><br>

                <h4>Jam Operasional</h4><br>
                <p>{{ $p->jam_operasional }}</p>
                <br><br>

                <h4>Harga tiket</h4><br>
                <p>{{ $p->harga_tiket }}</p>
                <br><br>

            </div>
            @endforeach
@endsection