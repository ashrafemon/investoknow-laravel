@extends('layouts.client')

@section('content')
    <!-- ==================== 
	     Page Title
	========================= -->
    <div class="page-title bg-light">
        <div class="container">
            <h3 class="title">Affiliate Dashboard</h3>
        </div>
    </div>
    <!-- ==================== 
     Contact Section
    ========================= -->
    <div class="affiliate-section big-spacer">
        <div class="container">
            {{-- Affiliate Login Form --}}
            <h2 class="affiliate-title">Login</h2>
            <form action="{{route('login')}}" method="POST" class="affiliate-form mb-5">
                @csrf
                <div class="form-group row">
                    <label for="login_email" class="col-sm-2 col-form-label"
                        >Email</label
                    >
                    <div class="col-sm-10">
                        <input
                            type="email"
                            class="form-control"
                            id="email"
                            name="email"
                            placeholder="Email"
                        />
                    </div>
                </div>
                <div class="form-group row">
                    <label
                        for="password"
                        class="col-sm-2 col-form-label"
                        >Password</label
                    >
                    <div class="col-sm-10">
                        <input
                            type="password"
                            class="form-control"
                            id="password"
                            name="password"
                            placeholder="Password"
                        />
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="button-2">
                            Login
                        </button>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input
                                class="form-check-input"
                                type="checkbox"
                                id="gridCheck1"
                            />
                            <label
                                class="form-check-label"
                                for="gridCheck1"
                            >
                                Remember me
                            </label>
                        </div>
                    </div>
                </div>
            </form>

            {{-- Affiliate Register Form --}}
            <h2 class="affiliate-title">Register</h2>
            <form action="{{route('client.affiliate.register')}}" method="POST" class="affiliate-form">
                @csrf
                <div class="form-group row">
                    <label for="reg_first_name" class="col-sm-2 col-form-label"
                        >Your Name</label
                    >
                    <div class="col-sm-10">
                        <input
                            type="text"
                            name="reg_first_name"
                            class="form-control"
                            id="reg_first_name"
                            placeholder="Name"
                        />
                        
                    </div>
                </div>
                <div class="form-group row">
                    <label for="reg_email" class="col-sm-2 col-form-label"
                        >Email</label
                    >
                    <div class="col-sm-10">
                        <input
                            type="email"
                            name="reg_email"
                            class="form-control"
                            id="reg_email"
                            placeholder="Email"
                        />
                    </div>
                </div>
                <div class="form-group row">
                    <label
                        for="reg_password"
                        class="col-sm-2 col-form-label"
                        >Password</label
                    >
                    <div class="col-sm-10">
                        <input
                            type="password"
                            name="reg_password"
                            class="form-control"
                            id="reg_password"
                            placeholder="Password"
                        />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="reg_payment_email" class="col-sm-2 col-form-label"
                        >Payment Email</label
                    >
                    <div class="col-sm-10">
                        <input
                            type="email"
                            name="reg_payment_email"
                            class="form-control"
                            id="reg_payment_email"
                            placeholder="Payment Email"
                        />
                    </div>
                </div>
                <div class="form-group row">
                    <label
                        for="reg_promote"
                        class="col-sm-2 col-form-label"
                        >How will you promote your site?</label
                    >
                    <div class="col-sm-10">
                        <select class="form-control" id="reg_promote" name="reg_promote">
                            @foreach ($promotes as $promote)
                            <option value="{{$promote->id}}">{{$promote->name}}</option>
                            @endforeach
                        </select>
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