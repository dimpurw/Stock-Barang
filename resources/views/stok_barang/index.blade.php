@extends('layouts.app')

@section('content')
<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">Stok Barang</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Stok Barang</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data Stok Barang</li>
            </ol>
        </nav>
    </div>
    <!-- Quick Action Toolbar Ends-->
    <div class="col-lg-12 stretch-card grid-margin">
        <div class="card">
          <div class="card-body">
          
            <div class="float-md-right">
                <a href="/stockbarang/add"><button type="button" class="btn btn-success btn-sm">Tambah Stok Barang</button></a>
            </div><br>
            <h4 class="card-title text-center mb-5">Tabel Stok Barang</h4>
            <table id="example" class="table table-bordered">
              <thead>
                <tr class="table-success">
                  <th>No</th>
                  <th> Nama Barang </th>
                  <th> Jenis </th>
                  <th> Merk </th>
                  <th> Ukuran </th>
                  <th> Stock </th>
                  <th> Satuan </th>
                  <th> Lokasi </th>
                </tr>
              </thead>
              <tbody>
                @foreach ($stockbarang as $no => $sb)
                <tr>
                  @if ($no === 0) @endif
                  <td> {{$no+1}} </td>
                  <td> {{$sb->nama_barang}} </td>
                  <td> {{$sb->jenis}} </td>
                  <td> {{$sb->merk}} </td>
                  <td> {{$sb->ukuran}} </td>
                  <td> {{$sb->stock}} </td>
                  <td> {{$sb->satuan}} </td>
                  <td> {{$sb->lokasi}} </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
  </div>
  <!-- content-wrapper ends -->
  <!-- partial:partials/_footer.html -->
</div>
@endsection