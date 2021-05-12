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
            <form class="forms-sample mt-5" action="/stockbarang/add/post" method="POST">
              @csrf
              <div class="form-group">
                <label for="namabarang">Nama Barang</label>
                <input type="text" name="nama_barang" class="form-control @error('nama_barang') is-invalid @enderror" id="namabarang" placeholder="Nama Barang" value="{{ old('nama_barang') }}">
                <span style="color:red;"> {{$errors->first('nama_barang')}} </span>
              </div>
              <div class="form-group">
                <label for="jenis">Jenis</label>
                <input type="text" name="jenis" class="form-control @error('jenis') is-invalid @enderror" id="jenis" placeholder="Jenis" value="{{ old('jenis') }}">
                <span style="color:red;"> {{$errors->first('jenis')}} </span>
              </div>
              <div class="form-group">
                <label for="merk">Merk</label>
                <input type="text" name="merk" class="form-control @error('merk') is-invalid @enderror" id="merk" placeholder="Merk" value="{{ old('merk') }}">
                <span style="color:red;"> {{$errors->first('merk')}} </span>
              </div>
              <div class="form-group">
                <label for="ukuran">Ukuran</label>
                <input type="text" name="ukuran" class="form-control @error('ukuran') is-invalid @enderror" id="ukuran" placeholder="Ukuran" value="{{ old('ukuran') }}">
                <span style="color:red;"> {{$errors->first('ukuran')}} </span>
              </div>
              <div class="form-group">
                <label for="stock">Stock</label>
                <input type="number" name="stock" class="form-control @error('stock') is-invalid @enderror" id="stock" placeholder="Stock" value="{{ old('stock') }}">
                <span style="color:red;"> {{$errors->first('stock')}} </span>
              </div>
              <div class="form-group">
                <label for="satuan">Satuan</label>
                <input type="text" name="satuan" class="form-control @error('satuan') is-invalid @enderror" id="satuan" placeholder="Satuan" value="{{ old('satuan') }}">
                <span style="color:red;"> {{$errors->first('satuan')}} </span>
              </div>
              <div class="form-group">
                <label for="lokasi">Lokasi</label>
                <input type="text" name="lokasi" class="form-control @error('lokasi') is-invalid @enderror" id="lokasi" placeholder="Lokasi" value="{{ old('lokasi') }}">
                <span style="color:red;"> {{$errors->first('lokasi')}} </span>
              </div>
              <button type="submit" class="btn btn-primary mr-2">Submit</button>
              <a href="/stockbarang"><button type="button" class="btn btn-light">Cancel</button></a>
            </form>
          </div>
        </div>
      </div>
  </div>
  <!-- content-wrapper ends -->
  <!-- partial:partials/_footer.html -->
</div>
@endsection