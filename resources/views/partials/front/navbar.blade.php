<div class="ban-top">
    <div class="container">
        <div class="agileits-navi_search">
            <div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav menu__list">

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle nav-stylehead" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> 
                            All Categories<span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu multi-column columns-3">
                            <div class="agile_inner_drop_nav_info">
                                <div class="col-sm-6 multi-gd-img">
                                    <ul class="multi-column-dropdown">
                                        @isset ($product_categories)
                                        @if ($product_categories)
                                        @foreach ($product_categories as $cat)
                                        <li>
                                            <a href="{{ route('front.product_by_category', $cat->slug) }}">
                                                <b style="color: #FF5722">{{ $cat->name }}</b>
                                            </a>
                                            @if ($cat->product_sub_categories)
                                            <ul class="multi-column-dropdown">
                                                @foreach ($cat->product_sub_categories as $sub_cat)
                                                <li style="padding-left: 10px">
                                                    <a href="{{ route('front.product_by_sub_category', $sub_cat->slug) }}">{{ $sub_cat->name }}</a>
                                                </a>
                                            </li>
                                            @endforeach
                                        </ul>
                                        @endif
                                    </li>
                                    @endforeach
                                    @endif
                                    @endisset
                                </ul>
                            </div>

                            <div class="clearfix"></div>
                        </div>
                    </ul>
                </li>



            </ul>
        </div>
    </div>
    <div class="top_nav_left">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                    aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav menu__list">
                    <li>
                        <a class="nav-stylehead" href="{{ route('front.home') }}">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="">
                        <a class="nav-stylehead" href="{{ route('front.about_us') }}">About Us</a>
                    </li>

                    @isset ($product_categories)
                    @if ($product_categories)
                    @foreach ($product_categories->slice(0,3) as $cat)
                    <li class="dropdown">
                        <a href="{{ route('front.product_by_category', $cat->slug) }}" class="dropdown-toggle nav-stylehead" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> 
                            {{ $cat->name }}<span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu multi-column columns-3">
                            <div class="agile_inner_drop_nav_info">
                                <div class="col-sm-6 multi-gd-img">
                                    <ul class="multi-column-dropdown">
                                        @if ($cat->product_sub_categories)
                                        @foreach ($cat->product_sub_categories as $sub_cat)
                                        <li>
                                            <a href="{{ route('front.product_by_sub_category', $sub_cat->slug) }}">{{ $sub_cat->name }}</a>
                                        </a>
                                    </li>
                                    @endforeach
                                    @endif
                                </ul>
                            </div>

                            <div class="clearfix"></div>
                        </div>
                    </ul>
                </li>
                @endforeach
                @endif
                @endisset



                <li class="">
                    <a class="nav-stylehead" href="{{ route('front.contact') }}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
</div>
</div>
</div>