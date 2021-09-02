@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Edit Category</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('website')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{route('category.index')}}">Edit Category</a></li>
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
                      <h3 class="card-title">Edit Category {{$category->name}}</h3>
                      <a href="{{route('category.index')}}" class="btn btn-primary">Go Back To Category List</a>
                  </div>
                
              </div>
                <!-- form start -->
                <div class="col-12 col-lg-6 offset-lg-3">
                    <form action="{{ route('category.update', [$category->id]) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            @include('includes.errors')
                            <div class="form-group">
                                <label for="name">Category name</label>
                                <input type="name" name="name" class="form-control" value="{{$category->name}}" placeholder="Enter name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Description</label>
                                <textarea name="description" id="description" rows="4" class="form-control"
                                    placeholder="Enter description">{{$category->description}}</textarea>
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-lg btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                
              
            </div>
            <!-- /.card -->
          </div>
    </div>
      
      
  @endsection