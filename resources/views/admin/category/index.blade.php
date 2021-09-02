@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Category List</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="">Home</a></li>
                <li class="breadcrumb-item active">Category List</li>
                </ol>
            </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <div class="">
        <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                  <div class="d-flex justify-content-between">
                      <h3 class="card-title">Category Table</h3>
                      <a href="{{route('category.create')}}" class="btn btn-primary">Create Category</a>
                  </div>
                
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                      <tr>
                          <th style="width: 10px">#</th>
                          <th>Name</th>
                          <th>Slug</th>
                          <th>Post Counnt</th>
                          <th style="width: 40px">Action</th>
                      </tr>
                  </thead>
                  <tbody>
                      @if($categories->count())
                      @foreach ($categories as $category)
                          <tr>
                              <td>{{ $category->id }}</td>
                              <td>{{ $category->name }}</td>
                              <td>{{ $category->slug }}</td>
                              <td>
                                  {{ $category->id }}
                              </td>
                              <td class="d-flex">
                                  <a href="{{ route('category.edit', [$category->id]) }}" class="btn btn-sm btn-primary mr-1"> <i class="fas fa-edit"></i> </a>
                                  <form action="{{ route('category.destroy', [$category->id]) }}" class="mr-1" method="POST">
                                      @method('DELETE')
                                      @csrf 
                                      <button type="submit" class="btn btn-sm btn-danger"> <i class="fas fa-trash"></i> </button>
                                  </form>
                                  {{-- <a href="{{ route('category.show', [$category->id]) }}" class="btn btn-sm btn-success mr-1"> <i class="fas fa-eye"></i> </a> --}}
                              </td>
                          </tr>
                      @endforeach
                      @else   
                          <tr>
                              <td colspan="5">
                                  <h5 class="text-center">No categories found.</h5>
                              </td>
                          </tr>

                      @endif
                  </tbody>
              </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
    </div>
      
      
  @endsection