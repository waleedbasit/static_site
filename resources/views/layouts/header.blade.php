<header id="header-1" class="soft-scroll footer-design">
    <!-- Navbar -->
    <nav class="main-nav navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="/">
                    <img src="{{$main->logo}}" class="brand-img img-responsive alpha" >
                </a>
            </div>
            <!-- Navigation -->
            <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-left">
                    <li class="active nav-item ">
                        <a href="/">BBNYC</a>
                    </li>
            </ul>
                <ul class="nav navbar-nav navbar-right">
                    
                    <li class="active nav-item">
                        <a href="/">Home</a>
                    </li>
                    @foreach($main->abouts as $about)
                    <li class="nav-item">
                        <a href="/about/{{$about->id}}">{{$about->heading}}</a>
                    </li>
                    @endforeach
                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">Pages <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                        @foreach($main->componets as $componet)
                        
                            <li>
                                <a href="/componet/{{$componet->id}}">{{$componet->heading}}</a>
                            </li>
                        @endforeach
                            
                        </ul>                                 
                    </li>
                    <!--//dropdown-->                             
                    
                </ul>
                <!--//nav-->
            </div>
            <!--// End Navigation -->
        </div>
        <!--// End Container -->

    <!--// End Navbar -->
    </nav>
</header>