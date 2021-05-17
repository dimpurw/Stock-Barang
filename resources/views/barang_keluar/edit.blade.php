@extends('layouts.app')

@section('content')
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">Edit Barang Keluar</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Barang Keluar</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Barang Keluar</li>
                </ol>
            </nav>
        </div>
        <!-- Quick Action Toolbar Ends-->
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Barang Keluar</h4>
                    {{ Form::open(['route' => ['barangkeluar.edit.update', $barangkeluar->id]]) }}
                    {{ csrf_field() }}
                    <div class="form-group">
                        {{ Form::label('tanggal', 'Tanggal') }}
                        {{ Form::date('tanggal', $barangkeluar->tanggal, ['class' => ($errors->has('tanggal')) ? 'form-control is-invalid' : 'form-control', 'placeholder'=>'Tanggal']) }}
                        <span style="color:red;"> {{$errors->first('tanggal')}} </span>
                    </div>
                    <div class="form-group">
                        {{ Form::label('nama_barang', 'Nama Barang') }}
                        {{ Form::text('nama_barang', $barangkeluar->nama_barang, ['class' => ($errors->has('nama_barang')) ? 'form-control is-invalid' : 'form-control', 'placeholder'=>'Nama Barang']) }}
                        <span style="color:red;"> {{$errors->first('nama_barang')}} </span>
                    </div>
                    <div class="form-group">
                        {{ Form::label('jenis', 'Jenis') }}
                        {{ Form::text('jenis', $barangkeluar->jenis, ['class' => ($errors->has('jenis')) ? 'form-control is-invalid' : 'form-control', 'placeholder'=>'Jenis']) }}
                        <span style="color:red;"> {{$errors->first('jenis')}} </span>
                    </div>
                    <div class="form-group">
                        {{ Form::label('merk', 'Merk') }}
                        {{ Form::text('merk', $barangkeluar->merk, ['class' => ($errors->has('merk')) ? 'form-control is-invalid' : 'form-control', 'placeholder'=>'merk']) }}
                        <span style="color:red;"> {{$errors->first('merk')}} </span>
                    </div>
                    <div class="form-group">
                        {{ Form::label('ukuran', 'Ukuran') }}
                        {{ Form::text('ukuran', $barangkeluar->ukuran, ['class' => ($errors->has('ukuran')) ? 'form-control is-invalid' : 'form-control', 'placeholder'=>'Ukuran']) }}
                        <span style="color:red;"> {{$errors->first('ukuran')}} </span>
                    </div>
                    <div class="form-group">
                        {{ Form::label('jumlah', 'Jumlah') }}
                        {{ Form::text('jumlah', $barangkeluar->jumlah, ['class' => ($errors->has('jumlah')) ? 'form-control is-invalid' : 'form-control', 'placeholder'=>'Jumlah']) }}
                        <span style="color:red;"> {{$errors->first('jumlah')}} </span>
                    </div>
                    <div class="form-group">
                        {{ Form::label('penerima', 'Penerima') }}
                        {{ Form::text('penerima', $barangkeluar->penerima, ['class' => ($errors->has('penerima')) ? 'form-control is-invalid' : 'form-control', 'placeholder'=>'Penerima']) }}
                        <span style="color:red;"> {{$errors->first('penerima')}} </span>
                    </div>
                    {{ Form::submit('Save', ['class' => 'btn btn-primary mr-2']) }}
                    <a href="{{ route('barangmasuk') }}"><button type="button" class="btn btn-light">Cancel</button></a>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <!-- partial -->
</div>
<!-- main-panel ends -->
@endsection