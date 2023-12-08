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
            <h2>Category Table
                <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#addnewCat">
                  <i class="bi bi-clipboard2-plus-fill"></i> Add New Category
                </button>
                <a class="btn btn-primary float-end" href="{{ route('logout') }}" role="button">Logout</a>
                <a class="btn btn-primary float-end" href="{{ route('brand') }}" role="button">Brand</a>
                <a class="btn btn-primary float-end" href="{{ route('home') }}" role="button">Product</a>
                <!--
                <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#addnewCat">
                  <i class="bi bi-clipboard2-plus-fill"></i> Add New Category
                </button>
                <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#addnewBra">
                  <i class="bi bi-clipboard2-plus-fill"></i> Add New Brand
                </button>-->
            </h2>
            <table class="table table-bordered table-striped">
                <thead>
                    <th>Title</th>
                </thead>
                <tbody>
                    @foreach($categories as $cat)
                        <tr>
                            <td>{{$cat->title}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@include('catbra.modal')

</body>
</html>
