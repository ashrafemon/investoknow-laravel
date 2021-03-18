@extends('client.dashboard.membership.layouts.membership')

@section('membership-content')
<div class="section">
    @if(Session::has('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{Session::get('message')}}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
    @endif
    
    @if(Session::has('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>{{Session::get('error')}}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
    @endif

    <form action="{{route('client.member.account.update')}}" method="POST">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="first_name">First Name *</label>
        <input type="text" class="form-control" name="first_name" id="first_name" value="{{Auth::user()->first_name}}" />
        </div>

        <div class="form-group">
            <label for="last_name">Last Name *</label>
            <input type="text" class="form-control" name="last_name" id="last_name" value="{{Auth::user()->last_name}}" />
        </div>

        <div class="form-group">
            <label for="username">Display Name *</label>
            <input type="text" class="form-control" name="username" id="username" value="{{Auth::user()->username}}" />
            <span class="font-italic text-muted">This will be how your name will be displayed in the account section and in reviews</span>
        </div>

        <div class="form-group">
            <label for="email">Email Address *</label>
            <input type="text" class="form-control" name="email" id="email" value="{{Auth::user()->email}}" disabled />
        </div>

        <h6>Password change</h6>

        <div class="form-group">
            <label for="current_password">Current password (leave blank to leave unchanged)</label>
            <input type="password" class="form-control" name="current_password" id="current_password" />
        </div>

        <div class="form-group">
            <label for="new_password">New password (leave blank to leave unchanged)</label>
            <input type="password" class="form-control" name="new_password" id="new_password" />
        </div>

        <div class="form-group">
            <label for="confirm_new_password">Confirm new password</label>
            <input type="password" class="form-control" name="confirm_new_password" id="confirm_new_password" />
        </div>

        <div class="form-group">
            <button type="submit" class="button-2">Save Changes</button>
        </div>
    </form>

</div>
@endsection