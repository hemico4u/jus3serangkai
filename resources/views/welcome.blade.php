<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>TIGA SERANGKAI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- styles -->
    <link href="{{ asset('css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-responsive.css')}}" rel="stylesheet">
    <link href="{{ asset('css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{ asset('font/stylesheet.css')}}" rel="stylesheet">
    <link href="{{ asset('css/animate.css')}}" rel="stylesheet">
    <link href="{{ asset('css/flexslider.css')}}" rel="stylesheet">
    <link rel="stylesheet" media="screen" href="{{ asset('css/sequencejs.css')}}">
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('color/default.css')}}" rel="stylesheet">

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('ico/apple-touch-icon-57-precomposed.png')}}">
    <link rel="shortcut icon" href="{{ asset('img/3-serangkai-logo.png')}}">

    <!-- Facebook Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window,document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '2333921286919044'); 
    fbq('track', 'PageView');
    </script>
    <noscript>
    <img height="1" width="1" 
    src="https://www.facebook.com/tr?id=2333921286919044&ev=PageView
    &noscript=1"/>
    </noscript>
    <!-- End Facebook Pixel Code -->

</head>

<body>

{{--<header>--}}
    {{--<!-- start top -->--}}
    {{--<div id="topnav" class="navbar navbar-fixed-top default">--}}
        {{--<div class="navbar-inner">--}}
            {{--<div class="container">--}}
                {{--<div class="logo">--}}
                    {{--@if(isset($number))--}}
                        {{--<a class="brand" href="/jus3serangkai/{{$number->username}}"><img src="{{ asset('img/logo_title.png')}}" alt="" style="height: 50px; margin-bottom: 0px;"></a>--}}
                    {{--@else--}}
                        {{--<a class="brand" href="/"><img src="{{ asset('img/logo_title.png')}}" alt="" style="height: 50px; margin-bottom: 0px;"></a>--}}
                    {{--@endif--}}
                {{--</div>--}}
                {{--<div class="navigation">--}}
                    {{--<nav>--}}
                        {{--<ul class="nav pull-right">--}}
                            {{--<li class="current"><a href="#featured">Halaman</a></li>--}}
                            {{--<li><a href="#about">Penyakit</a></li>--}}
                            {{--<li><a href="#works">Penyelesaian</a></li>--}}
                            {{--<li><a href="#manfaat">Manfaat</a></li>--}}
                            {{--<li><a href="#khasiat">Kebaikan</a></li>--}}
                            {{--<li><a href="#contact">Hubungi</a></li>--}}
                            {{--@if(isset($number))--}}
                                {{--<li><a href="/info/{{$number->username}}">Info Agen</a></li>--}}
                            {{--@endif--}}
                            {{--<li class="dropdown">--}}
                                {{--<a href="#">More</a>--}}
                                {{--<ul class="dropdown-menu">--}}
                                    {{--<li><a href="components.html" class="external">Components</a></li>--}}
                                    {{--<li><a href="icons.html" class="external">Icons</a></li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</nav>--}}
                {{--</div>--}}
                {{--<!--/.nav-collapse -->--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<!-- end top -->--}}
{{--</header>--}}

<header>

    <!-- start top -->
    <div id="topnav" class="navbar navbar-fixed-top default">
        <div class="navbar-inner">
            <div class="container" style="padding: 15px 0 15px 0;">
                <div class="logo">
                    @if(isset($number))
                        <a class="brand" href="/jus3serangkai/{{$number->username}}"><img src="{{ asset('img/logo_title.png')}}" class="logobrand"></a>
                    @else
                        <a class="brand" href="/"><img src="{{ asset('img/logo_title.png')}}" class="logobrand"></a>
                    @endif
                </div>
                <div class="navigation">
                    <nav>
                        <ul class="nav pull-right">
                            @if(isset($number))
                                <li><a href="/info/{{$number->username}}">Info Agen</a></li>
                            @endif
                        </ul>
                    </nav>
                </div>
                <!--/.nav-collapse -->
            </div>
        </div>
    </div>
    <!-- end top -->
</header>


