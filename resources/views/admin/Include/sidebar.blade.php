<!--/sidebar-menu-->
<div class="sidebar-menu">
    <header class="logo">
        <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="index.html"> <span id="logo"> <h1>Housing</h1></span>
            <!--<img id="logo" src="" alt="Logo"/>-->
        </a>
    </header>
    <div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
    <!--/down-->
    <div class="down">
        @if(isset($admindetails))
            @foreach($admindetails as $admindetail)
        <a href="#"><img src="{{asset($admindetail->picture)}}" width="100px"></a>
        <a href="#"><span class=" name-caret">{{Auth::guard('admin')->user()->name}}</span></a>
        <p>{{$admindetail->address}}</p>
            @endforeach
        @else
            <a href="#"><span class=" name-caret">{{Auth::guard('admin')->user()->name}}</span></a>
        @endif
        <ul>

            <li><a class="tooltips" href="{{url('admin/profile/update')}}"><span>Profile</span><i class="lnr lnr-user"></i></a></li>
            {{--<li><a class="tooltips" href="index.html"><span>Log out</span><i class="lnr lnr-power-switch"></i></a></li>--}}
            <li> <a  class="tooltips" href="{{ url('admin/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> <span>Log out</span><i class="lnr lnr-power-switch"></i></a>

                <form id="logout-form" action="{{ url('admin/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
        </ul>
    </div>
    <!--//down-->
    <div class="menu">
        <ul id="menu" >
            <li><a href="{{url('admin/dashboard')}}"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a></li>

            <li id="menu-academico" ><a href="#"><i class="lnr lnr-book"></i> <span>Post</span> <span class="fa fa-angle-right" style="float: right"></span></a>
                <ul id="menu-academico-sub" >
                    <li id="menu-academico-avaliacoes" ><a href="{{url('admin/post/add')}}">Add Post</a></li>
                    <li id="menu-academico-boletim" ><a href="{{url('admin/post/manage')}}">Manage Post</a></li>
                </ul>
            </li>

        </ul>
    </div>
</div>