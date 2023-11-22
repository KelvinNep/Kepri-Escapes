@extends('includes.master')
@include('posts.categoryp.create')
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
            <h4>Post Category Data</h4>
        </div>
      </div>
  <section class="section">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="card">
                      <div class="card-body">
                          <h5 class="card-title">Post Category</h5>
                          <div class="row justify-content-end">
                            <div class="col mt-3">
                                <input type="text" class="form-control" id="searchInput"
                                    placeholder="Search Post..." style="width: 300px;">
                            </div>
                              <div class="col-auto">
                                  <button class="btn btn-success m-3" data-bs-toggle="modal"
                                      data-bs-target="#ModalAdd">Add Category</button>
                              </div>
                          </div>
                          <!-- Table -->
                          <div class="table-responsive">
                              <!-- Search input -->
                              
                              <!-- Table -->
                              <table class="table" id="data">
                                  <thead>
                                      <tr>
                                        <th>No</th>
                                        <th>ID</th>
                                        <th>Category Name</th>
                                        <th>Action</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    @foreach ($category as $categoryItem)
                                      <tr>
                                        <input type="hidden" class="delete_id" value="{{ $categoryItem->id}}">
                                          <td>{{ $loop->index+1}}</td>
                                          <td>{{ $categoryItem->id}}</td>
                                          <td>{{ $categoryItem->category_name}}</td>
                                          <td>
                                              <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalEdit{{$categoryItem->id}}">Edit</button>
                                                  <form action="{{route('postcategory.destroy', $categoryItem->id)}}" method="POST" class="d-inline">
                                                    @csrf   
                                                    @method('DELETE')
                                                    <button class="btn btn-danger show_confirm" data-bs-toggle="modal" id="delete">Delete</button>
                                            </form>
                                          </td>
                                      </tr>
                                      @endforeach
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
{{-- Modal Edit --}}
@foreach ($category as $categoryItem)
<form action="{{route('postcategory.update', $categoryItem->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
  
  <div id="ModalEdit{{$categoryItem->id}}" class="modal fade" tabindex="-1" data-bs-backdrop="static">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Edit Category</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-6">
            <label for="category_name" class="form-label">Category Name</label>
            <input name="category_name" type="text" class="form-control" id="category_name" value="{{$categoryItem->category_name}}" required>
          </div>       
        </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Change</button>
          </div>
        </div>
    </div>
  </div>
</form>
@endforeach
 
  



 
</main>
@endsection

