@extends('layouts.admin')

@section('page-title', 'Show Blog Post')

@section('content')
<h1 class="my-4">Blog</h1>
<div class="card border-0 shadow">
    <div class="card-header bg-info text-white">
        <h5 class="mb-0">Show Post</h5>
    </div>
    <div class="card-body">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-7 col-12">
                <div class="card border-0 shadow">
                    <div class="card-body">
                        <h5 class="mb-0 font-weight-bold">{{$blog->title}}</h5>
                        <hr>

                        <div class="mb-4">
                            <img src="{{asset($blog->image)}}" class="img-fluid" alt="{{$blog->title}}">
                        </div>

                        <p>{!!$blog->description!!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection