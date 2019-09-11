<!doctype html>
<html lang="my">

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

</head>

<body>
<header>

    <!-- start top -->
    <div id="topnav" class="navbar navbar-fixed-top default">
        <div class="navbar-inner">
            <div class="container">
                <div class="logo">
                    <a class="brand" href="/"><img src="{{ asset('img/3-serangkai-logo.png')}}" alt="" style="width:100px"></a>
                </div>
                <div class="navigation">
                    <nav>
                        {{--<ul class="nav pull-right">--}}
                            {{--<li class="current"><a href="#featured">Halaman</a></li>--}}
                            {{--<li><a href="#about">Penyakit</a></li>--}}
                            {{--<li><a href="#services">Penyelesaian</a></li>--}}
                            {{--<li><a href="#works">Kebaikan</a></li>--}}
                            {{--<li><a href="#contact">Hubungi</a></li>--}}
                            {{--<li class="dropdown">--}}
                                {{--<a href="#">More</a>--}}
                                {{--<ul class="dropdown-menu">--}}
                                    {{--<li><a href="components.html" class="external">Components</a></li>--}}
                                    {{--<li><a href="icons.html" class="external">Icons</a></li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    </nav>
                </div>
                <!--/.nav-collapse -->
            </div>
        </div>
    </div>
    <!-- end top -->
</header>

<!-- section featured -->
<section id="featured">
    <div class="container">
        <div class="row">
            <div class="span12">
                <div class="letter-container inner-heading">
                    <h2 class="fade">DAFTAR</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section featured -->

<!-- section main content -->
<section id="maincontent" class="section demoicon">
    <div class="container">
        <div class="row">
            <div class="span12">
                <div class="row">
                    <div class="span12" style="text-align: center">
                        <h3>Sila isi Ruangan Kosong Di Bawah</h3><br>
                        {{--@if(isset($msj))--}}
                            {{--<p style="color: red">hahahhahahahah</p>--}}
                            {{--@endif--}}
                    </div>
                </div>
                <form action="/submit" method="post" class="contactForm">
                    {{ csrf_field() }}
                    <ul class="contact-list">
                        <li class="form-group">
                            <input type="text" name="name" class="form_input" id="name" placeholder="Nama">
                            <div class="validation"></div>
                        </li>
                        <li class="form-group">
                            <div class="row">
                                <div class="span5" style="text-align: center; padding-top: 6px">
                                    <p><b>URL : http://justigaserangkai.com/jus3serangkai/</b></p>
                                </div>
                                <div class="span7">
                                    <input type="text" name="username" class="form_input" id="username" placeholder="Username">
                                    <div class="validation"></div>
                                </div>
                            </div>
                        </li>
                        <li class="form-group">
                            <input type="text" class="form_input" name="location" id="location" placeholder="Lokasi">
                            <div class="validation"></div>
                        </li>
                        <li class="form-group">
                            <input type="text" class="form_input" name="number_phone" id="number_phone" placeholder="Nombor Telefon">
                            <div class="validation"></div>
                        </li>
                        <li class="form-group">
                            <input type="email" class="form_input" name="email" id="email" placeholder="Alamat Email">
                            <div class="validation"></div>
                        </li>
                        <li class="last">
                            <button class="btn btn-large btn-theme" type="submit" id="send">Daftar Sekarang</button>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- end section main content -->

<footer>
    <div class="verybottom">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <div class="aligncenter">
                        <div class="logo">
                            <a class="brand" href="index.html">
                                <img src="{{ asset('img/3-serangkai-logo.png')}}" alt="" style="width:200px;">
                            </a>
                        </div>
                        <p>MERUNGKAI PERMASALAHAN KESIHATAN ANDA.</p>
                        <div class="social-links">
                            <ul class="social-links">
                                <li><a href="#" title="Twitter"><i class="icon-circled icon-64 icon-twitter"></i></a></li>
                                <li><a href="#" title="Facebook"><i class="icon-circled icon-64 icon-facebook"></i></a></li>
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
