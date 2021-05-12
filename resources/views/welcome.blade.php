@extends('layouts.app')

@section('content')
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
    <!-- Quick Action Toolbar Ends-->
    <div class="row">
        <div class="col-md-12 grid-margin">
        <div class="card">
            <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                <div class="d-sm-flex align-items-baseline report-summary-header">
                    <h5 class="font-weight-semibold">Report Summary</h5> <span class="ml-auto">Updated Report</span> <button class="btn btn-icons border-0 p-2"><i class="icon-refresh"></i></button>
                </div>
                </div>
            </div>
            <div class="row report-inner-cards-wrapper">
                <div class="col-md-6 col-xl report-inner-card">
                <div class="inner-card-text">
                    <span class="report-title">Stock Barang</span>
                    <h4>95458</h4>
                    <a href="#" class="report-count">detail stock barang</a>
                </div>
                <div class="inner-card-icon bg-info">
                    <i class="icon-briefcase"></i>
                </div>
                </div>
                <div class=" col-md -6 col-xl report-inner-card">
                <div class="inner-card-text">
                    <span class="report-title">Barang Masuk</span>
                    <h4>32123</h4>
                    <a href="" class="report-count">detail barang masuk</a>
                </div>
                <div class="inner-card-icon bg-success">
                    <i class=" icon-action-redo"></i>
                </div>
                </div>
                <div class="col-md-6 col-xl report-inner-card">
                <div class="inner-card-text">
                    <span class="report-title">Barang Keluar</span>
                    <h4>2650</h4>
                    <a href="" class="report-count">detail barang keluar</a>
                </div>
                <div class="inner-card-icon bg-danger">
                    <i class="icon-action-undo"></i>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 grid-margin">
        <div class="card">
            <div class="card-body">
            <div class="row income-expense-summary-chart-text">
                <div class="col-xl-4">
                <h5>Income And Expenses Summary</h5>
                <p class="small text-muted">A comparison of people who mark themselves of their ineterest from the date range given above. Learn more.</p>
                </div>
            </div>
            <div class="row income-expense-summary-chart mt-3">
                <div class="col-md-12">
                <div class="ct-chart" id="income-expense-summary-chart"></div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
</div>
@endsection