<!DOCTYPE html>
<html lang="nl">
 <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>Some Template Title</title>
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="Your name">
    
    {!! HTML::style('css/bootstrap.min.css') !!}
    {!! HTML::style('css/styles.css') !!}
    {!! HTML::style('css/nivo-slider.css', ['media' => 'screen']) !!}

</head>
<body>
<!-- Header -->
<div class="bg-1">
	<header>
                               @if(Auth::check())
            <ul class="menu admin-control-panel">
                <li>
                    <a class="" href="{{route('admin.index')}}">Admin Controlepaneel</a>
                </li>
                <li>
                    <a class="logout" href="{{route('logout')}}">Uitloggen</a>
                </li>
            </ul>

        @endif
    	<div class="header_bg1">
            <div class="header_bg2">

                <h1><a href="#">metamorph_curtain</a></h1>
				<h2>Small Company Slogan Here</h2>
            	<div class="main">

              <nav>
                        <ul class="menu">
                            <li><a class="active" href="{{route('index')}}">Home</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Services</a></li>
                            <li class="fright"><a href="#">Contact</a></li>
                            <li class="fright"><a href="#">Blog</a></li>
                            <li class="fright un_border"><a href="#">Gallery</a></li>
                        </ul>
                  </nav>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </header>
</div>
<!-- Slider -->
<div id="my_slider">
 	
	<div id="slider-wrapper">        
            <div id="slider" class="nivoSlider">
                <img src="{{asset('images/slider1.jpg')}}" alt="" />
                <img src="{{asset('images/slider2.jpg')}}" alt=""/>
                <img src="{{asset('images/slider3.jpg')}}" alt="" />
            </div>        
        </div>


@yield('content')
<!-- Footer -->
<footer>
	<div class="container_12">
    	<div class="wrapper">
        	<article class="grid_6">
            	<span class="reg-2">Company Name</span> &copy; 2013 | <a href="#">Privacy Policy</a><br />
				<!-- Do not remove -->Design by <a href="http://www.metamorphozis.com/" title="Website Templates">Website Templates</a><!-- end -->
            </article>
            <article class="grid_6">
                <div class="wrapper">
                    <ul class="soc_list">
                    	<li><a href="#"><img src="{{asset('images/f1.png')}}" alt=""></a></li>
                    	<li><a href="#"><img src="{{asset('images/f2.png')}}" alt=""></a></li>
                    	<li><a href="#"><img src="{{asset('images/f3.png')}}" alt=""></a></li>
                    </ul>
                </div>
            </article>
        </div>
    </div>
</footer>
    {!! HTML::script('js/jquery-1.11.3.min.js') !!}
    {!! HTML::script('js/jquery.nivo.slider.pack.js') !!}
    {!! HTML::script('js/bootstrap.min.js') !!}
    {!! HTML::script('js/app.js') !!}


</div>

</body>
</html>