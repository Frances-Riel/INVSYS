<!-- Add Modal -->
<div class="modal fade" id="addnewCat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add New Category</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
          <div class="modal-body">
              <form action="{{ URL::to('savecat') }}" method="POST">
                  {{ csrf_field() }}
                  <div class="mb-3 row">
                      <label for="name" class="col-sm-2 col-form-label">Category</label>
                      <div class="col-auto">
                          <input type="text" name="name" class="form-control" placeholder="Category" required>
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
