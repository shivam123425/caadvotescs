
<!DOCTYPE HTML>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>Kanina - Multipurpose Business And Digital Agency HTML5 Template</title>

    <!-- CSS Style -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" type="text/css" media="all" />
    <link rel="stylesheet" href="style/other/bootstrap.min.css">
    <link href="style/other/animate.css" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="style/other/magnific-popup.css" rel="stylesheet">
    <link href="style/other/preload.css" rel="stylesheet">
    <link href="style/other/aos.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <script type="text/javascript" src="js/jquery.js"></script> 
    <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js'></script>
    
    <!-- Service List -->

    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- main css files -->
    <link href="style/navbar.css" rel="stylesheet">
    <link href="style/style.css" rel="stylesheet">
    <link href="style/responsive.css" rel="stylesheet">
    <!-- favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <style>
        .desktop-bkg
          {
            background: url(https://www.support.ezeestartup.com/productImage/service/Banner-PVT-temp-20190821055027-9.jpg) no-repeat  top;
              }
          @media screen and (max-width: 580px) {
            .desktop-bkg
          {
            background:url(https://www.support.ezeestartup.com/productImage/service/Banner-PVT-MOB-20190824121326-9.jpg) no-repeat  top;
            background-repeat: no-repeat;
            background-size: contain;
              }  
          }
          #slider-container
        {
            width:150px;
            margin-left:0;
        }
        .ui-slider .ui-slider-range {
            background: #e66c00;
        }
        </style>
</head>

<body>

    <!-- Preloader -->
    <div id="preloader">
        <div id="status"></div>
    </div>
    <!-- Preloader -->

    <!-- Start Navigation -->
    <nav class="navbar navbar-default navbar-fixed navbar-transparent white bootsnav">
        <div class="container-fluid">
            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="blog-post.html#brand">
                    <img src="images/brand/logo-white.png" class="logo logo-display" alt="">
                    <img src="images/brand/logo-black.png" class="logo logo-scrolled" alt="">
                </a>
            </div>
            <!-- End Header Navigation -->
            <!-- Start Atribute Navigation -->
            <div class="attr-nav">
                <ul>
                    <li class="button">
                        <a href="blog-post.html#" class="button btn btn-md btn-default btn-outline-dark radius5">
                            <i class="far fa-comments fa-lg"></i>Livechat</a>
                    </li>
                    <li class="side-menu">
                        <a href="blog-post.html#">
                            Slide Menu<i class="fa fa-align-right fa-lg"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- End Atribute Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-left" data-in="slideInUp" data-out="slideOutUp">
                    @if(count($category) > 0)
                    @foreach ($category as $menu)
                    <li class="dropdown megamenu-fw">
                        <a href="blog-post.html#" class="dropdown-toggle" data-toggle="dropdown">{{$menu->categoryname}}
                        </a>
                        <ul class="dropdown-menu megamenu-content move-left" role="menu">
                            <li>
                                <div class="row">
                                    @if (count($subcategory) > 0)
                                    @foreach ($subcategory as $submenu)
                                    @if ($submenu->ParentCategory == $menu->categoryname)
                                    <!-- end col-3 -->
                                    <div class="col-menu col-md-3">
                                        <h6 class="title">{{$submenu->subcategoryname}}</h6>
                                        <div class="content">
                                            <ul class="menu-col">
                                                @foreach ($services as $page)
                                                @if ($page->subcategory == $submenu->subcategoryname)
                                                <a href="accordions.html">{{$page->servicename}}</a>
                                                @endif
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- end col-3 -->
                                    @endif
                                    @endforeach
                                    @endif
                                </div>
                                <!-- end row -->
                            </li>
                        </ul>
                    </li>
                    @endforeach
                    @endif
                    <li class="dropdown">
                        <a href="#" class="submenu dropdown-toggle active" data-toggle="dropdown">Join Us</a>
                        <ul class="dropdown-menu">
                                <li>
                                    <a href="/login">login</a>
                                </li>
                                <li>
                                    <a href="/register">Register</a>
                                </li>
                                <li>
                                    <a href="/associate-reg">Associate Registration</a>
                                </li>
                            </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>

        <!-- Start Side Menu -->
        <div class="side">
            <a href="blog-post.html#" class="close-side">
                <i class="fa fa-times"></i>
            </a>
            <div class="widget">
                <h6 class="title">About Kanina</h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque ex molestiae molestias voluptatum
                    dignissimos sint porro eveniet cupiditate autem saepe, obcaecati error numquam possimus vel omnis
                    consequatur et. Officiis, quo.</p>
            </div>
            <div class="widget">
                <h6 class="title">Contact Us</h6>
                <ul class="link">
                    <li>
                        <a href="blog-post.html#">Send a ticket</a>
                    </li>
                    <li>
                        <a href="blog-post.html#">LiveChat</a>
                    </li>
                    <li>
                        <a href="blog-post.html#">Get Directions</a>
                    </li>
                    <li>
                        <a href="mailto:hello@youremail.com">Email : hello@youremail.com</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- End Side Menu -->
    </nav>