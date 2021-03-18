@extends('layouts.client')

@section('content')
<!-- ==================== 
	     Page Title
	========================= -->
<div class="page-title bg-light">
    <div class="container">
        <h3 class="title">Package Store</h3>
    </div>
</div>

<div class="container small-spacer">
    <div class="package-container">
        <div class="row">
            @foreach($packages as $package)
            <div class="col-lg-4 col-md-4 col-12">

                <div class="card border-0">
                    <img src="{{asset($package->image)}}" class="card-img" height="200" alt="">
                    <div class="card-body text-center">
                        <h5>{{$package->name}}</h5>
                        <h6>€{{$package->price}}</h6>

                        <form action="{{route('client.cart.add')}}" method="POST">
                            @csrf
                            <input type="text" name="package_id" class="d-none" value="{{$package->id}}">
                            <input type="text" name="quantity" class="d-none" value="1">
                            <div class="button">
                                <button type="submit" class="button-2">Add to cart</button>
                            </div>
                        </form>
                    </div>
                </div>


            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
