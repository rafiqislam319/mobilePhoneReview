@section('title')
    Admin Header
@endsection


<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="{{url('/dashboard')}}">Admin Panel</a>
</div>
<!-- /.navbar-header -->
<ul class="nav navbar-nav navbar-right">

    <li class="dropdown">

        <a href="#" class="dropdown-toggle avatar" data-toggle="dropdown">{{Auth::user()->name}}<img src="{{asset('/')}}/uploads/avatars/{{Auth::user()->avatar}}" style="width: 32px; height: 32px; border-radius: 50%; margin-left: 5px;"></a>
        <ul class="dropdown-menu">
            <li class="dropdown-menu-header text-center">
                <strong>Account</strong>
            </li>

            <li class="m_2"><a href="{{route('/profile')}}"><i class="fa fa-user"></i>  Profile</a></li>
            <li class="m_2">
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" {{ __('Logout') }} ><i class="fa fa-btn fa-sign-out"></i> Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
    </li>
</ul>
