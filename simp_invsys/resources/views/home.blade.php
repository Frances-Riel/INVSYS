<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>CLIS</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>
<body>
<div class="container">
    <h1 class="page-header text-center">COMLAB INVENTORY SYSTEM</h1>
    <div class="row">
        <div class="col-md-12">
            <h2>Product Table
                <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#addnew">
                  <i class="bi bi-clipboard2-plus-fill"></i> Add New product
                </button><!--
                <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#addnewCat">
                  <i class="bi bi-clipboard2-plus-fill"></i> Add New Category
                </button>
                <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#addnewBra">
                  <i class="bi bi-clipboard2-plus-fill"></i> Add New Brand
                </button>-->
            </h2>
            <table class="table table-bordered table-striped">
                <thead>
                    <th>name</th>
                    <th>qty</th>
                    <th>category</th>
                    <th>brand</th>
                </thead>
                <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>{{$product->name}}</td>
                            <td>{{$product->qty}}</td>
                            <td>{{$product->title}}</td>
                            <td>{{$product->brand}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@include('modal')

</body>
</html>
