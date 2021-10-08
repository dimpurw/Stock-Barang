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
                    {{ Form::open(['route' => ['barang.edit.update', $barang->id]]) }}
                    {{ csrf_field() }}
                    <div class="form-group">
                        {{ Form::label('nama_barang', 'Nama Barang') }}
                        {{ Form::text('nama_barang', $barang->nama_barang, ['class' => ($errors->has('nama_barang')) ? 'form-control is-invalid' : 'form-control', 'placeholder'=>'Nama Barang']) }}
                        <span style="color:red;"> {{$errors->first('nama_barang')}} </span>
                    </div>
                    <div class="form-group">
                        {{ Form::label('satuan', 'Satuan') }}
                        {{ Form::text('satuan', $barang->satuan, ['class' => ($errors->has('satuan')) ? 'form-control is-invalid' : 'form-control', 'placeholder'=>'Satuan']) }}
                        <span style="color:red;"> {{$errors->first('satuan')}} </span>
                    </div>
                    <div class="form-group">
                        {{ Form::label('harga', 'Harga') }}
                        {{ Form::text('harga', $barang->harga, ['class' => ($errors->has('harga')) ? 'form-control is-invalid' : 'form-control', 'placeholder'=>'Harga']) }}
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
    <!-- partial -->
</div>
<!-- main-panel ends -->
@endsection