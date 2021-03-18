@extends('layouts.admin')

@section('page-title', 'Admin Package')

@section('content')
<h1 class="mt-4">Package</h1>
<div class="card border-0 shadow mt-5">

    <div class="card-body">
        <h5>Add Package</h5>
        <hr>

        <div class="container">
            <form action="{{route('admin.package.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Package Name</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{old('name')}}">
                    <span class="font-weight-bold text-danger">{{$errors->first('name')}}</span>
                </div>
    
                <div class="form-group">
                    <label for="price">Package Price</label>
                    <input type="text" class="form-control" name="price" id="price" value="{{old('price')}}">
                    <span class="font-weight-bold text-danger">{{$errors->first('price')}}</span>
                </div>

                <div class="form-group">
                    <label for="type">Package Type</label>
                    <select name="type" id="type" class="form-control">
                        <option value="vip">VIP</option>
                        <option value="general">GENERAL</option>
                    </select>
                    <span class="font-weight-bold text-danger">{{$errors->first('type')}}</span>
                </div>
    
                <div class="form-group">
                    <label for="name">Package Description</label>
                    <textarea name="description" id="description">
                        {{old('description')}}
                    </textarea>
                    <span class="font-weight-bold text-danger">{{$errors->first('description')}}</span>
                </div>

                <div class="form-group">
                    <label for="image">Package Image</label>
                    <input type="file" name="image" id="image">
                    <div>
                        <span class="font-weight-bold text-danger">{{$errors->first('image')}}</span>
                    </div>
                </div>
                
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add Package</button>
                </div>
            </form>
        </div>
        
        
    </div>
</div>
@endsection