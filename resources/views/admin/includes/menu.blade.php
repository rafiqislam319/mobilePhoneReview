@section('title')
    Admin Menu
@endsection


<div class="sidebar-nav navbar-collapse">
    <ul class="nav" id="side-menu">
        <li>
            <a href="{{url('/dashboard')}}"><i class="fa fa-dashboard fa-fw nav_icon"></i>Dashboard</a>
        </li>
        <li>
            <a href="#"><i class="fa fa-laptop nav_icon"></i>Brand Info<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="{{route('brand-add')}}">Add Brand</a>
                    <a href="{{route('manage-brand')}}">Manage Brand</a>
                </li>
            </ul>
            <!-- /.nav-second-level -->
        </li>
        <li>
            <a href="#"><i class="fa fa-laptop nav_icon"></i>Category Info<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="{{route('category-add')}}">Add Category</a>
                    <a href="{{route('category-manage')}}">Manage Category</a>
                </li>
            </ul>
            <!-- /.nav-second-level -->
        </li>
        <li>
            <a href="#"><i class="fa fa-laptop nav_icon"></i>Logo Image<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="{{route('logo-add')}}">Add Logo</a>
                    <a href="{{route('logo-manage')}}">Manage Logo</a>
                </li>
            </ul>
            <!-- /.nav-second-level -->
        </li>
        <li>
            <a href="#"><i class="fa fa-laptop nav_icon"></i>Mobile<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="{{route('add-mobilePhone')}}">Add Mobile</a>
                    <a href="{{route('manage-mobilePhone')}}">Manage Mobile</a>
                </li>
            </ul>
            <!-- /.nav-second-level -->
        </li>

    </ul>
</div>
