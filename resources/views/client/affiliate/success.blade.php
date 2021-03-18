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
            {{-- Affiliate Register Success --}}
            @if($message)
            <div class="alert alert-success">
                <strong>{{$message}}</strong>
                <p>Please log in for affiliate dashboard</p>
                <a href="{{route('client.affiliate')}}">Affiliate Login</a>
            </div>
            @endif
        </div>
    </div>
@endsection