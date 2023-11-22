<form action="{{route('postcategory.store')}}" method="post" enctype="multipart/form-data" id="addUserForm">
  @csrf

<div id="ModalAdd" class="modal fade" tabindex="-1" data-bs-backdrop="static">
  <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
       
          <div class="modal-header">
              <h5 class="modal-title">New Category</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
         
          <div class="modal-body">
                  <div class="mb-6">
                    <label for="category_name" class="form-label">Category Name</label>
                    <input name="category_name" type="text" class="form-control" id="category_name" required>
                  </div>
                 
            </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Create</button>
          </div>
        </form>
      </div>
  </div>
</div>

