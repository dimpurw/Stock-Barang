@extends('layouts.app')

@section('content')
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">Edit Stock Barang</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Stock Barang</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Stock Barang</li>
                </ol>
            </nav>
        </div>
        <!-- Quick Action Toolbar Ends-->
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Stock Barang</h4>
                    {{ Form::open(['url' => '/stokbarang/edit/'.$stokbarang->id.'/update', 'method' => 'post']) }}
                    {{ csrf_field() }}
                    <div class="form-group">
                        {{ Form::label('nama_barang', 'Nama Barang') }}
                        {{ Form::text('nama_barang', $stokbarang->nama_barang, ['class' => ($errors->has('nama_barang')) ? 'form-control is-invalid' : 'form-control', 'placeholder'=>'Nama Barang']) }}
                        <span style="color:red;"> {{$errors->first('nama_barang')}} </span>
                    </div>
                    <div class="form-group">
                        {{ Form::label('jenis', 'Jenis') }}
                        {{ Form::text('jenis', $stokbarang->jenis, ['class' => ($errors->has('jenis')) ? 'form-control is-invalid' : 'form-control', 'placeholder'=>'Jenis']) }}
                        <span style="color:red;"> {{$errors->first('jenis')}} </span>
                    </div>
                    <div class="form-group">
                        {{ Form::label('merk', 'Merk') }}
                        {{ Form::text('merk', $stokbarang->merk, ['class' => ($errors->has('merk')) ? 'form-control is-invalid' : 'form-control', 'placeholder'=>'merk']) }}
                        <span style="color:red;"> {{$errors->first('merk')}} </span>
                    </div>
                    <div class="form-group">
                        {{ Form::label('ukuran', 'Ukuran') }}
                        {{ Form::text('ukuran', $stokbarang->ukuran, ['class' => ($errors->has('ukuran')) ? 'form-control is-invalid' : 'form-control', 'placeholder'=>'Ukuran']) }}
                        <span style="color:red;"> {{$errors->first('ukuran')}} </span>
                    </div>
                    <div class="form-group">
                        {{ Form::label('stok', 'Stok') }}
                        {{ Form::text('stok', $stokbarang->stok, ['class' => ($errors->has('stok')) ? 'form-control is-invalid' : 'form-control', 'placeholder'=>'Stok']) }}
                        <span style="color:red;"> {{$errors->first('stok')}} </span>
                    </div>
                    <div class="form-group">
                        {{ Form::label('satuan', 'Satuan') }}
                        {{ Form::text('satuan', $stokbarang->satuan, ['class' => ($errors->has('satuan')) ? 'form-control is-invalid' : 'form-control', 'placeholder'=>'Satuan']) }}
                        <span style="color:red;"> {{$errors->first('satuan')}} </span>
                    </div>
                    <div class="form-group">
                        {{ Form::label('lokasi', 'Lokasi') }}
                        {{ Form::text('lokasi', $stokbarang->lokasi, ['class' => ($errors->has('lokasi')) ? 'form-control is-invalid' : 'form-control', 'placeholder'=>'Lokasi']) }}
                        <span style="color:red;"> {{$errors->first('lokasi')}} </span>
                    </div>
                    {{ Form::submit('Save', ['class' => 'btn btn-primary mr-2']) }}
                    <a href="/stokbarang"><button type="button" class="btn btn-light">Cancel</button></a>
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