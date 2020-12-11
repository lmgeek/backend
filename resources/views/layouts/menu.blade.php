{{--<li class="nav-item {{ Request::is('roles*') ? 'active' : '' }}">--}}
{{--    <a class="nav-link" href="{{ route('roles.index') }}">--}}
{{--        <i class="feather icon-lock"></i>--}}
{{--        <span>Roles</span>--}}
{{--    </a>--}}
{{--</li>--}}


<li class="nav-item {{ Request::is('orders*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('orders.index') }}">
        <i class="ri-computer-line"></i>
        <span>Orders</span>
    </a>
</li>


<li class="nav-item {{ Request::is('My Orders*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('myorders.index') }}">
        <i class="fa fa-picture-o" aria-hidden="true"></i>
        <span>My Orders</span>
    </a>
</li>


@role('Administrator')
<li class="nav-item {{ Request::is('users*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('users.index') !!}">
        <i class="ri-user-settings-line"></i>
        <span>Users</span>
    </a>
</li>
<li class="nav-item {{ Request::is('typeUploads*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('typeUploads.index') }}">
        <i class="fa fa-cloud-upload" aria-hidden="true"></i>
        <span>@lang('models/typeUploads.plural')</span>
    </a>
</li>
@endrole
