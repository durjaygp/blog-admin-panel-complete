@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Post List</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="">Home</a></li>
                <li class="breadcrumb-item active">Post List</li>
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
                      <h3 class="card-title">post Table</h3>
                      <a href="{{route('post.create')}}" class="btn btn-primary">Create post</a>
                  </div>
                
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                      <tr>
                          <th style="width: 10px">#</th>
                          <th>Image</th>
                          <th>Post Title</th>
                          <th>Category</th>
                          <th>Tags</th>
                          <th>Author</th>
                          <th style="width: 40px">Action</th>
                      </tr>
                  </thead>
                  <tbody>
                      @if($posts->count())
                      @foreach ($posts as $post)
                          <tr>
                              <td>{{ $post->id }}</td>
                              <td>
                                <div style="max-width: 80px; max-height:80px;overflow:hidden">
                                    <img src="{{ asset($post->image) }}" class="img-fluid img-rounded" alt="">
                                </div>
                            </td>
                              <td>{{ $post->title }}</td>
                              <td>{{ $post->category->name }}</td>
                              <td>
                                @foreach($post->tags as $tag) 
                                    <span class="badge badge-primary">{{ $tag->name }} </span>
                                @endforeach
                            </td>
                              <td>{{ $post->user->full_name}}</td>
                              <td class="d-flex">
                                 <a href="{{ route('post.show', [$post->id]) }}" class="btn btn-sm btn-success mr-1"> <i class="fas fa-eye"></i> </a> 
                                 <a href="{{ route('post.edit', [$post->id]) }}" class="btn btn-sm btn-primary mr-1"> <i class="fas fa-edit"></i> </a>
                                 <form action="{{ route('post.destroy', [$post->id]) }}" class="mr-1" method="POST">
                                     @method('DELETE')
                                     @csrf 
                                     <button type="submit" class="btn btn-sm btn-danger"> <i class="fas fa-trash"></i> </button>
                                 </form>
                                </td>
                          </tr>
                      @endforeach
                      @else   
                          <tr>
                              <td colspan="5">
                                  <h5 class="text-center">No posts found.</h5>
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