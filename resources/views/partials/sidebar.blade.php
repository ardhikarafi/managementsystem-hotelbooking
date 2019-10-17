@inject('request', 'Illuminate\Http\Request')
<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <ul class="sidebar-menu">
        

             

            <li class="{{ $request->segment(1) == 'home' ? 'active' : '' }}">
                <a href="{{ url('/') }}">
                    <i class="fa fa-university"></i>
                    <span class="title">@lang('Beranda')</span>
                </a>
            </li>

            
            @can('user_management_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span class="title">@lang('quickadmin.user-management.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                
                @can('role_access')
                <li class="{{ $request->segment(2) == 'roles' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.roles.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">
                                @lang('quickadmin.roles.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('user_access')
                <li class="{{ $request->segment(2) == 'users' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.users.index') }}">
                            <i class="fa fa-user"></i>
                            <span class="title">
                                @lang('quickadmin.users.title')
                            </span>
                        </a>
                    </li>
                @endcan
                </ul>
            </li>
            @endcan
            @can('country_access')
            <li class="{{ $request->segment(2) == 'countries' ? 'active' : '' }}">
                <a href="{{ route('admin.countries.index') }}">
                    <i class="fa fa-gears"></i>
                    <span class="title">@lang('Kota')</span>
                </a>
            </li>
            @endcan
            
            @can('customer_access')
            <li class="{{ $request->segment(2) == 'customers' ? 'active' : '' }}">
                <a href="{{ route('admin.customers.index') }}">
                    <i class="fa fa-users"></i>
                    <span class="title">@lang('Pelanggan')</span>
                </a>
            </li>
            @endcan
            
            @can('room_access')
            <li class="{{ $request->segment(2) == 'rooms' ? 'active' : '' }}">
                <a href="{{ route('admin.rooms.index') }}">
                    <i class="fa fa-gears"></i>
                    <span class="title">@lang('Kamar')</span>
                </a>
            </li>
            @endcan
            
            @can('booking_access')
            <li class="{{ $request->segment(2) == 'bookings' ? 'active' : '' }}">
                <a href="{{ route('admin.bookings.index') }}">
                    <i class="fa fa-send"></i>
                    <span class="title">@lang('Pesanan')</span>
                </a>
            </li>
            @endcan
            
            @can('find_room_access')
            <li class="{{ $request->segment(2) == 'find_rooms' ? 'active' : '' }}">
                <a href="{{ route('admin.find_rooms.index') }}">
                    <i class="fa fa-arrows"></i>
                    <span class="title">@lang('Cari Kamar')</span>
                </a>
            </li>
            @endcan
            

            

            
            <svg-icon><src href="sprite.svg#si-glyph-spanner" /></svg-icon>


            <li class="{{ $request->segment(1) == 'change_password' ? 'active' : '' }}">
                <a href="{{ route('auth.change_password') }}">
                    <i class="fa fa-handshake-o"></i>
                    <span class="title">@lang('Ganti Password')</span>
                </a>
            </li>

            <li>
                <a href="/logout" onclick="$('#logout').submit();">
                    <i class="fa fa-arrow-left"></i>
                    <span class="title">@lang('quickadmin.qa_logout')</span>
                </a>
            </li>
            
        </ul>
    </section>
</aside>

