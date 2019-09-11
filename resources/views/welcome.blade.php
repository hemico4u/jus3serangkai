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
                    <a class="brand" href="#"><img src="{{ asset('img/3-serangkai-logo.png')}}" alt="" style="width:100px"></a>
                </div>
                <div class="navigation">
                    <nav>
                        <ul class="nav pull-right">
                            <li class="current"><a href="#featured">Halaman</a></li>
                            <li><a href="#about">Penyakit</a></li>
                            <li><a href="#services">Penyelesaian</a></li>
                            <li><a href="#works">Kebaikan</a></li>
                            <li><a href="#contact">Hubungi</a></li>
                            @if(isset($number))
                                <li><a href="/info/{{$number->username}}">Info Agen</a></li>
                            @endif
                            {{--<li class="dropdown">--}}
                                {{--<a href="#">More</a>--}}
                                {{--<ul class="dropdown-menu">--}}
                                    {{--<li><a href="components.html" class="external">Components</a></li>--}}
                                    {{--<li><a href="icons.html" class="external">Icons</a></li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                        </ul>
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

    <!-- sequence slider -->
    <div id="sequence-theme">
        <img class="prev" src="{{ asset('img/bt-prev.png')}}" alt="Previous">
        <img class="next" src="{{ asset('img/bt-next.png')}}" alt="Next">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <div id="sequence">
                        <ul>
                            <li class="animate-in">
                                <div class="info letter-container">
                                    <h2 class="fade">Jus Tiga Serangkai</h2>
                                </div>
                                <h4 class="subtitle">Campuran Minuman Botani Peria, Madu & Kurma</h4>
                                <div class="bottomup">
                                    <img src="{{ asset('img/3-Serangkai-Jumbo.png') }}" alt="" style="height:33vw;">
                                </div>
                            </li>
                            <li class="animate-in">
                                {{--<div class="info letter-container">--}}
                                    {{--<h2 class="fade">We creates unique website</h2>--}}
                                {{--</div>--}}
                                {{--<h4 class="subtitle">Lorem ipsum dolor sit amet viris torquatos ad vis invidunt singulis</h4>--}}
                                <div class="lefttop">
                                    <img src="{{ asset('img/3serangkai.jpg')}}" alt="" style="margin-top: -120px">
                                </div>
                            </li>
                            <li class="animate-in">
                                <div class="info letter-container">
                                    <h2 class="fade">JUS TIGA SERANGKAI</h2>
                                </div>
                                <h4 class="subtitle">MERUNGKAI PERMASALAHAN KESIHATAN ANDA.</h4>
                                <div class="righttop">
                                    <img src="{{ asset('img/3serangkai2.jpg')}}" alt="">
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end sequence slider -->
</section>
<!-- end featured -->

<!-- Section about -->
<section id="about" class="section parallax">
    <div class="gray-shadow">
    </div>
    <div class="container">
        <div class="row">
            <div class="span12">
                <div class="headline">
                    <h3><span>JUS 3 SERANGKAI MERUNGKAI PERMASALAHAN KESIHATAN ANDA.</span></h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="span4">
                <div class="well box aligncenter">
                    <img src="{{ asset('img/penyakit-jantung.jpg')}}" alt="" style="height:200px; width:200px">
                    <h3>PENYAKIT JANTUNG KORONARI</h3>
                    <p>
                        <b>Tahukah anda PENYAKIT JANTUNG KORONARI kekal sebagai PUNCA UTAMA (36%) KEMATIAN rakyat Malaysia sekarang?</b>
                    </p>
                    <a href="#" class="btn btn-color">Baca Sekarang</a>
                </div>
            </div>
            <div class="span4">
                <div class="well box aligncenter">
                    <img src="{{ asset('img/tekanan-darah-tinggi.jpg')}}" alt="" style="height:200px; width:200px">
                    <h3>TEKANAN DARAH TINGGI</h3>
                    <p>
                        <b>Tahukah anda 1 DARIPADA 3 RAKYAT MALAYSIA mengidap masalah TEKANAN DARAH TINGGI?</b>
                    </p>
                    <a href="#" class="btn btn-color">Baca Sekarang</a>
                </div>
            </div>
            <div class="span4">
                <div class="well box aligncenter">
                    <img src="{{ asset('img/kencing-manis.jpeg')}}" alt="" style="height:200px; width:200px">
                    <h3>KENCING MANIS</h3>
                    <p>
                        <b>Tahukah anda seramai 3.6 JUTA RAKYAT MALAYSIA mengidap PENYAKIT KENCING MANIS?</b>
                    </p>
                    <a href="#" class="btn btn-color">Baca Sekarang</a>
                </div>
            </div>
            {{--<div class="span3">--}}
                {{--<div class="well box aligncenter">--}}
                    {{--<img src="{{ asset('img/3-serangkai-logo.png')}}" alt="" style="width:200px; background-color: black; padding: 5px">--}}
                    {{--<h3>TENTANG KAMI</h3>--}}
                    {{--<p>--}}
                        {{--Lorem ipsum dolor sit amet, eum no latine delectus deserunt diam--}}
                    {{--</p>--}}
                    {{--<a href="#" class="btn btn-color">Learn more</a>--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>
    </div>

    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="span12">--}}
                {{--<h3>who we are</h3>--}}
                {{--<p>--}}
                    {{--Tahukah anda Penyakit Jantung Koronari kekal sebagai punca utama (36%) kematian rakyat Malaysia sekarang? <br>--}}
                    {{--Tahukah anda 1 daripada 3 rakyat Malaysia mengidap Penyakit Tekanan Darah Tinggi?--}}
                    {{--Tahukah anda seramai 3.6 juta rakyat Malaysia mengidap Penyakit Kencing Manis?</p><br>--}}

                {{--<p>--}}
                    {{--Penyakit Jantung Koronari, Tekanan Darah Tinggi dan Kencing Manis merupakan tiga penyakit paling membunuh di Malaysia. Lebih menakutkan ketiga-tiga penyakit yang digelar sebagai Penyakit Tiga Serangkai ini saling berkait antara satu sama lain dan mula dihidap seawal usia 30-an.--}}

                {{--</p>--}}
                {{--<div class="dotted_line"></div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
</section>
<!-- end section about -->

<!-- section services -->
<section id="services" class="section parallax">
    <div class="container">
        <div class="row">
            <div class="span12">
                <div class="headline">
                    <h3><span>JUS 3 SERANGKAI</span></h3>
                </div>
            </div>
            <div class="span12">
                <div class="section-intro">
                    <p>
                        <b>MAKANAN TERBAIK UNTUK MASALAH JANTUNG KORONARI, TEKANAN DARAH TINGGI DAN KENCING MANIS.</b>
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="span3" style="text-align: center"><img src="{{ asset('img/3-Serangkai-Jumbo.png') }}" alt="" style="height:33vw;"></div>
            <div class="span8">
                <div class="well box aligncenter" style="background-color: #dfdfdf; padding: 20px">
                    <p>
                        PENYAKIT JANTUNG KORONARI, TEKANAN DARAH TINGGI dan KENCING MANIS merupakan penyakit yang digelar sebagai PENYAKIT TIGA SERANGKAI!
                    </p>
                </div>
                <br>
                <div class="well box aligncenter" style="background-color: #dfdfdf; padding: 20px">
                    <p>
                        PENYAKIT TIGA SERANGKAI ini saling berkait antara satu sama lain dan LEBIH MENAKUTKAN ia ‘TIGA PENYAKIT PALING MEMBUNUH’ di MALAYSIA.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section services -->

<!-- section works -->
<section id="works" class="section">
    <div class="container">
        <div class="row">
            <div class="span12">
                <div class="headline">
                    <h3><span>Kebaikan Jus Tiga Serangkai</span></h3>
                </div>
            </div>
            <div class="span12">
                <div class="section-intro">
                    <p>
                        <b>JUS 3 SERANGKAI adalah minuman campuran 33 Herba Botani. Ia menggunakan Formula METABOLAID (MetA) dan Frukto Oligosakarida (FOS) yang pertama di Malaysia.
                        </b></p>
                </div>
            </div>
            <div  class="span-12">
                <br>
                <p>
                    Khasiat 33 Herba Botani dengan gabungan Formula METABOLAID (MetA) dan Frukto Oligosakarida (FOS) telah terbukti boleh membantu menyelesaikan masalah Penyakit Tiga Serangkai (Penyakit Jantung Koronari, Tekanan Darah Tinggi dan Kencing Manis ) ini dengan :
                </p>
                <ul style="font-size: 18px;">
                    <li style="margin: 20px;"><b>Tingkatkan Kesan Antiradang</b> – menghalang aktiviti keradangan kronik yang boleh merosakkan dan mematikan sel-sel.</li>
                    <li style="margin: 20px;"><b>Tingkatkan Kesan Antioksidan</b> – merencatkan aktiviti radikal bebas dalam badan.</li>
                    <li style="margin: 20px;"><b>Tingkatkan Metabolisme </b>– meningkatkan pembakaran lemak berlebihan dalam badan dengan lebih baik.</li>
                    <li style="margin: 20px;"><b>Turunkan Paras Kolesterol Jahat</b> – menurunkan kolesterol jahat LDL yang membentuk plak kolesterol dengan meningkatkan kolesterol baik HDL dalam saluran darah.</li>
                    <li style="margin: 20px;"><b>Turunkan Paras Gula</b> – menurunkan paras gula dalam darah supaya tidak berlaku keradangan kronik dalam saluran darah.</li>
                    <li style="margin: 20px;"><b>Melancarkan Sistem Peredaran Darah</b> – membantu ritma denyutan jantung menjadi normal dan menganjalkan saluran darah supaya paras tekanan darah menjadi normal.</li>
                    <li style="margin: 20px;"><b>Menyelaras Sistem Imun</b> – membantu supaya Sistem Imun menjadi normal (tidak terlalu rendah dan tidak menjadi agresif). Sistem Imun yang agresif akan berlaku autoimun yang boleh merosakkan dan mematikan sel-sel.</li>
                    <li style="margin: 20px;"><b>Tingkatkan Penyerapan Kalsium</b> – membantu memelihara ketumpatan jisim tulang.</li>
                    <li style="margin: 20px;"><b>Prebiotik Yang Baik</b> – membantu penghasilan dan keseimbangan bakteria baik dalam usus.</li>
                </ul>
            </div>

            <div  class="span12">
                <br><br>
                <p>
                    <b>JUS 3 SERANGKAI mengandungi 600ml.</b><br>
                    <br>
                    Cara Penggunaan :<br><br>

                    2 sudu besar, 2 kali sehari. (pagi dan malam sebelum makan hidangan utama)<br><br>

                    Jarakkan masa setengah jam jika ada ambil ubat lain.<br><br>

                    33 HERBA BOTANI adalah:<br>
                </p>
            </div>
            <div class="row">
                <div class="span4">
                    <p style="padding-left: 30px">
                        <b>1.  Ekstrak Peria.</b><br><br>
                        <b>2.  Bunga Raya.</b>(Formula METABOLAID (MetA))<br><br>
                        <b>3.  Lemon Verbena.</b>(Formula METABOLAID (MetA))<br><br>
                        <b>4.  Frukto Oligosakarida.</b><br><br>
                        <b>5.	Serbuk Madu.</b><br><br>
                        <b>6.	Serbuk Kurma.</b><br><br>
                        <b>7.	Ekstrak Delima.</b><br><br>
                        <b>8.	Serbuk Buah Tin.</b><br><br>
                        <b>9.	Serbuk Zaitun.</b><br><br>
                        <b>10.	Ekstrak Mengkudu.</b><br><br>
                        <b>11.	Serbuk Saffron.</b><br><br>
                    </p>
                </div>
                <div class="span4">
                    <p style="padding-left: 30px">
                        <b>12.	Ekstrak Goji.</b><br><br>
                        <b>13.	Ekstrak Acai Berry.</b><br><br>
                        <b>14.	Ekstrak Habbatussauda.</b><br><br>
                        <b>15.	Ekstrak Gingko Biloba.</b><br><br>
                        <b>16.	Ekstrak Kismis.</b><br><br>
                        <b>17.	Ekstrak Belalai Gajah.</b><br><br>
                        <b>18.	Ekstrak Panax Ginseng.</b><br><br>
                        <b>19.	Ekstrak Anggur.</b><br><br>
                        <b>20.	Ekstrak Sarang Burung.</b><br><br>
                        <b>21.	Ekstrak Rozel.</b><br><br>
                        <b>22.	Ekstrak Kiwi.</b><br><br>
                    </p>
                </div>
                <div class="span4">
                    <p style="padding-left: 30px">
                        <b>23.	Ekstrak Asam Jawa.</b><br><br>
                        <b>24.	Ekstrak Manggis.</b><br><br>
                        <b>25.	Ekstrak Kunyit.</b><br><br>
                        <b>26.	Ekstrak Halia Bara.</b><br><br>
                        <b>27.	Ekstrak Temulawak.</b><br><br>
                        <b>28.	Ekstrak Jintan Manis.</b><br><br>
                        <b>29.	Ekstrak Camu-Camu.</b><br><br>
                        <b>30.	Arabic Gum.</b><br><br>
                        <b>31.	Ekstrak Buah Naga.</b><br><br>
                        <b>32.	Ekstrak Pegaga.</b><br><br>
                        <b>33.	Stevia.</b><br><br>
                    </p>
                </div>
            </div>
        </div>
    </div><hr>
</section>
<!-- section works -->

<!-- section contact -->
<section id="contact" class="section">
    <div class="container">
        <div class="row">
            <div class="span12">
                <div class="headline">
                    <h3><span>HUBUNGI KAMI</span></h3>
                </div>
            </div>
            <div class="span12">
                <div class="section-end">
                    <p><b>
                        SEBAIKNYA, SEBELUM ANDA MENCUBA JUS 3 SERANGKAI NI, DAPATKAN KHIDMAT NASIHAT DARI KAMI UNTUK KAMI PASTIKAN KAMI DAPAT BANTU SELESAIKAN MASALAH ANDA DENGAN BERKESAN.<br><br>

                            KAMI JUGA NAK TAWARKAN HARGA ISTIMEWA UNTUK ANDA!</b>

                    </p>
                </div>
            </div>
        </div>
        <div class="span12">
            <div class="section-intro">
                <div style="width:100%; margin:0 auto;">
                    @if(isset($number))
                        <a href="https://wa.me/6{{$number->number_phone}}?text=Saya%20Nak%20Jus%20Tiga%20Serangkai" target="_blank"><img src="{{ asset('img/wasap.jpg')}}" ></a>
                    @else
                        <a href="https://wa.me/60135111656?text=Saya%20Nak%20Jus%20Tiga%20Serangkai" target="_blank"><img src="{{ asset('img/wasap.jpg')}}"></a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section contact -->


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
                                <li><a href="https://www.facebook.com/tigaserangkaihemico/" title="Facebook"><i class="icon-circled icon-64 icon-facebook"></i></a></li>
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
