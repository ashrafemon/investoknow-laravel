@extends('client.dashboard.membership.layouts.membership')

@section('membership-content')
<div class="section">
    <p>Hello <strong>{{Auth::user()->username}}</strong> 
        (not <strong>{{Auth::user()->username}}?</strong> 
        <a href="{{ route('logout') }}" class="text-warning"
            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
            <strong>{{ __('Log out') }}</strong>)
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </p>

    <p>From your account dashboard you can view your <a href="" class="text-warning">recent orders</a>, manage your <a href="" class="text-warning">shipping and billing addresses</a>, and <a href="" class="text-warning">edit your password and account details.</a></p>

    <h1>My Subscriptions</h1>
    <p>There is no active subscription for your account.</p>
    
    <h1>Memberships with subscription</h1>
    <p>You don't have any membership with a subscription plan yet.</p>
    
    <h1>Membership Plans:</h1>
    <p>You don't have any membership without a subscription plan yet.</p>
</div>
@endsection