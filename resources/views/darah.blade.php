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

<header>

    <!-- start top -->
    <div id="topnav" class="navbar navbar-fixed-top default">
        <div class="navbar-inner">
            <div class="container" style="padding: 15px 0 15px 0;">
                <div class="logo">
                    @if(isset($number))
                        <a class="brand" href="/darah-tinggi/{{$number->username}}"><img src="{{ asset('img/logo_title.png')}}" class="logobrand"></a>
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

<!-- section faktor -->
<section id="faktor" class="section">
    <div class="container">
        <div class="row phone">
            <div  class="span-12">
                <div>
                    <img src="{{ asset('img/Penyakit-top.jpg')}}">
                </div>
                <p style="text-align: center; font-size: 18px;">
                    <b><br>PENYAKIT TEKANAN DARAH TINGGI <br>ANDA MASIH TAK HILANG WALAU <br>DAH CUBA MACAM-MACAM <br>UBAT DAN PETUA?</b>
                </p>
                <br>
                <p style="text-align: center;">
                    <b>Tahukah anda seramai 5.8 juta <br>rakyat Malaysia berusia 18 tahun ke atas <br>menghidap
                        Penyakit Tekanan Darah Tinggi <br>yang juga penyumbang utama kematian <br>di negara ini?<br>
                        (Statistik dari Kementerian Kesihatan Malaysia)
                    </b>
                </p>
                <br>
                <p style="text-align: center;">
                    <b>
                        Mungkin anda hairan kenapa anda dah cuba macam-macam ubat dan petua, elakkan makanan yang tinggi kolesterol, gula dan garam tapi Penyakit Tekanan Darah Tinggi anda masih tak hilang kan?
                    </b>
                </p>
                <br>
                <p style="text-align: center;">
                    Anda perlu tahu bahawa punca utama yang menyebabkan Penyakit Tekanan Darah Tinggi bukan semata-mata disebabkan oleh makanan yang tinggi kolesterol, gula dan garam sahaja!
                </p>
                <br>
                <p style="text-align: center; font-size: 18px;">
                    <br>
                    <b>6 FAKTOR PENYEBAB PENYAKIT TEKANAN DARAH TINGGI</b>
                </p>
                <ol>
                    <li><p><b>Keradangan Kronik</b>– ia merosakkan dinding saluran darah. Kolesterol jahat (LDL) melekat padanya dan akan membentuk plak kolestrol yang menyempitkan salur darah hingga meningkatkan tekanan darah.</p></li><br>
                    <li><p><b>Radikal Bebas</b>- ia merosakkan sel-sel saluran darah hingga menyebabkannya mengeras. Saluran darah perlu anjal (lembut) untuk mengembang dan menguncup supaya dapat mengawal paras tekanan darah menjadi normal.</p></li><br>
                    <li><p><b>Paras Kolesterol Tinggi Dalam Darah</b>- kolesterol jahat (LDL) yang tinggi dalam darah akan melekat pada dinding saluran darah yang rosak akibat keradangan kronik dan akan membentuk plak kolesterol yang menyempitkan salur darah hingga meningkatkan tekanan darah.</p></li><br>
                    <li><p><b>Paras Gula Tinggi Dalam Darah</b>- paras gula yang tinggi dalam darah akan menyebabkan keradangan kronik yang akan merosakkan dinding saluran darah.</p></li><br>
                    <li><p><b>Kegemukan</b>- menyebabkan pengumpulan lemak pada otot jantung. Jantung terpaksa mengepam lebih kuat seterusnya meningkatkan tekanan darah.</p></li><br>
                    <li><p><b>Pengambilan garam berlebihan</b>- akan membendung air dalam saluran darah seterusnya membengkakkan dinding saluran darah yang menyempitkan salur darah hingga meningkatkan tekanan darah.</p></li>
                </ol>
                <br>
                <p style="text-align: center; font-size: 18px;">
                    <br>
                    <b>APA MASALAH YANG <br>KERAP DIALAMI OLEH PESAKIT <br>TEKANAN DARAH TINGGI?
                    </b>
                </p>
                <ul>
                    <li>Mudah stres dan meradang.</li><br>
                    <li>Mudah sakit kepala dan rasa berat.</li><br>
                    <li>Tengkuk rasa tegang dan berat.</li><br>
                    <li>Muntah apabila sakit kepala yang kuat.</li><br>
                    <li>Kabur pemandangan / penglihatan jadi kurang jelas.</li><br>
                    <li>Kerap rasa dada berdebar.</li><br>
                    <li>Urat merah pada mata putih kelihatan sangat jelas.</li><br>
                    <li>Telinga rasa berdengung.</li><br>
                    <li>Bengkak tidak menyusut pada pergelangan kaki.</li>
                </ul>
                <br>
                <p style="text-align: center; font-size: 18px;">
                    <br>
                    <b>APA AKAN JADI JIKA PENYAKIT <br>TEKANAN DARAH TINGGI ANDA<br>
                        TIDAK DIKAWAL DAN DIRAWAT <br>SEKARANG?
                    </b>
                </p>
                <ul>
                    <li>Mudah stres dan meradang.</li><br>
                    <li>Anda terdedah dengan serangan strok / angin ahmar secara tiba-tiba yang boleh membahayakan nyawa anda.</li><br>
                    <li>Anda meningkatkan risiko penyakit jantung koronari yang boleh menyebabkan serangan jantung secara mengejut.</li><br>
                    <li>Anda terdedah kepada kerosakan saraf mata yang boleh menyebabkan penglihatan kurang jelas atau menjadi rabun.</li><br>
                    <li>Anda meningkatkan risiko komplikasi buah pinggang dimana 30% kerosakan buah pinggang akibat dari masalah Tekanan Darah Tinggi.</li><br>
                    <li>Kematian.</li>
                </ul>
                <br>
                <p>
                    Disebabkan majoriti pesakit Tekanan Darah Tinggi tidak mempunyai apa-apa simptom ketika mengalami penyakit ini dan menganggap masalah-masalah yang dialami sebagai masalah biasa, akhirnya Penyakit Tekanan Darah Tinggi mereka semakin melarat dan bertambah serius hingga membawa kepada kematian.
                </p>
                <p><br>Sebab itulah Penyakit Tekanan Darah Tinggi digelar sebagai Penyakit Pembunuh Dalam Senyap.</p>

                <p><br><b>Elak dan cegah Penyakit Tekanan Darah Tinggi anda dengan JUS TIGA SERANGKAI sekarang!</b></p>

                <p style="text-align: center; font-size: 18px;">
                    <br>
                    <b>
                        BAGAIMANA JUS TIGA SERANGKAI <br>MEMBANTU
                        MENYELESAIKAN <br>PENYAKIT TEKANAN DARAH TINGGI?

                    </b>
                </p>

                <p style="text-align: center;">
                    <b><br>
                        JUS TIGA SERANGKAI adalah <br>minuman campuran 33 Herba Botani <br>yang dapat membantu menyelesaikan <br>Penyakit Tekanan Darah Tinggi anda.
                    </b>
                </p>
                <br>
                <ul>
                    <li>JUS TIGA SERANGKAI menggunakan Formula METABOLAID (MetA) dari gabungan Bunga Raya dan Lemon Verbena untuk :-
                        <ul><br>
                            <li>Kesan Antiradang untuk mengelakkan kerosakan dinding saluran darah.</li>
                            <li>Kesan Antioksidan untuk mengelakkan salur darah mengeras.</li>
                            <li>Menurunkan kegemukan supaya lemak tak berkumpul pada otot jantung.</li>
                            <li>Menurunkan kolesterol untuk mengelakkan pembentukan plak kolesterol.</li>
                        </ul>
                    </li><br>
                    <li>JUS TIGA SERANGKAI juga menggunakan Formula Frukto Oligosakarida (FOS untuk :-
                        <ul><br>
                            <li>Menguatkan imuniti tubuh.</li>
                            <li>Prebiotik untuk kesihatan usus.</li>
                        </ul>
                    </li><br>

                </ul>

                <p><b>Setelah anda amalkan JUS TIGA SERANGKAI ni, anda akan dapati :-</b></p><br>
                <ul>
                    <li>Anda lebih tenang dan tidak mudah stres atau meradang.</li><br>
                    <li>Anda tidak lagi kerap sakit kepala dan rasa berat.</li><br>
                    <li>Anda tidak lagi rasa tegang dan berat pada tengkuk.</li><br>
                    <li>Anda tidak lagi muntah kerana sakit kepala yang kuat.</li><br>
                    <li>Anda tidak lagi rasa dada berdebar yang kerap.</li><br>
                    <li>Anda dapati tiada lagi urat merah pada mata putih.</li><br>
                    <li>Anda dapati tiada lagi rasa telinga berdengung.</li><br>
                    <li>Anda dapati bengkak pada pergelangan kaki semakin menyusut.</li><br>
                    <li>Anda rasa lega kerana risiko serangan strok / angin ahmar boleh dielakkan.</li><br>
                    <li>Anda rasa lega kerana risiko penyakit jantung koronari / serangan jantung boleh dielakkan.</li><br>
                    <li>Anda rasa lega kerana risiko kerosakan mata boleh dielakkan.</li><br>
                    <li>Anda rasa lega kerana risiko komplikasi dan kerosakan buah pinggang boleh dielakkan.</li><br>
                    <li>Anda rasa lega kerana risiko kematian akibat serangan strok / angin ahmar, penyakit jantung koronari / serangan jantung, komplikasi dan kerosakan buah pinggang boleh dielakkan.</li>
                </ul>
                <br><br>
                <div>
                    <img src="{{ asset('img/33herba.png')}}" ><br>
                    <img src="{{ asset('img/list_buah.png')}}" >
                </div>
                <br>
                <p style="text-align: center; font-size: 18px;">
                    <br>
                    <b>
                        JUS TIGA SERANGKAI <br>MAKANAN TERBAIK UNTUK<br>
                        PENYAKIT TEKANAN DARAH TINGGI
                    </b>
                </p>
                <br>
                <div>
                    <img src="{{ asset('img/Features-bottom.jpg')}}" >
                </div>
                <p style="text-align: center; font-size: 18px;">
                    <br><br>
                    <b>
                        MENDAPAT SIJIL HALAL DARI JAKIM
                    </b>
                </p>
                <img src="{{ asset('img/halal.jpg')}}" >
                <br>
                <p style="text-align: center; font-size: 18px;">
                    <br><br>
                    <b>
                        HUBUNGI KAMI
                    </b>
                </p>
                <p style="text-align: center;">
                    Sebaiknya, sebelum anda mencuba <br>JUS TIGA SERANGKAI ni, dapatkan khidmat <br>nasihat daripada kami supaya kami dapat <br>pastikan kami dapat bantu selesaikan <br>masalah anda dengan berkesan!
                </p>
                <p style="text-align: center;">
                    <b>KAMI JUGA NAK TAWARKAN <br>HARGA ISTIMEWA UNTUK ANDA!<br><br>
                        KLIK GAMBAR DI BAWAH UNTUK TERUS WHATSAPP KAMI SEKARANG!</b>
                </p>

                @if(isset($number))
                    <a href="/wasap/{{$number->number_phone}}" target="_blank"><img style="width: 80%; padding-left: 10%;" src="{{ asset('img/wasap.jpg')}}" ></a>
                @else
                    <a href="https://kliksini.my/Info-JTS" target="_blank"><img style="width: 80%; padding-left: 10%;" src="{{ asset('img/wasap.jpg')}}" ></a>
                @endif
            </div>
        </div>
    </div>
</section>
<!-- section works -->

<footer>
    <div class="verybottom">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <div class="aligncenter">
                        <div class="logo">
                            @if(isset($number))
                                <a class="brand" href="/darah-tinggi/{{$number->username}}"><img src="{{ asset('img/3-serangkai-logo.png')}}" alt="" style="width:200px;"></a>
                            @else
                                <a class="brand" href="/"><img src="{{ asset('img/3-serangkai-logo.png')}}" alt="" style="width:200px;"></a>
                            @endif
                        </div>
                        <p>MERUNGKAI PERMASALAHAN KESIHATAN ANDA.</p>
                        <div class="social-links">
                            <ul class="social-links">
                                {{--<li><a href="#" title="Twitter"><i class="icon-circled icon-64 icon-twitter"></i></a></li>--}}
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
