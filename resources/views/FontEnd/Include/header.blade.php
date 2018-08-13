<div class="header-w3layouts">
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top top-nav-collapse">
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <h1><a class="navbar-brand" href="{{url('/')}}">hous<span>ing</span>
                </a></h1>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right">
                <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                <li class="hidden"><a class="page-scroll" href="#page-top"></a>	</li>
                <li><a class="page-scroll scroll" href="#about">About</a></li>
                <li><a class="page-scroll scroll" href="#evennts">Houses</a></li>
                <li><a class="page-scroll scroll" href="#gallery">Portfolio</a></li>
                <li><a class="page-scroll scroll" href="#team">Agents</a></li>
                <li><a class="page-scroll scroll" href="{{url('')}}">Search</a></li>
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="username">Login</span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <li><a href="{{url('user/login')}}">User Login</a></li>
                        <li><a href="{{url('admin/login')}}">Owner Login</a></li>

                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>
</div>
<!-- //header -->