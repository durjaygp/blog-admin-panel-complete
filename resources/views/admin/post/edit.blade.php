@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Edit Post</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('website')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{route('post.index')}}">Edit Post</a></li>
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
                      <h3 class="card-title">Edit post {{$post->name}}</h3>
                      <a href="{{route('post.index')}}" class="btn btn-primary">Go Back To post List</a>
                  </div>
              </div>
                <!-- form start -->
                <div class="col-12 col-lg-6 offset-lg-3">
                    <form action="{{ route('post.update', [$post->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            @include('includes.errors')
                            <div class="form-group">
                                <label for="name">Recipe Title</label>
                                <input type="name" name="title" value="{{ $post->title }}" class="form-control" id="name" placeholder="Enter name">
                            </div>
                            <div class="form-group">
                                <label for="category">Recipe Category</label>
                                <select name="category_id" id="category" class="form-control">
                                    <option value="" style="display: none" selected>Select Category</option>
                                    @foreach($categories as $c)
                                    <option value="{{ $c->id }}" @if($post->category_id == $c->id) selected @endif> {{ $c->name }} </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-8">
                                        <label for="image">Image</label>
                                        <div class="custom-file">
                                            <input type="file" name="image" class="custom-file-input" id="image">
                                            <label class="custom-file-label" for="image">Choose file</label>
                                        </div>
                                    </div>
                                    <div class="col-4 text-right">
                                        <div style="max-width: 100px; max-height: 100px;overflow:hidden; margin-left: auto">
                                            <img src="{{ asset($post->image) }}" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label>Choose Post Tags</label>
                                <div class=" d-flex flex-wrap">
                                    @foreach($tags as $tag) 
                                    <div class="custom-control custom-checkbox" style="margin-right: 20px">
                                        <input class="custom-control-input" name="tags[]" type="checkbox" id="tag{{ $tag->id}}" value="{{ $tag->id }}"
                                        @foreach($post->tags as $t)
                                            @if($tag->id == $t->id) checked @endif
                                        @endforeach
                                        >
                                        <label for="tag{{ $tag->id}}" class="custom-control-label">{{ $tag->name }}</label>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Description</label>
                                <textarea name="description" id="description"  rows="4" class="form-control"
                                    placeholder="Enter description">{{ $post->description }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Cooking Ingridents</label>
                                <textarea name="ingredients" id="ingredients"  rows="4" class="form-control"
                                    placeholder="Enter ingredients">{{ $post->ingredients }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Cooking Step</label>
                                <textarea name="cooking_step" id="cooking_step"  rows="4" class="form-control"
                                    placeholder="Enter Cooking Step">{{ $post->cooking_step }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="person">Person for Cooking</label>
                                <input type="name" name="person" class="form-control" value="{{ $post->person }}" id="name" placeholder="Enter name">
                            </div>
                            <div class="form-group">
                                <label for="cooking_time">Cooking Duration</label>
                                <input type="name" name="cooking_time" class="form-control" value="{{ $post->cooking_time }}" id="name" placeholder="Enter name">
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-lg btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
          </div>
    </div>
      
      
  @endsection