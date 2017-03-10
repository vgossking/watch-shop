<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="Watches Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);
        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Custom Theme files -->
    <link href="{{asset('css/app.css')}}" rel='stylesheet' type='text/css'/>
    <link href="{{asset('css/style.css')}}" rel='stylesheet' type='text/css'/>
    <link href='//fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Dorsa' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- start menu -->


    <script src="{{asset('js/jquery.easydropdown.js')}}"></script>
    <script src="{{asset('js/simpleCart.min.js')}}"></script>
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
    @if(Request::is('home') || Request::is('/'))
        <div class="banner">
            @else
                <div class="men_banner">
                    @endif
                    <div class="container">
                        <div class="header_top">
                            <div class="header_top_left">
                                <div class="box_11"><a href="checkout.html">
                                        <h4><p>Cart: <span class="simpleCart_total"></span> (<span
                                                        id="simpleCart_quantity" class="simpleCart_quantity"></span>
                                                items)</p><img src="images/bag.png" alt=""/>
                                            <div class="clearfix"></div>
                                        </h4>
                                    </a></div>
                                <p class="empty"><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
                                <div class="clearfix"></div>
                            </div>
                            <div class="header_top_right">
                                <div class="lang_list register-top-link">
                                    @if(Auth::check())
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="fa fa-sign-out fa-fw"> </i>
                                            Log Out
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                  style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </a>
                                    @else
                                        <a href="{{url(route('register'))}}">Register</a>
                                    @endif

                                </div>
                                <ul class="header_user_info">
                                    @if(Auth::check())
                                        <a class="login" href="">
                                            <i class="user"> </i>
                                            <li class="user_desc">Hi, {{Auth::user()->getFullName()}}</li>
                                        </a>
                                        <div class="clearfix"></div>
                                        @else
                                        <a class="login" href="{{route('login')}}">
                                            <i class="user"> </i>
                                            <li class="user_desc">Log In</li>
                                        </a>
                                        <div class="clearfix"></div>
                                    @endif
                                </ul>
                                <!-- start search-->
                                <div class="search-box">
                                    <div id="sb-search" class="sb-search">
                                        <form>
                                            <input class="sb-search-input" placeholder="Enter your search term..."
                                                   type="search" name="search" id="search">
                                            <input class="sb-search-submit" type="submit" value="">
                                            <span class="sb-icon-search"> </span>
                                        </form>
                                    </div>
                                </div>

                                <div class="clearfix"></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="header_bottom">
                            <div class="logo">
                                <h1><a href="index.html"><span class="m_1">W</span>atches</a></h1>
                            </div>
                            <div class="menu">
                                <ul class="megamenu skyblue">
                                    <li><a class="color2" href="#">Mens</a>
                                        <div class="megapanel">
                                            <div class="row">
                                                <div class="col1">
                                                    <div class="h_nav">
                                                        <h4>Men</h4>
                                                        <ul>
                                                            <li><a href="men.html">Watches</a></li>
                                                            <li><a href="men.html">watches</a></li>
                                                            <li><a href="men.html">Blazers</a></li>
                                                            <li><a href="men.html">Suits</a></li>
                                                            <li><a href="men.html">Trousers</a></li>
                                                            <li><a href="men.html">Jeans</a></li>
                                                            <li><a href="men.html">Shirts</a></li>
                                                            <li><a href="men.html">Sweatshirts & Hoodies</a></li>
                                                            <li><a href="men.html">Swim Wear</a></li>
                                                            <li><a href="men.html">Accessories</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col1">
                                                    <div class="h_nav">
                                                        <h4>Women</h4>
                                                        <ul>
                                                            <li><a href="men.html">Watches</a></li>
                                                            <li><a href="men.html">Outerwear</a></li>
                                                            <li><a href="men.html">Dresses</a></li>
                                                            <li><a href="men.html">Handbags</a></li>
                                                            <li><a href="men.html">Trousers</a></li>
                                                            <li><a href="men.html">Jeans</a></li>
                                                            <li><a href="men.html">T-Shirts</a></li>
                                                            <li><a href="men.html">Shoes</a></li>
                                                            <li><a href="men.html">Coats</a></li>
                                                            <li><a href="men.html">Accessories</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="h_nav">
                                                        <h4>Trends</h4>
                                                        <ul>
                                                            <li class>
                                                                <div class="p_left">
                                                                    <img src="images/p1.jpg" class="img-responsive"
                                                                         alt=""/>
                                                                </div>
                                                                <div class="p_right">
                                                                    <h4><a href="#">Denim shirt</a></h4>
                                                                    <span class="item-cat"><small><a
                                                                                    href="#">watches</a></small></span>
                                                                    <span class="price">29.99 $</span>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                            </li>
                                                            <li>
                                                                <div class="p_left">
                                                                    <img src="images/p2.jpg" class="img-responsive"
                                                                         alt=""/>
                                                                </div>
                                                                <div class="p_right">
                                                                    <h4><a href="#">Denim shirt</a></h4>
                                                                    <span class="item-cat"><small><a
                                                                                    href="#">watches</a></small></span>
                                                                    <span class="price">29.99 $</span>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                            </li>
                                                            <li>
                                                                <div class="p_left">
                                                                    <img src="images/p3.jpg" class="img-responsive"
                                                                         alt=""/>
                                                                </div>
                                                                <div class="p_right">
                                                                    <h4><a href="#">Denim shirt</a></h4>
                                                                    <span class="item-cat"><small><a
                                                                                    href="#">watches</a></small></span>
                                                                    <span class="price">29.99 $</span>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li><a class="color4" href="#">womens</a>
                                        <div class="megapanel">
                                            <div class="row">
                                                <div class="col1">
                                                    <div class="h_nav">
                                                        <h4>Men</h4>
                                                        <ul>
                                                            <li><a href="men.html">Watches</a></li>
                                                            <li><a href="men.html">watches</a></li>
                                                            <li><a href="men.html">Blazers</a></li>
                                                            <li><a href="men.html">Suits</a></li>
                                                            <li><a href="men.html">Trousers</a></li>
                                                            <li><a href="men.html">Jeans</a></li>
                                                            <li><a href="men.html">Shirts</a></li>
                                                            <li><a href="men.html">Sweatshirts & Hoodies</a></li>
                                                            <li><a href="men.html">Swim Wear</a></li>
                                                            <li><a href="men.html">Accessories</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col1">
                                                    <div class="h_nav">
                                                        <h4>Women</h4>
                                                        <ul>
                                                            <li><a href="men.html">Watches</a></li>
                                                            <li><a href="men.html">Outerwear</a></li>
                                                            <li><a href="men.html">Dresses</a></li>
                                                            <li><a href="men.html">Handbags</a></li>
                                                            <li><a href="men.html">Trousers</a></li>
                                                            <li><a href="men.html">Jeans</a></li>
                                                            <li><a href="men.html">T-Shirts</a></li>
                                                            <li><a href="men.html">Shoes</a></li>
                                                            <li><a href="men.html">Coats</a></li>
                                                            <li><a href="men.html">Accessories</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="h_nav">
                                                        <h4>Trends</h4>
                                                        <ul>
                                                            <li class>
                                                                <div class="p_left">
                                                                    <img src="images/p1.jpg" class="img-responsive"
                                                                         alt=""/>
                                                                </div>
                                                                <div class="p_right">
                                                                    <h4><a href="#">Denim shirt</a></h4>
                                                                    <span class="item-cat"><small><a
                                                                                    href="#">watches</a></small></span>
                                                                    <span class="price">29.99 $</span>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                            </li>
                                                            <li>
                                                                <div class="p_left">
                                                                    <img src="images/p2.jpg" class="img-responsive"
                                                                         alt=""/>
                                                                </div>
                                                                <div class="p_right">
                                                                    <h4><a href="#">Denim shirt</a></h4>
                                                                    <span class="item-cat"><small><a
                                                                                    href="#">watches</a></small></span>
                                                                    <span class="price">29.99 $</span>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                            </li>
                                                            <li>
                                                                <div class="p_left">
                                                                    <img src="images/p3.jpg" class="img-responsive"
                                                                         alt=""/>
                                                                </div>
                                                                <div class="p_right">
                                                                    <h4><a href="#">Denim shirt</a></h4>
                                                                    <span class="item-cat"><small><a
                                                                                    href="#">watches</a></small></span>
                                                                    <span class="price">29.99 $</span>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li><a class="color10" href="brands.html">Brands</a></li>
                                    <li><a class="color3" href="index.html">Sale</a></li>
                                    <li><a class="color7" href="404.html">News</a></li>
                                    <div class="clearfix"></div>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>

                @yield('content')
        </div>

        <!-- Scripts -->
        <script src="/js/app.js"></script>
        <script src="{{asset('js/classie1.js') }}"></script>
        <script src="{{asset('js/uisearch.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/megamenu.js')}}"></script>
        <script>

            $(document).ready(function () {
                var megaMenu = $('.megamenu');
                megaMenu.megamenu();
            });
        </script>
        <script>
            new UISearch(document.getElementById('sb-search'));
        </script>
    </div>
</body>
</html>
