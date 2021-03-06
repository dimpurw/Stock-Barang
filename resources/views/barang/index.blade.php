@extends('layouts.app')

@section('content')
<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">Barang</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Barang</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data Barang</li>
            </ol>
        </nav>
    </div>
    <!-- Quick Action Toolbar Ends-->
    <div class="col-lg-12 stretch-card grid-margin">
        <div class="card">
          <div class="card-body">
          <div class="row">
            <div class="col-8"><h4 class="card-title mb-5">Tabel Barang</h4></div>
            <div class="col-4 text-right">
              <a href="{{ route('barang.add') }}" class="mr-4"><button type="button" class="btn btn-success btn-sm">Tambah Barang</button></a>
            </div>
            @if (session('gagal'))
              <div class="alert alert-danger" role="alert">
                  {{ session('gagal') }}
              </div>
            @endif
            @if (session('succes'))
              <div class="alert alert-success" role="alert">
                  {{ session('succes') }}
              </div>
            @endif
          </div>
            <!-- <div class="float-md-right">
                <a href="/stokbarang/add"><button type="button" class="btn btn-success btn-sm">Tambah Stok Barang</button></a>
            </div><br>
            <h4 class="card-title text-center mb-5">Tabel Stok Barang</h4> -->
            <table id="StokBarang" class="table table-bordered">
              <thead>
                <tr class="table-success">
                  <th>No</th>
                  <th> Nama Barang </th>
                  <th> Satuan </th>
                  <th> Harga </th>
                  <th> Aksi </th>
                </tr>
              </thead>
              <tbody>
                @foreach ($barang as $no => $sb)
                <tr>
                  @if ($no === 0) @endif
                  <td> {{$no+1}} </td>
                  <td> {{$sb->nama_barang}} </td>
                  <td> {{$sb->unit->satuan}} </td>
                  <td> {{$sb->harga}} </td>
                  <td> <ul class="list-inline m-0">
                            <li class="list-inline-item">
                                <button class="btn btn-outline-info btn-sm rounded-0" type="button" data-toggle="modal" data-target="#item{{ $sb->id }}" data-placement="top" title="Barcode"><i class="fa fa-barcode"></i></button></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="{{ route('barang.edit', Crypt::encrypt($sb->id)) }}"><button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button></a>
                            </li>
                            <li class="list-inline-item">
                              {{ Form::open(['route' => ['barang.delete', Crypt::encrypt($sb->id)]]) }}
                                    {{ csrf_field() }}
                                    {{ Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm rounded-0']) }}
                              {!! Form::close() !!}
                            </li>
                        </ul>
                  </td>
                </tr>
                <!-- Modal -->
                <div class="modal fade" id="item{{ $sb->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">{{$sb->nama_barang}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <h5>{{$sb->nama_barang}}</h5>
                        <h5>Harga: {{$sb->harga}}</h5>
                        <div class="container" style="width: 65%;">{!! DNS1D::getBarcodeHTML(ucwords($sb->kode_barang), 'C128') !!}</div>
                        <p style="letter-spacing: 5px;">{{$sb->kode_barang}}</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>
                  </div>
                </div>
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