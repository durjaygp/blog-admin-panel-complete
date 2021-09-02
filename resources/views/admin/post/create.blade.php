@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Create New Recipe</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('website')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{route('post.index')}}">Recipe List</a></li>
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
                      <a href="{{route('post.index')}}" class="btn btn-primary">Go Back To Post List</a>
                  </div>
                
              </div>
                <!-- form start -->
                <div class="col-8 col-lg-10 offset-lg-1">
                    <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            @include('includes.errors')
                            <div class="form-group">
                                <label for="name">Recipe Title</label>
                                <input type="name" name="title" value="{{ old('image') }}" class="form-control" id="name" placeholder="Enter name">
                            </div>
                            <div class="form-group">
                                <label for="category">Recipe Category</label>
                                <select name="category_id" id="category" class="form-control">
                                    <option value="" style="display: none" selected>Select Category</option>
                                    @foreach($categories as $c)
                                    <option value="{{ $c->id }}"> {{ $c->name }} </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="image">Image</label>
                                <div class="custom-file">
                                    <input type="file" name="image" value="{{ old('image') }}" class="form-control" id="customFile" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Choose Post Tags</label>
                                <div class=" d-flex flex-wrap">
                                    @foreach($tags as $tag) 
                                    <div class="custom-control custom-checkbox" style="margin-right: 20px">
                                        <input class="custom-control-input" name="tags[]" type="checkbox" id="tag{{ $tag->id}}" value="{{ $tag->id }}">
                                        <label for="tag{{ $tag->id}}" class="custom-control-label">{{ $tag->name }}</label>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Description</label>
                                <textarea name="description" id="editor" value="{{ old('description') }}" rows="4" class="form-control"
                                    placeholder="Enter description"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Cooking Ingridents</label>
                                <textarea name="ingredients" id="editor1" value="{{ old('ingredients') }}" rows="4" class="form-control"
                                    placeholder="Enter ingredients"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Cooking Step</label>
                                <textarea name="cooking_step" id="editor2" value="{{ old('cooking_step') }}" rows="4" class="form-control"
                                    placeholder="Enter Cooking Step"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="person">Person for Cooking</label>
                                <input type="name" name="person" class="form-control" value="{{ old('person') }}" id="name" placeholder="Enter name">
                            </div>
                            <div class="form-group">
                                <label for="cooking_time">Cooking Duration</label>
                                <input type="name" name="cooking_time" class="form-control" value="{{ old('cooking_time') }}" id="name" placeholder="Enter Cooking Duration">
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

  @section('script')
        
  <script src="{{ asset('admin_assets') }}/ckedit/ckeditor.js"></script>
  <script src="{{ asset('admin_assets') }}/ckfinder/ckfinder.js"></script>
  <script>
	ClassicEditor
		.create( document.querySelector( '#editor' ), {
			// toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
		} )
		.then( editor => {
			window.editor = editor;
		} )
		.catch( err => {
			console.error( err.stack );
		} );
</script>

<script>
	ClassicEditor
		.create( document.querySelector( '#editor1' ), {
			// toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
		} )
		.then( editor => {
			window.editor = editor;
		} )
		.catch( err => {
			console.error( err.stack );
		} );
</script>

<script>
	ClassicEditor
	.create( document.querySelector( '#editor2' ), {
		ckfinder: {
			uploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json',
		},
		toolbar: ['heading','blocks', 'link', '|', 'colors', '|', 'ckfinder', 'imageUpload', '|', 'bold', 'italic', '|', 'undo', 'redo' ]
	} )
    
	.catch( error => {
		console.error( error );
	} );
</script>

  @endsection