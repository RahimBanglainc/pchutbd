<div class="two columns account-panel">

    <div class="body-header">
        <h1>Control Panel</h1>
    </div>

    @if(Auth::User()->is_seller)
        <div>
            <div>
                <a href="{{route('client.item.index')}}">
                    Manage Item
                </a>
            </div>
            <div>
                <a href="{{route('client.item.create')}}">
                    Post New Item
                </a>
            </div>
            <div>
                <a href="{{route('client.editstall')}}">
                    Edit Stall
                </a>
            </div>
        </div>

        <div>
            <a href="{{route('client.order')}}">Orders</a>
        </div>

        <div><a href="{{route('client.invoice')}}">Invoice</a></div>

        <div><a href="{{route('client.payment')}}">Payment</a></div>

    @else

    <div>
        <a href="{{route('client.myorder')}}">My Order</a>
    </div>

    <div>
        <a href="{{route('client.stallreq')}}">
            Stall Request
        </a>
    </div>

    @endif

    <div>
        <a href="{{route('client.favourite')}}">Favourite&nbsp;(1)</a>
    </div>

    <div><a href="{{route('client.profile')}}">Update Profile</a>
    </div>

    <div>
        <a href="{{route('client.Passwordshow')}}">Change Password</a>
    </div>




    <div>
        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
            {{ __('Sing Out') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>


</div>
