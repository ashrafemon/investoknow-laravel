@extends('layouts.admin')

@section('page-title', 'Edit Blog Post')

@section('content')
<h1 class="my-4">Blog</h1>
<div class="card border-0 shadow">
    <div class="card-header bg-info text-white">
        <h5 class="mb-0">Edit Post</h5>
    </div>
    <div class="card-body">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="card border-0 shadow">
                    <div class="card-body">
                        <div class="text-center">
                            <h5 class="mb-0 font-weight-bold">Post Form</h5>
                            <hr>
                        </div>
                        <form action="{{route('blog.update', $blog->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <label for="title" class="font-weight-bold font-italic">Post Title *</label>
                                <input type="text" name="title" id="title" class="form-control" value="{{$blog->title}}" />
                                <div class="text-danger font-weight-bold mt-1">{{$errors->first('title')}}</div>
                            </div>
                            <div class="form-group">
                                <label for="description" class="font-weight-bold font-italic">Post Description *</label>
                                <textarea name="description" id="description" class="form-control" rows="8">{{$blog->description}}</textarea>
                                <div class="text-danger font-weight-bold mt-1">{{$errors->first('description')}}</div>
                            </div>
                            <div class="form-group">
                                <label for="image" class="font-weight-bold font-italic">Post Image *</label> <br>
                                <input type="file" name="image" id="image" >
                                <div class="text-danger font-weight-bold mt-1">{{$errors->first('image')}}</div>
                            </div>
                            <div class="form-group">
                                <br>
                                <button class="btn btn-primary btn-block">Update Post</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection