@extends('layouts.app')

@section('content')
<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">Tambah Stok Barang</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Stok Barang</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah Stok Barang</li>
            </ol>
        </nav>
    </div>
    <!-- Quick Action Toolbar Ends-->
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Tambah Stok Barang</h4>
            {{ Form::open(['route' => ['stokbarang.add.post']]) }}
              {{ csrf_field() }}
              <div class="form-group">
                {{ Form::label('nama_barang', 'Nama Barang') }}
                {{ Form::text('nama_barang', null, ['class' => ($errors->has('nama_barang')) ? 'form-control is-invalid' : 'form-control', 'placeholder'=>'Nama Barang']) }}
                <span style="color:red;"> {{$errors->first('nama_barang')}} </span>
              </div>
              <div class="form-group">
                {{ Form::label('jenis', 'Jenis') }}
                {{ Form::text('jenis', null, ['class' => ($errors->has('jenis')) ? 'form-control is-invalid' : 'form-control', 'placeholder'=>'Jenis']) }}
                <span style="color:red;"> {{$errors->first('jenis')}} </span>
              </div>
              <div class="form-group">
                {{ Form::label('merk', 'Merk') }}
                {{ Form::text('merk', null, ['class' => ($errors->has('merk')) ? 'form-control is-invalid' : 'form-control', 'placeholder'=>'merk']) }}
                <span style="color:red;"> {{$errors->first('merk')}} </span>
              </div>
              <div class="form-group">
                {{ Form::label('ukuran', 'Ukuran') }}
                {{ Form::text('ukuran', null, ['class' => ($errors->has('ukuran')) ? 'form-control is-invalid' : 'form-control', 'placeholder'=>'Ukuran']) }}
                <span style="color:red;"> {{$errors->first('ukuran')}} </span>
              </div>
              <div class="form-group">
                {{ Form::label('stok', 'Stok') }}
                {{ Form::text('stok', null, ['class' => ($errors->has('stok')) ? 'form-control is-invalid' : 'form-control', 'placeholder'=>'Stok']) }}
                <span style="color:red;"> {{$errors->first('stok')}} </span>
              </div>
              <div class="form-group">
                {{ Form::label('satuan', 'Satuan') }}
                {{ Form::text('satuan', null, ['class' => ($errors->has('satuan')) ? 'form-control is-invalid' : 'form-control', 'placeholder'=>'Satuan']) }}
                <span style="color:red;"> {{$errors->first('satuan')}} </span>
              </div>
              <div class="form-group">
                {{ Form::label('lokasi', 'Lokasi') }}
                {{ Form::text('lokasi', null, ['class' => ($errors->has('lokasi')) ? 'form-control is-invalid' : 'form-control', 'placeholder'=>'Lokasi']) }}
                <span style="color:red;"> {{$errors->first('lokasi')}} </span>
              </div>
              {{ Form::submit('Save', ['class' => 'btn btn-primary mr-2']) }}
              <a href="{{ route('stokbarang') }}"><button type="button" class="btn btn-light">Cancel</button></a>
            {{ Form::close() }}
          </div>
        </div>
      </div>
  </div>
  <!-- content-wrapper ends -->
  <!-- partial:partials/_footer.html -->
</div>
@endsection