@extends('layouts.client')

@section('content')
    <!-- ==================== 
	     Page Title
	========================= -->
    <div class="page-title bg-light">
        <div class="container">
            <h3 class="title">Membership Dashboard</h3>
        </div>
    </div>
    <!-- ==================== 
     Contact Section
    ========================= -->
    <div class="affiliate-section big-spacer">
        <div class="container">

            {{-- Membership Register Form --}}
            <h2 class="affiliate-title">Register</h2>
            <form action="{{route('client.member.register')}}" method="POST" class="affiliate-form">
                @csrf
                <div class="form-group row align-items-center">
                    <label for="first_name" class="col-sm-2 col-form-label"
                        >Your Name</label
                    >
                    <div class="col-sm-10">
                        <input
                            type="text"
                            name="first_name"
                            class="form-control"
                            id="first_name"
                            placeholder="Name"
                        />
                        
                    </div>
                    <div class="col-12 text-right">
                        <span class="text-danger font-weight-bold">{{$errors->first('first_name')}}</span>
                    </div>
                </div>
                <div class="form-group row align-items-center">
                    <label for="email" class="col-sm-2 col-form-label"
                        >Email</label
                    >
                    <div class="col-sm-10">
                        <input
                            type="email"
                            name="email"
                            class="form-control"
                            id="email"
                            placeholder="Email"
                        />
                    </div>
                    <div class="col-12 text-right">
                        <span class="text-danger font-weight-bold">{{$errors->first('email')}}</span>
                    </div>
                </div>
                <div class="form-group row align-items-center">
                    <label
                        for="password"
                        class="col-sm-2 col-form-label"
                        >Password</label
                    >
                    <div class="col-sm-10">
                        <input
                            type="password"
                            name="password"
                            class="form-control"
                            id="password"
                            placeholder="Password"
                        />
                    </div>
                    <div class="col-12 text-right">
                        <span class="text-danger font-weight-bold">{{$errors->first('password')}}</span>
                    </div>
                </div>
                <div class="form-group row align-items-center">
                    <label for="payment_email" class="col-sm-2 col-form-label"
                        >Payment Email</label
                    >
                    <div class="col-sm-10">
                        <input
                            type="email"
                            name="payment_email"
                            class="form-control"
                            id="payment_email"
                            placeholder="Payment Email"
                        />
                    </div>
                    <div class="col-12 text-right">
                        <span class="text-danger font-weight-bold">{{$errors->first('payment_email')}}</span>
                    </div>
                </div>
                <div class="form-group row align-items-center">
                    <label
                        for="promote"
                        class="col-sm-2 col-form-label"
                        >How will you promote your site?</label
                    >
                    <div class="col-sm-10">
                        <select class="form-control" id="promote" name="promote">
                            @foreach ($promotes as $promote)
                            <option value="{{$promote->id}}">{{$promote->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-12 text-right">
                        <span class="text-danger font-weight-bold">{{$errors->first('promote')}}</span>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="button-2">
                            Register
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection