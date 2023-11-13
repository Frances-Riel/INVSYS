<!-- Add Modal -->
<div class="modal fade" id="addnew" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add New Product</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
          <div class="modal-body">
              <form action="{{ URL::to('save') }}" method="POST">
                  {{ csrf_field() }}
                  <div class="mb-3 row">
                      <label for="name" class="col-sm-2 col-form-label">Name</label>
                      <div class="col-auto">
                          <input type="text" name="name" class="form-control" placeholder="Name" required>
                      </div>
                  </div>
                  <div class="mb-3 row">
                      <label for="qty" class="col-sm-2 col-form-label">Qty</label>
                      <div class="col-auto">
                          <input type="text" name="qty" class="form-control" placeholder="Qty" required>
                      </div>
                  </div>
                  <div class="mb-3 row">
                      <label for="category" class="col-sm-2 col-form-label">Category</label>
                      <div class="col-auto">
                          <select class="form-select" name="category">
                              @foreach($categories as $category)
                                  <option value="{{ $category->id }}">{{ $category->title }}</option>
                              @endforeach
                          </select>
                      </div>
                  </div>
                  <div class="mb-3 row">
                      <label for="brand" class="col-sm-2 col-form-label">Brand</label>
                      <div class="col-auto">
                          <select class="form-select" name="brand">
                              @foreach($brands as $brand)
                                  <option value="{{ $brand->id }}">{{ $brand->brand }}</option>
                              @endforeach
                          </select>
                      </div>
                  </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="bi bi-x-circle-fill"></i> Close</button>
          <button type="submit" class="btn btn-primary"><i class="bi bi-send"></i> Save</button>
        </div>
      </div>
    </div>
  </div>
