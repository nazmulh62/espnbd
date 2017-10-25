<section id="menu-area">
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- LOGO -->
                <!-- IMG BASED LOGO  -->
                <a class="" style="" href="{{url('/')}}/">
                    <img src="{{asset('/frontEndAssets/')}}/logo/ESPN-01.jpg" alt="logo"></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                    <li class="active"><a href="{{url('/')}}/">Home</a></li>
                    <li><a href="{{url('about/')}}/">About Us</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Category Product <span class="fa fa-angle-down"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            @foreach($categories as $category)
                                <li><a href="{{ url('/category-product/'.$category->id) }}">{{$category->category_name}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li><a href="{{url('notice/')}}/">Notice</a></li>
                    <li><a href="{{url('/')}}/">Carrier</a></li>
                    <li><a href="{{url('contact/')}}/">Contact</a></li>
                </ul>
            </div><!--/.nav-collapse -->
            <a href="#" id="search-icon">
                <i class="fa fa-search">
                </i>
            </a>
        </div>
    </nav>
</section>
