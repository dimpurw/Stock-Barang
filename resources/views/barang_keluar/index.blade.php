@extends('layouts.app')

@section('content')
<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">Barang Keluar</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Barang Keluar</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data Barang Keluar</li>
            </ol>
        </nav>
    </div>
    <!-- Quick Action Toolbar Ends-->
    <div class="col-lg-12 stretch-card grid-margin">
        <div class="card">
          <div class="card-body">
          <div class="row">
            <div class="col-8"><h4 class="card-title mb-5">Tabel Barang Keluar</h4></div>
            <div class="col-4 text-right">
              <a href="{{ route('barangkeluar.add') }}" class="mr-4"><button type="button" class="btn btn-success btn-sm">Tambah Stok Barang</button></a>
            </div>
          </div>
            <table id="BarangKeluar" class="table table-bordered display" style="width:100%">
              <thead>
                <tr class="table-success">
                  <th>No</th>
                  <th> Tanggal </th>
                  <th> Nama Barang </th>
                  <th> Jenis </th>
                  <th> Merk </th>
                  <th> Ukuran </th>
                  <th> Jumlah </th>
                  <th> Penerima </th>
                  <th> Aksi </th>
                </tr>
              </thead>
              <tbody>
                @foreach ($barangkeluar as $no => $bk)
                <tr>
                  @if ($no === 0) @endif
                  <td> {{$no+1}} </td>
                  <td> {{$bk->tanggal}} </td>
                  <td> {{$bk->nama_barang}} </td>
                  <td> {{$bk->jenis}} </td>
                  <td> {{$bk->merk}} </td>
                  <td> {{$bk->ukuran}} </td>
                  <td> {{$bk->jumlah}} </td>
                  <td> {{$bk->penerima}} </td>
                  <td> <ul class="list-inline m-0">
                            <li class="list-inline-item">
                                <a href="{{ route('barangkeluar.edit', Crypt::encrypt($bk->id)) }}"><button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button></a>
                            </li>
                            <li class="list-inline-item">
                              {{ Form::open(['route' => ['barangkeluar.delete', Crypt::encrypt($bk->id)]]) }}
                                    {{ csrf_field() }}
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