@extends('client.dashboard.affiliate.layouts.affiliate')

@section('affiliate-content')
<div class="card">
    <div class="card-body">
        <p>Your affiliate ID is: <strong>{{Auth::user()->id}}</strong></p>
        <p>Your referral URL is: {{Auth::user()->affiliate_link}}</p>
        <p class="small text-muted">(Now copy this referral link and share it anywhere)</p>

        <p>Enter any URL from this site into the form below to generate your referral link to that page</p>

        <form action="{{route('client.affiliate.generate.update')}}" method="POST">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="">Page Url</label>
                <input type="text" class="form-control" name="affiliate_link">
            </div>
            <div class="form-group">
                <label for="">Referral Url</label>
                <input type="text" class="form-control" readonly value="{{Auth::user()->affiliate_link}}">
            </div>
            <p class="small text-muted">(Now copy this referral link and share it anywhere)</p>

            <div class="form-group">
                <button type="submit" class="button-2">Generate</button>
            </div>
        </form>
    </div>
</div>
@endsection