@extends('layouts.app')

@section('content')
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">Edit Barang Masuk</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Barang Masuk</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Barang Masuk</li>
                </ol>
            </nav>
        </div>
        <!-- Quick Action Toolbar Ends-->
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Barang Masuk</h4>
                    {{ Form::open(['route' => ['barangmasuk.edit.update', $barangmasuk->id]]) }}
                    {{ csrf_field() }}
                    <div class="form-group">
                        {{ Form::label('tanggal', 'Tanggal') }}
                        {{ Form::date('tanggal', $barangmasuk->tanggal, ['class' => ($errors->has('tanggal')) ? 'form-control is-invalid' : 'form-control', 'placeholder'=>'Tanggal']) }}
                        <span style="color:red;"> {{$errors->first('tanggal')}} </span>
                    </div>
                    <div class="form-group">
                        {{ Form::label('nama_barang', 'Nama Barang') }}
                        {{ Form::text('nama_barang', $barangmasuk->nama_barang, ['class' => ($errors->has('nama_barang')) ? 'form-control is-invalid' : 'form-control', 'placeholder'=>'Nama Barang']) }}
                        <span style="color:red;"> {{$errors->first('nama_barang')}} </span>
                    </div>
                    <div class="form-group">
                        {{ Form::label('jenis', 'Jenis') }}
                        {{ Form::text('jenis', $barangmasuk->jenis, ['class' => ($errors->has('jenis')) ? 'form-control is-invalid' : 'form-control', 'placeholder'=>'Jenis']) }}
                        <span style="color:red;"> {{$errors->first('jenis')}} </span>
                    </div>
                    <div class="form-group">
                        {{ Form::label('merk', 'Merk') }}
                        {{ Form::text('merk', $barangmasuk->merk, ['class' => ($errors->has('merk')) ? 'form-control is-invalid' : 'form-control', 'placeholder'=>'merk']) }}
                        <span style="color:red;"> {{$errors->first('merk')}} </span>
                    </div>
                    <div class="form-group">
                        {{ Form::label('ukuran', 'Ukuran') }}
                        {{ Form::text('ukuran', $barangmasuk->ukuran, ['class' => ($errors->has('ukuran')) ? 'form-control is-invalid' : 'form-control', 'placeholder'=>'Ukuran']) }}
                        <span style="color:red;"> {{$errors->first('ukuran')}} </span>
                    </div>
                    <div class="form-group">
                        {{ Form::label('jumlah', 'Jumlah') }}
                        {{ Form::text('jumlah', $barangmasuk->jumlah, ['class' => ($errors->has('jumlah')) ? 'form-control is-invalid' : 'form-control', 'placeholder'=>'Jumlah']) }}
                        <span style="color:red;"> {{$errors->first('jumlah')}} </span>
                    </div>
                    <div class="form-group">
                        {{ Form::label('satuan', 'Satuan') }}
                        {{ Form::text('satuan', $barangmasuk->satuan, ['class' => ($errors->has('satuan')) ? 'form-control is-invalid' : 'form-control', 'placeholder'=>'Satuan']) }}
                        <span style="color:red;"> {{$errors->first('satuan')}} </span>
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