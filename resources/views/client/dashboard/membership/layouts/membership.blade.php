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
    <div class="my-5">
        <div class="container">
            <div class="row">
                @include('client.dashboard.membership.partials.sidenav')

                <div class="col-lg-8 col-md-8 col-12">
                    @yield('membership-content')
                </div>
            </div>          
        </div>
    </div>
@endsection