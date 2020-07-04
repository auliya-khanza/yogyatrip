@extends('layouts/main')
@section('title','Yogya Trip - Obyek Wisata')
@section('container')

<section class="team-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="section-title">
                        <h2>Obyek Wisata di Yogyakarta</h2>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-6 col-sm-4">
                        @foreach($objek as $p)
                        <img src="{{url('/data_file/'.$p->image)}}" alt="" width="250px" height="250px">
                        <div class="ti-text">
                            <h5>{{ $p->nama_objek }}</h5>
                            <span>{{ $p->Alamat }}</span>
                            <div class="button">
                            <a href="/user/objek_wisata/lihat/{{ $p->id_objek }}" class="genric-btn info circle" role="button" title="Lihat Data">Lihat Informasi</a>
                            <a href="/user/objek_wisata/beli/{{ $p->id_objek }}" class="genric-btn info circle" role="button" title="Beli tiket">Beli tiket</a>
                            </div>
                        </div>
                        @endforeach
                </div>
            </div>
            
        </div>
</section>

@endsection