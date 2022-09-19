<!-- Header Start -->
<header class="ws-header ws-header-transparent">
    <!-- Navbar -->
    <nav class="navbar ws-navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <!-- Logo -->
            <div class="ws-logo ws-center">
                <a href="{{ route('web-home')}}">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="Alternative Text" class="img-responsive" />
                </a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-left">
                    <li>
                        <a href="#x">Our ArtWorks</a>
                    </li>

                    <li class="dropdown"><a href="#x" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-animations="fadeIn">Artist <span class="caret"></span></a>

                        <ul class="dropdown-menu">
                            <li><a>دعاء حفني </a></li>
                            <li><a>لعنود بن دهيم </a></li>
                            <li><a>عهود سليمان </a></li>
                            <li><a>Areej Obaib</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#x" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-animations="fadeIn">Painting <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a>Abstract</a></li>
                            <li><a>Realistic</a></li>
                            <li><a>Impertionzm</a></li>
                        </ul>
                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#x" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-animations="fadeIn">Sculpture <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a>Category</a></li>
                        </ul>
                    </li>
                    <li><a>Photography</a></li>
                    <li class="dropdown">
                        <a href="#x" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-animations="fadeIn">Language <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a>English</a></li>

                            <li><a>Arabic</a></li>
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
</header>
<!-- End Header -->