<section class="section">
    <div class="container">
        <div class="row phone">
            <div  class="span-12">
                <div style="padding-bottom: 25px">
                    <img src="{{ asset('img/Penyakit-top.jpg')}}">
                </div>

                {{--<div class="span-12" style="margin: 0px">--}}
                    {{--<div class="well box aligncenter">--}}
                        {{--<img src="{{ asset('img/penyakit-jantung.jpg')}}" alt="" style="height:200px; width:200px">--}}
                        {{--<h3>PENYAKIT JANTUNG KORONARI</h3>--}}
                        {{--<p>--}}
                            {{--<b>Tahukah anda PENYAKIT JANTUNG KORONARI kekal sebagai PUNCA UTAMA (36%) KEMATIAN rakyat Malaysia sekarang?</b>--}}
                        {{--</p>--}}
                        {{--@if(isset($number))--}}
                            {{--<a href="/penyakit-jantung/{{$number->username}}" class="btn btn-color">Baca Sekarang</a>--}}
                        {{--@else--}}
                            {{--<a href="/penyakit-jantung" class="btn btn-color">Baca Sekarang</a>--}}
                        {{--@endif--}}
                    {{--</div>--}}
                {{--</div>--}}

                <div class="span-12" style="margin: 0px;">
                    <div class="well box aligncenter penyakit">
                        <img src="{{ asset('img/hipertansi.jpeg')}}" alt="" style="height:200px;">
                        <h3>TEKANAN DARAH TINGGI</h3>
                        <p style="text-align: center; font-size: 18px;">
                            <b><br>PENYAKIT TEKANAN DARAH TINGGI <br>ANDA MASIH TAK HILANG WALAU <br>DAH CUBA MACAM-MACAM <br>UBAT DAN PETUA?</b>
                        </p>
                        @if(isset($number))
                            <a href="/hipertensi/{{$number->username}}"><img src="{{ asset('img/baca_sekarang.png')}}" ></a>
                        @else
                            <a href="/hipertensi"><img src="{{ asset('img/baca_sekarang.png')}}" ></a>
                        @endif
                    </div>
                </div>

                {{--<div class="span-12" style="margin: 0px">--}}
                    {{--<div class="well box aligncenter">--}}
                        {{--<img src="{{ asset('img/kencing-manis.jpeg')}}" alt="" style="height:200px; width:200px">--}}
                        {{--<h3>KENCING MANIS</h3>--}}
                        {{--<p>--}}
                            {{--<b>Tahukah anda seramai 3.6 JUTA RAKYAT MALAYSIA mengidap PENYAKIT KENCING MANIS?</b>--}}
                        {{--</p>--}}
                        {{--@if(isset($number))--}}
                            {{--<a href="/kencing-manis/{{$number->username}}" class="btn btn-color">Baca Sekarang</a>--}}
                        {{--@else--}}
                            {{--<a href="/kencing-manis" class="btn btn-color">Baca Sekarang</a>--}}
                        {{--@endif--}}
                    {{--</div>--}}
                {{--</div>--}}

            </div>
        </div>
    </div>
</section>

<footer>
    <div class="verybottom">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <div class="aligncenter">
                        <div class="logo">
                            @if(isset($number))
                                <a class="brand" href="/jus3serangkai/{{$number->username}}"><img src="{{ asset('img/3-serangkai-logo.png')}}" alt="" style="width:200px;"></a>
                            @else
                                <a class="brand" href="/"><img src="{{ asset('img/3-serangkai-logo.png')}}" alt="" style="width:200px;"></a>
                            @endif
                        </div>
                        <p>MERUNGKAI PERMASALAHAN KESIHATAN ANDA.</p>
                        <div class="social-links">
                            <ul class="social-links">
                                {{--<li><a href="#" title="Twitter"><i class="icon-circled icon-64 icon-twitter"></i></a></li>--}}
                                <li><a href="https://www.facebook.com/tigaserangkaihemico/" target="_blank" title="Facebook"><i class="icon-circled icon-64 icon-facebook"></i></a></li>
                            </ul>

                        </div>

                        <p>
                            &copy; COPYRIGHT - EXCLUSIVELY BY HEMICO
                        </p>
                        <div class="credits">
                            <!--
                              All the links in the footer should remain intact.
                              You can delete the links only if you purchased the pro version.
                              Licensing information: https://bootstrapmade.com/license/
                              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Selecao
                            -->
                            Designed by <a href="#">MSHDigital</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Javascript Library Files -->
<script src="{{ asset('js/jquery.min.js')}}"></script>
<script src="{{ asset('js/jquery.easing.js')}}"></script>
<script src="{{ asset('js/bootstrap.js')}}"></script>
<script src="{{ asset('js/jquery.lettering.js')}}"></script>
<script src="{{ asset('js/parallax/jquery.parallax-1.1.3.js')}}"></script>
<script src="{{ asset('js/nagging-menu.js')}}"></script>
<script src="{{ asset('js/sequence.jquery-min.js')}}"></script>
<script src="{{ asset('js/sequencejs-options.sliding-horizontal-parallax.js')}}"></script>
<script src="{{ asset('js/portfolio/jquery.quicksand.js')}}"></script>
<script src="{{ asset('js/portfolio/setting.js')}}"></script>
<script src="{{ asset('js/jquery.scrollTo.js')}}"></script>
<script src="{{ asset('js/jquery.nav.js')}}"></script>
<script src="{{ asset('js/modernizr.custom.js')}}"></script>
<script src="{{ asset('js/prettyPhoto/jquery.prettyPhoto.js')}}"></script>
<script src="{{ asset('js/prettyPhoto/setting.js')}}"></script>
<script src="{{ asset('js/jquery.flexslider.js')}}"></script>

<!-- Contact Form JavaScript File -->
<script src="/contactform/contactform.js')}}"></script>

<!-- Template Custom Javascript File -->
<script src="{{ asset('js/custom.js')}}"></script>

</body>

</html>
