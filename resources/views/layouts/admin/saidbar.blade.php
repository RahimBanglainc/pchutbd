 <!-- ========== Left Sidebar Start ========== -->
 <div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="{{route('admin.dashboard')}}" class="waves-effect">
                        <i class="ri-dashboard-line"></i><span class="badge badge-pill badge-success float-right"></span>
                        <span>Dashboard</span>
                    </a>
                </li>


                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-store-2-line"></i>
                        <span>Shop</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#">Products</a></li>
                        <li><a href="#">Product Detail</a></li>
                        <li><a href="#">Orders</a></li>
                        <li><a href="#">Customers</a></li>
                        <li><a href="#">Cart</a></li>
                        <li><a href="#">Checkout</a></li>
                        <li><a href="#">Shops</a></li>
                        <li><a href="#">Add Product</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>Email</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#">Inbox</a></li>
                        <li><a href="#">Read Email</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-layout-3-line"></i>
                        <span>Layouts</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#">Horizontal</a></li>
                        <li><a href="#">Light Sidebar</a></li>
                        <li><a href="#">Compact Sidebar</a></li>
                        <li><a href="#">Icon Sidebar</a></li>
                        <li><a href="#">Boxed Layout</a></li>
                        <li><a href="#">Preloader</a></li>
                    </ul>
                </li>

                <li class="menu-title">Users</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-account-circle-line"></i>
                        <span>Users</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('admin.users')}}">Users List</a></li>
                        <li><a href="#">Add User</a></li>
                    </ul>
                </li>

                <li class="menu-title">Others</li>

                <li>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class=" waves-effect">
                        <i class="ri-logout-circle-r-line"></i>
                        <span>Log Out</span>
                    </a>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->










