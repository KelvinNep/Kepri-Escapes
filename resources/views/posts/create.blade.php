<form action="{{route('post.store')}}" method="post" enctype="multipart/form-data" id="addUserForm">
  @csrf

<div id="ModalAdd" class="modal fade" tabindex="-1" data-bs-backdrop="static">
  <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
       
          <div class="modal-header">
              <h5 class="modal-title">New Post</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
         
          <div class="modal-body">
                  <div class="mb-6">
                    <label for="creator" class="form-label">Creator</label>
                    <input name="creator" type="text" class="form-control" id="creator" required>
                  </div>
                  <div class="mb-6 mt-3">
                    <label class="form-label">Category Name</label>
                    <div class="mb-6">
                      <select for="category" required id="category" name="id_category" class="form-control selectric">
                        <option value="" selected disabled>Choose Category</option>
                        @foreach ($category as $data)
                            <option value="{{ $data->id }}">{{ $data->category_name}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                    <div class="mb-6 mt-3">
                      <label for="post_title" class="form-label">Post Title</label>
                      <input name="post_title" type="text" class="form-control" id="post_title" required>
                    </div>
                    <div class="mb-6 mt-3">
                      <label for="slug" class="form-label">Slug</label>
                      <input name="slug" type="text" class="form-control" id="slug" disabled readonly>
                    </div>

                    <div class=" mt-3">
                    <label for="post_content" class="form-label">Post Content</label>
                      
                        <div>
                          
                          <input id="post_content" type="hidden" name="post_content" required>
                          <trix-editor input="post_content"></trix-editor>
                         
                        </div>
                       
                    </div>
                
                    <div class="mb-6 mt-3">
                      <label class="form-label"> Post Picture</label>
                      <input name="post_picture" class="form-control" type="file" id="post_picture" required>
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

<script>

  const post_title = document.querySelector('#post_title');
  const slug =  document.querySelector('#slug');

  post_title.addEventListener('change', function(){
    fetch('/dashboard/post/autoSlug?post_title=' + post_title.value)
    .then(response => response.json())
    .then(data => slug.value = data.slug)
  });

  document.addEventListener('trix-file-accept', function(e){
    e.preventDefault();
  })
</script>

