@extends('layouts.app')

@section('content')
<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">Tambah Barang</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Barang</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah Barang</li>
            </ol>
        </nav>
    </div>
    <!-- Quick Action Toolbar Ends-->
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Tambah Barang</h4>
            {{ Form::open(['route' => ['barang.add.post']]) }}
              {{ csrf_field() }}
              <div class="form-group">
                {{ Form::label('nama_barang', 'Nama Barang') }}
                {{ Form::text('nama_barang', null, ['class' => ($errors->has('nama_barang')) ? 'form-control is-invalid' : 'form-control', 'placeholder'=>'Nama Barang']) }}
                <span style="color:red;"> {{$errors->first('nama_barang')}} </span>
              </div>
              <div class="form-group">
                {{ Form::label('unit_id', 'Satuan') }}
                {!! Form::select('unit_id', $units, null, ['class' => 'form-control', 'placeholder' => 'Pilih Satuan...']) !!}
              </div>
              <div class="form-group">
                {{ Form::label('harga', 'Harga') }}
                {{ Form::number('harga', null, ['class' => ($errors->has('harga')) ? 'form-control is-invalid' : 'form-control', 'placeholder'=>'Harga']) }}
                <span style="color:red;"> {{$errors->first('harga')}} </span>
              </div>
              {{ Form::submit('Save', ['class' => 'btn btn-primary mr-2']) }}
              <a href="{{ route('barang') }}"><button type="button" class="btn btn-light">Cancel</button></a>
            {{ Form::close() }}
          </div>
        </div>
      </div>
  </div>
  <!-- content-wrapper ends -->
  <!-- partial:partials/_footer.html -->
</div>
@endsection