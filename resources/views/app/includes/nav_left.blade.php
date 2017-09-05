<aside class="main-sidebar">
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel" style="height:50px;">
            <div class="pull-left image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ session('userdata')[0]['name'] }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i>  {{ session('userdata')[0]['usergroup'] }}</a>
            </div>
        </div>
        
        <ul class="sidebar-menu">
            <li class="active treeview">
                <a href="{{ url('/dashboard') }}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            @php if(session('userdata')[0]['usergroup'] == 'ADMINISTRATOR' || session('userdata')[0]['usergroup'] == 'MANAGER' || session('userdata')[0]['usergroup'] == 'BOOTH_OPERATOR'){ @endphp
            <li class=" treeview">
                <a href="{{ url('/add-user') }}">
                    <i class="fa fa-dashboard"></i> <span>Add User</span>
                </a>
            </li>
            @php } @endphp
            <li class=" treeview">
                <a href="{{ url('/add-vehicle') }}">
                    <i class="fa fa-dashboard"></i> <span>Add Vehicle</span>
                </a>
            </li>
            <li class=" treeview">
                <a href="{{ url('/add-vip') }}">
                    <i class="fa fa-dashboard"></i> <span>Add Vip Vehicle</span>
                </a>
            </li>
            <li class=" treeview">
                <a href="{{ url('/block-user') }}">
                    <i class="fa fa-dashboard"></i> Block User<span></span>
                </a>
            </li>
            <li class=" treeview">
                <a href="{{ url('/add-suspected-vehicle') }}">
                    <i class="fa fa-dashboard"></i> Add Suspected Users<span></span>
                </a>
            </li>

            <li>
                <a href="{{ url('/logout') }}">
                    <i class="fa fa-lock"></i> <span>Logout</span>
                </a>
            </li>
        </ul>
    </section>
</aside>