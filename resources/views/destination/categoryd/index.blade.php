@extends('includes.master')
@include('destination.categoryd.create')
@include('destination.categoryd.edit')
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
            <h4>Destination Category Data</h4>
        </div>
      </div>
  <section class="section">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="card">
                      <div class="card-body">
                          <h5 class="card-title">Destination Category</h5>
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
                                    @foreach ($categoryd as $categoryItem)

                                      <tr>
                                        <input type="hidden" class="delete_id" value="{{ $categoryItem->id}}">
                                          <td>{{ $loop->index+1}}</td>
                                          <td>{{ $categoryItem->id}}</td>
                                          <td>{{ $categoryItem->category_name}}</td>
                                          <td>
                                              <button class="btn btn-primary" data-bs-toggle="modal"
                                                  data-bs-target="#ModalEdit{{$categoryItem->id}}">Edit</button>
                                                  <form action="/dashboard/destcategory/{{ $categoryItem->id }}" method="POST" class="d-inline">
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




 
</main>
@endsection

