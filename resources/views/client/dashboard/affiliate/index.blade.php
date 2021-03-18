@extends('client.dashboard.affiliate.layouts.affiliate')

@section('affiliate-content')
<div class="card border-muted mb-4">
    <div class="card-body">
        <p class="mb-0">Hello <strong>{{Auth::user()->username}}</strong> 
            (not <strong>{{Auth::user()->username}}?</strong> 
            <a href="{{ route('logout') }}" class="text-warning"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                <strong>{{ __('Log out') }}</strong>)
            </a>.
            <span>From your affiliate dashboard you can view your recent commissions and visits, consult your affiliate stats and manage settings for your profile</span>
        
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </p>
    </div>
</div>

<div class="row">
    <div class="col-lg-8 col-md-8 col-12 mb-lg-0 mb-md-0 mb-4">
        <h1>Stats</h1>
        <div class="table-responsive">
            <table class="table table-border">
                <tr>
                    <th><small class="font-weight-bold">Affiliate rate</small></th>
                    <td><small>15.00 %</small></td>
                </tr>
                <tr>
                    <th><small class="font-weight-bold">Total Earnings</small></th>
                    <td><small>€0.00</small></td>
                </tr>
                <tr>
                    <th><small class="font-weight-bold">Total Paid</small></th>
                    <td><small>€0.00</small></td>
                </tr>
                <tr>
                    <th><small class="font-weight-bold">Total Refunded</small></th>
                    <td><small>€0.00</small></td>
                </tr>
                <tr>
                    <th><small class="font-weight-bold">Balance</small></th>
                    <td><small>€0.00</small></td>
                </tr>
                <tr>
                    <th><small class="font-weight-bold">Visits</small></th>
                    <td><small>0</small></td>
                </tr>
                <tr>
                    <th><small class="font-weight-bold">Conversion rate</small></th>
                    <td><small>N/A %</small></td>
                </tr>
                
            </table>
        </div>
    </div>
    
    <div class="col-lg-4 col-md-4 col-12">
        <h1>Menu</h1>
        <nav class="nav flex-column">
            <a href="#" class="nav-link p-0">Dashboard</a>
            <a href="#" class="nav-link p-0">Commissions</a>
            <a href="#" class="nav-link p-0">Clicks</a>
            <a href="#" class="nav-link p-0">Payments</a>
            <a href="{{route('client.affiliate.generate.index')}}" class="nav-link p-0">Generate Link</a>
            <a href="#" class="nav-link p-0">Settings</a>
        </nav>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <h1>Recent Commissions <small class="font-wight-light">(View all)</small></h1>

        <div class="table-responsive">
            <table class="table table-border">
                <thead class="thead-light">
                    <tr>
                        <th><small class="font-weight-bold">ID</small></th>
                        <th><small class="font-weight-bold">Status</small></th>
                        <th><small class="font-weight-bold">Rate</small></th>
                        <th><small class="font-weight-bold">Amount</small></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="text-center">
                        <td colspan="4"><small>Sorry! There are no registered commissions yet</small></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <h1>Recent Clicks <small class="font-wight-light">(View all)</small></h1>

        <div class="table-responsive">
            <table class="table table-border">
                <thead class="thead-light">
                    <tr>
                        <th><small class="font-weight-bold">Link</small></th>
                        <th><small class="font-weight-bold">Origin</small></th>
                        <th><small class="font-weight-bold">Status</small></th>
                        <th><small class="font-weight-bold">Date</small></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="text-center">
                        <td colspan="4"><small>Sorry! There are no registered commissions yet</small></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection