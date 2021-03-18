@extends('layouts.admin')

@section('page-title', 'All Blog Post')

@section('content')
<h1 class="my-4">Blog</h1>
<div class="card border-0 shadow">
    <div class="card-header bg-info text-white">
        <h5 class="mb-0">All Posts</h5>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table text-center table-striped table-hover">
                <thead>
                    <tr>
                        <th width="5%">No.</th>
                        <th width="20%">Title</th>
                        <th width="50%">Description</th>
                        <th width="25%">Action</th>
                    </tr>
                </thead>
                <tbody>

                    @if(count($blogs) > 0)
                        @foreach($blogs as $blog)
                        <tr>
                            <td>{{$loop->index + 1}}</td>
                            <td>{{$blog->title}}</td>
                            <td>{!!substr($blog->description, 0,90)!!}...</td>
                            <td>
                                <div class="d-flex justify-content-center align-items-center">
                                    <a href="{{route('blog.show', $blog->id)}}" class="btn btn-info btn-sm mr-2">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="{{route('blog.edit', $blog->id)}}" class="btn btn-warning btn-sm mr-2">
                                        <i class="fa fa-edit"></i>
                                    </a>

                                    <form action="{{route('blog.destroy', $blog->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                                
                            </td>
                        </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="4">
                                <h6 class="font-weight-bold mb-0 text-danger">Sorry! Not found any data.</h6>
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection