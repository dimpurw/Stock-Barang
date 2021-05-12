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
          <div class="row">
            <div class="col-8"><h4 class="card-title mb-5">Tabel Stok Barang</h4></div>
            <div class="col-4 text-right">
              <a href="/stokbarang/add" class="mr-4"><button type="button" class="btn btn-success btn-sm">Tambah Stok Barang</button></a>
            </div>
          </div>
            <!-- <div class="float-md-right">
                <a href="/stokbarang/add"><button type="button" class="btn btn-success btn-sm">Tambah Stok Barang</button></a>
            </div><br>
            <h4 class="card-title text-center mb-5">Tabel Stok Barang</h4> -->
            <table id="example" class="table table-bordered">
              <thead>
                <tr class="table-success">
                  <th>No</th>
                  <th> Nama Barang </th>
                  <th> Jenis </th>
                  <th> Merk </th>
                  <th> Ukuran </th>
                  <th> Stok </th>
                  <th> Satuan </th>
                  <th> Lokasi </th>
                  <th> Aksi </th>
                </tr>
              </thead>
              <tbody>
                @foreach ($stokbarang as $no => $sb)
                <tr>
                  @if ($no === 0) @endif
                  <td> {{$no+1}} </td>
                  <td> {{$sb->nama_barang}} </td>
                  <td> {{$sb->jenis}} </td>
                  <td> {{$sb->merk}} </td>
                  <td> {{$sb->ukuran}} </td>
                  <td> {{$sb->stok}} </td>
                  <td> {{$sb->satuan}} </td>
                  <td> {{$sb->lokasi}} </td>
                  <td> <ul class="list-inline m-0">
                            <li class="list-inline-item">
                                <button class="btn btn-primary btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Add"><i class="fa fa-table"></i></button>
                            </li>
                            <li class="list-inline-item">
                                <a href="/stokbarang/edit/{{$sb->id}}"><button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button></a>
                            </li>
                            <li class="list-inline-item">
                              {{ Form::open(['url' => '/stokbarang/delete/'.$sb->id, 'method' => 'delete']) }}
                                    {{ Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm rounded-0']) }}
                              {!! Form::close() !!}
                            </li>
                        </ul>
                  </td>
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