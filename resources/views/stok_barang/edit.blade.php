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
            <form class="forms-sample mt-5">
                <div class="form-group">
                    <label for="exampleInputName1">Name</label>
                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail3">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Password">
                </div>
                <div class="form-group">
                <label for="exampleSelectGender">Gender</label>
                <select class="form-control" id="exampleSelectGender">
                    <option>Male</option>
                    <option>Female</option>
                </select>
                </div>
                <div class="form-group">
                <label>File upload</label>
                <input type="file" name="img[]" class="file-upload-default">
                <div class="input-group col-xs-12">
                    <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                    <span class="input-group-append">
                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                    </span>
                </div>
                </div>
                <div class="form-group">
                <label for="exampleInputCity1">City</label>
                <input type="text" class="form-control" id="exampleInputCity1" placeholder="Location">
                </div>
                <div class="form-group">
                <label for="exampleTextarea1">Textarea</label>
                <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
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
    <!-- partial -->
</div>
<!-- main-panel ends -->
@endsection