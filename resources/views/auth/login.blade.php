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
            @if(Session::has('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{Session::get('message')}}</strong> Please log in for dashboard.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @endif

            
            <h2 class="affiliate-title">Login</h2>
            <form action="{{route('login')}}" method="POST" class="affiliate-form">'
                @csrf
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label"
                        >Email</label
                    >
                    <div class="col-sm-10">

                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
                </div>
                <div class="form-group row">
                    <label
                        for="password"
                        class="col-sm-2 col-form-label"
                        >Password</label
                    >
                    <div class="col-sm-10">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
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
            
            
        </div>
    </div>
@endsection