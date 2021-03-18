<div class="col-lg-4 col-md-4 col-12 mb-lg-0 mb-md-0 mb-4">
    <div class="list-group">
        <a href="{{route('client.member.dashboard')}}" class="list-group-item list-group-item-action {{request()->segment(2) == 'dashboard' ? 'active' : ''}}">
          Dashboard
        </a>
      <a href="{{route('client.member.order.index')}}" class="list-group-item list-group-item-action {{request()->segment(2) == 'orders' ? 'active' : ''}}">Orders</a>
        <a href="{{route('client.member.downloads')}}" class="list-group-item list-group-item-action {{request()->segment(2) == 'downloads' ? 'active' : ''}}">Downloads</a>
        <a href="{{route('client.member.address.index')}}" class="list-group-item list-group-item-action {{request()->segment(2) == 'address' ? 'active' : ''}}">Address</a>
        <a href="{{route('client.member.payment-methods')}}" class="list-group-item list-group-item-action {{request()->segment(2) == 'payment-methods' ? 'active' : ''}}">Payment methods</a>
        <a href="{{route('client.member.account.index')}}" class="list-group-item list-group-item-action {{request()->segment(2) == 'account' ? 'active' : ''}}">Account Details</a>
        <a href="{{route('client.member.cupons')}}" class="list-group-item list-group-item-action {{request()->segment(2) == 'cupons' ? 'active' : ''}}">My Cupons</a>
        <a href="{{ route('logout') }}" class="list-group-item list-group-item-action"
            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
      </div>
</div>