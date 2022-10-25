<header id="home">

    <!-- Start Navigation -->
    <nav class="navbar navbar-default navbar-fixed dark no-background bootsnav">

        <div class="container">

            <!-- Start Atribute Navigation -->
            <div class="attr-nav button">
                <ul>
                    <li>
                        <a href="{{route('quote')}}">free quote</a>
                    </li>
                </ul>
            </div>
            <!-- End Atribute Navigation -->

            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="/">
                    <img src="{{asset('assets/img/logo.png')}}" class="logo logo-scrolled" alt="Logo">
                </a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
                    <li class="dropdown dropdown-right">
                        <a href="{{route('service')}}" class="dropdown-toggle smooth-menu" data-toggle="dropdown" >Service</a>
                        <ul class="dropdown-menu">
                            @forelse ( $categories2 as $cat )
                              @if (($cat->children->count()==0))
                              <li><a href="{{route('singleService',[$cat->slug])}}">{{$cat->title}}</a></li>
                              @else
                              <li class="dropdown dropdown-right"><a href="{{route('singleService',[$cat->slug])}}" class="dropdown-toggle smooth-menu" data-toggle="dropdown">{{ $cat->title }}</a>
                                <ul  class="dropdown-menu">

                                    @foreach ($cat->children as $child)
                                    <li><a href="{{route('singleService',[$child->slug])}}"> {{ $child->title }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                              @endif

                            @empty
                             <p>No Services Avaiable</p>
                            @endforelse


                        </ul>
                    </li>
                    <li>
                        <a class="smooth-menu" href="{{route('portfolio')}}">Portfolio</a>
                    </li><li>
                        <a class="smooth-menu" href="{{route('project')}}">Project</a>
                    </li>
                    <li>
                        <a class="smooth-menu" href="{{route('blog')}}">Blog</a>
                    </li>
                    <li>
                        <a class="smooth-menu" href="{{route('about')}}">About</a>
                    </li>
                    <li>
                        <a class="smooth-menu" href="{{route('contact')}}">Contact</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>

    </nav>
    <!-- End Navigation -->

</header>
