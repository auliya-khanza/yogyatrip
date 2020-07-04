@extends('layouts/main')
@section('title','Yogya Trip - Register')
@section('container')
 
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- LINEARICONS -->
<link rel="stylesheet" href="{{asset('fonts/linearicons/style.css')}}">

<!-- MATERIAL DESIGN ICONIC FONT -->
<link rel="stylesheet" href="{{asset('fonts/material-design-iconic-font/css/material-design-iconic-font.min.css')}}">

<!-- DATE-PICKER -->
<link rel="stylesheet" href="{{asset('vendor/date-picker/css/datepicker.min.css')}}">

<!-- STYLE CSS -->
<link rel="stylesheet" href="{{asset('/css/registeradmin.css')}}">
<link rel="stylesheet" href="{{asset('/css/style.css')}}">

    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content" >
            <!-- Remove This Before You Start -->
            <div class="wrapper">
                <div class="inner">
                    <!-- @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>`
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif -->
                    <!-- AAAA -->
                    <form action="{{ url('/registerPost') }}" method="post">
                        {{ csrf_field() }}
                        @error('user_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        @error('confirmation')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        
                        <input type="hidden" name="role" value="user">
                        <h3>Register</h3>
                        <br>
                        
                        <div class="form-group">
                            <div class="form-row">
                                <div class="form-wrapper">
                                    <label for="alamat">Nama :</label>
                                    <input type="text"  class="form-control" 
                                        id="name" name="name" value="{{old('nama')}}">
                                    
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-wrapper">
                                <div class="form-group">
                                    <label for="email">Email :</label>
                                    <input type="email" class="form-control" 
                                        id="email" name="email" value="{{old('email')}}">
                                    
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-wrapper">
                                <div class="form-group">
                                    <label for="passsword">Password :</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-wrapper">
                                <div class="form-group">
                                    <label for="confirmation">Konfirmasi Password :</label>
                                    <input type="password" class="form-control" id="confirmation" name="confirmation">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-wrapper">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                                    <a href="{{url('/')}}" class="btn btn-md btn-danger">Batal</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection