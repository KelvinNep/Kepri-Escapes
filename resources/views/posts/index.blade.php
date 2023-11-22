@extends('includes.master')
@include('posts.create')
@section('content')
<style>
    .btn-info {
    --bs-btn-color: #fff; 
    }
    .btn-info:hover {
    --bs-btn-color: #fff;
    }
</style>
<main id="main" class="main">
    <div class="section">
        <div class="section-header">
            <h4>Post Data</h4>
        </div>
      </div>
  <section class="section">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="card">
                      <div class="card-body">
                          <h5 class="card-title">Post</h5>
                          <div class="row justify-content-end">
                            <div class="col mt-3">
                                <input type="text" class="form-control" id="searchInput"
                                    placeholder="Search Post..." style="width: 300px;">
                            </div>
                              <div class="col-auto">
                                  <button class="btn btn-success m-3" data-bs-toggle="modal"
                                      data-bs-target="#ModalAdd">Add Post</button>
                              </div>
                          </div>
                          <!-- Table -->
                          <div class="table-responsive">
                              
                              <!-- Table -->
                              <table class="table" id="data">
                                  <thead>
                                      <tr>
                                        <th>No</th>
                                        <th>ID</th>
                                        <th>Creator</th>
                                        <th>Category</th>
                                        <th>Post Title</th>
                                        {{-- <th>Post Content</th> --}}
                                        {{-- <th>Slug</th> --}}
                                        {{-- <th>Post Picture</th> --}}
                                        <th>Action</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    @foreach ($post as $postItem)

                                      <tr>
                                        <input type="hidden" class="delete_id" value="{{ $postItem->id}}">
                                          <td>{{ $loop->index+1}}</td>
                                          <td>{{ $postItem->id}}</td>
                                          <td>{{ $postItem->creator}}</td>
                                          <td>{{ $postItem->Category->category_name}}</td>
                                          <td>{{ $postItem->post_title}}</td>
                                          {{-- <td>{{ $postItem->post_content}}</td> --}}
                                          {{-- <td>{{ $postItem->slug}}</td> --}}
                                          {{-- <td>{{ $postItem->post_picture}}</td> --}}
                                          <td>
                                            
                                              <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#ViewModal{{$postItem->id}}">View</button>
                                              <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalEdita-{{$postItem->slug}}">Edit</button>
                                                  <form action="/dashboard/post/{{ $postItem->slug }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger show_confirm" data-bs-toggle="modal" id="delete">Delete</button>
                                            </form>
                                          </td>
                                      </tr>
                                      @endforeach
                                    
                                      <!-- Add other rows as needed -->
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
{{-- View --}}
@foreach ($post as $postItem)

@php
  $picture = str_replace('public', 'storage', $postItem->post_picture);
  @endphp

<div id="ViewModal{{$postItem->id}}" class="modal fade" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Post Detail</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                  <div class="mb-3">
                    <label class="form-label">Post ID: {{ $postItem->id }}</label> 
                </div>
                <div class="mb-3">
                    <label class="form-label">Creator: {{ $postItem->creator }}</label>
                </div>
                <div class="mb-3">
                    <label class="form-label">Category: {{ $postItem->Category->category_name }}</label>
                </div>
                <div class="mb-3">
                    <label class="form-label">Post Title: {{ $postItem->post_title }}</label>
                </div>
                <div class="mb-3">
                    <label class="form-label">Post Content: {!! $postItem->post_content !!}</label>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Slug: {{ $postItem->slug }}</label>
                </div>
                <div class="mb-3">
                    <label class="form-label">Post Picture:</label>
                     <img src="{{ asset($picture) }}" alt="Post Picture" style="max-width: 100%;">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
  </div>
@endforeach

{{-- Edit --}}
@foreach ($post as $postItemat)
<form action="{{route('post.update', $postItemat->slug)}}" method="post" enctype="multipart/form-data" id="addUserForm">
    @csrf
    @method('put')
  <div id="ModalEdita-{{$postItemat->slug}}" class="modal fade" tabindex="-1" data-bs-backdrop="static">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
         
            <div class="modal-header">
                <h5 class="modal-title">Edit Post</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
           
            <div class="modal-body">
                    <div class="mb-6">
                      <label for="creator" class="form-label">Creator</label>
                      <input name="creator" type="text" class="form-control" id="creator" value="{{$postItemat->creator}}" required>
                    </div>
                    <div class="mb-6 mt-3">
                      <label class="form-label">Category Name</label>
                      <div class="mb-6">
                        <select for="category" required id="category" name="id_category" class="form-control selectric">
                          <option value="" selected disabled>Choose Category</option>

                          @foreach ($category as $categoryItem) 
                            @if ($postItemat->id_category == $categoryItem->id)
                                <option value="{{ $categoryItem->id }}" selected>{{ $categoryItem->category_name}}</option>
                                @else
                                <option value="{{ $categoryItem->id }}">{{ $categoryItem->category_name}}</option>
                            @endif
                          @endforeach

                        </select>
                      </div>
                    </div>
                      <div class="mb-6 mt-3">
                        <label for="post_title" class="form-label">Post Title</label>
                        <input name="post_title" type="text" class="form-control" id="post_titlelu"  value="{{$postItemat->post_title}}" required>
                      </div>
                      <div class="mb-6 mt-3">
                        <label for="slug" class="form-label">Slug</label>
                        <input name="slug" type="text" class="form-control" id="sluglu"  value="{{$postItemat->slug}}" disabled readonly>
                      </div>
  
                      <div class=" mt-3">
                      <label for="post_content" class="form-label">Post Content</label>
                      <div>
                        <input id="post_content" type="" name="post_content" value="{{ $postItemat->post_content}}" >
                        <trix-editor input="post_content">
                          
                        </trix-editor>
                      </div>
                         
                      </div>
                  
                      <div class="mb-6 mt-3">
                        <label class="form-label"> Post Picture</label>
                        <input name="post_picture" class="form-control" type="file" id="post_picture_{{$postItemat->slug}}" required>
                      </div>
                   
              </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Edit</button>
            </div>
          </form>
        </div>
    </div>
  </div>
@endforeach

<script>
  const post_title = document.querySelector('#post_titlelu');
  const slug =  document.querySelector('#sluglu');

  post_title.addEventListener('change', function(){
    fetch('/dashboard/post/autoSlug?post_title=' + post_title.value)
    .then(response => response.json())
    .then(data => slug.value = data.slug)
  });

  document.addEventListener('trix-file-accept', function(e){
    e.preventDefault();
  })


    document.addEventListener('DOMContentLoaded', function () {
    // Get the file input element
    var fileInput = document.getElementById('post_picture_{{$postItemat->slug}}');

    // Set the initial value from PHP variable
    fileInput.value = {!! json_encode($postItemat->post_picture) !!};
});
</script>  

</main>

@endsection

