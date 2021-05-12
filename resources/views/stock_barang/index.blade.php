@extends('layouts.app')

@section('content')
<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">Stock Barang</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Stock Barang</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data Stock Barang</li>
            </ol>
        </nav>
    </div>
    <!-- Quick Action Toolbar Ends-->
    <div class="col-lg-12 stretch-card grid-margin">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Tabel Stock Barang</h4>
            <table id="example" class="table table-bordered">
              <thead>
                <tr class="table-success">
                  <th>No</th>
                  <th> First name </th>
                  <th> Product </th>
                  <th> Amount </th>
                  <th> Deadline </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td> 1 </td>
                  <td> Herman Beck </td>
                  <td> Photoshop </td>
                  <td> $ 77.99 </td>
                  <td> May 15, 2015 </td>
                </tr>
                <tr>
                  <td> 2 </td>
                  <td> Messsy Adam </td>
                  <td> Flash </td>
                  <td> $245.30 </td>
                  <td> July 1, 2015 </td>
                </tr>
                <tr>
                  <td> 3 </td>
                  <td> John Richards </td>
                  <td> Premeire </td>
                  <td> $138.00 </td>
                  <td> Apr 12, 2015 </td>
                </tr>
                <tr>
                  <td> 4 </td>
                  <td> Peter Meggik </td>
                  <td> After effects </td>
                  <td> $ 77.99 </td>
                  <td> May 15, 2015 </td>
                </tr>
                <tr>
                  <td> 5 </td>
                  <td> Edward </td>
                  <td> Illustrator </td>
                  <td> $ 160.25 </td>
                  <td> May 03, 2015 </td>
                </tr>
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