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

</head>

<body>
<header>

    <!-- start top -->
    <div id="topnav" class="navbar navbar-fixed-top default">
        <div class="navbar-inner">
            <div class="container" style="padding: 15px 0 15px 0;">
                <div class="logo">
                    @if(isset($number))
                        <a class="brand" href="/penyakit-jantung/{{$number->username}}"><img src="{{ asset('img/logo_title.png')}}" class="logobrand"></a>
                    @else
                        <a class="brand" href="/"><img src="{{ asset('img/logo_title.png')}}" class="logobrand"></a>
                    @endif
                </div>
                <div class="navigation">
                    <nav>
                        <ul class="nav pull-right">
                            <li class="current"><a href="#featured">Halaman</a></li>
                            <li><a href="#about">Penyakit</a></li>
                            <li><a href="#simptom">Simptom</a></li>
                            <li><a href="#faktor">Faktor</a></li>
                            <li><a href="#services">Penyelesian</a></li>
                            <li><a href="#manfaat">Manfaat</a></li>
                            <li><a href="#khasiat">Kebaikan</a></li>
                            <li><a href="#contact">Hubungi</a></li>
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

<!-- section featured -->
<section id="featured">
<div class="lefttop">
    <img src="{{ asset('img/3serangkai.jpg')}}" alt="">
</div>
    <!-- sequence slider -->
    <div id="sequence-theme" style="display : none;">
        <img class="prev" src="{{ asset('img/bt-prev.png')}}" alt="Previous">
        <img class="next" src="{{ asset('img/bt-next.png')}}" alt="Next">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <div id="sequence">
                        <!-- <ul>
                            <li class="animate-in">
                                <div class="lefttop">
                                    <img src="{{ asset('img/3serangkai.jpg')}}" alt="">
                                </div>
                            </li>
                        </ul> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end sequence slider -->
</section>
<!-- end featured -->

<!-- Section about -->
<section id="about" class="section">
    <div class="gray-shadow">
    </div>
    <div class="container">
        <div class="row">
            <div class="span12">
                <div class="headline">
                    <h3><span>KHAS UNTUK ANDA YANG ADA MASALAH PENYAKIT JANTUNG KORONARI</span></h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="span4">
                <div class="well box aligncenter" style="height: 410px;">
                    <img src="{{ asset('img/OrangRamai.jpg')}}" alt="" style="height:200px; width:200px">
                    <p>
                        <b>Tahukah anda Penyakit Jantung Koronari kekal sebagai punca utama (36%) kematian rakyat Malaysia sekarang?</b>
                    </p>
                </div>
            </div>
            <div class="span4">
                <div class="well box aligncenter" style="height: 410px;">
                    <img src="{{ asset('img/penyakit-jantung.jpg')}}" alt="" style="height:200px; width:200px">
                    <p>
                        <b>Tahukah anda 80% Pesakit Jantung Koronari adalah LELAKI?</b>
                    </p>
                </div>
            </div>
            <div class="span4">
                <div class="well box aligncenter" style="height: 410px;">
                    <img src="{{ asset('img/kegemukan.jpg')}}" alt="" style="height:200px; width:200px">
                    <p>
                        <b>Tahukah anda kegemukan, tekanan darah tinggi, kencing manis (diabetes) dan kolesterol yang tinggi dalam darah menjadi faktor risiko utama Penyakit Jantung Koronari ini?</b>
                    </p>
                </div>
            </div>
            <div class="span12" style="margin-top: 90px;">
                <div class="well box aligncenter">
                    <p>
                        <b>Penyakit Jantung Koronari ni berlaku apabila oksigen tak sampai pada otot-otot jantung kerana aliran darah dari pembuluh darah koronari tersumbat yang disebabkan oleh plak kolesterol. Otot-otot jantung yang kurang bekalan oksigen akan rosak dan menyebabkan serangan jantung mengejut yang boleh membawa kematian.</b><br><br>
                        Sebab itu lah Penyakit Jantung Koronari ni digelar sebagai Penyakit Pembunuh Senyap yang menjadi punca utama (36%) kematian rakyat Malaysia!
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="span12">
                <div class="well box aligncenter">
                    <p>
                        Bayangkan di suatu pagi, anda dikejutkan oleh pasangan anda. Tapi anda hairan, kenapa pasangan anda kelihatan cemas dan meraung-raung seakan orang kena histeria? Anda bertambah bingung bila lihat anak-anak anda menangis dalam keadaan terpinga-pinga disisi pasangan anda.<br><br>


                        Setelah seketika barulah anda sedar, walaupun anda dah bangun tapi sebenarnya anda dah tak ada lagi di dunia ini kerana anda dah pun mati akibat serangan jantung malam tadi semasa tidur!<br><br>


                        Anda nak jadi macam tu?<br><br>


                        Ketahui simptom dan faktor penyebab kepada masalah Penyakit Jantung Koronari ini!<br><br>

                    </p>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- end section about -->

<!-- Section about -->
<section id="simptom" class="section parallax" style="background: rgb(226,225,220); background: radial-gradient(circle, rgba(226,225,220,1) 0%, rgba(247,235,163,1) 50%, rgba(204,187,156,1) 100%);">
    <div class="gray-shadow">
    </div>
    <div class="container">
        <div class="row">
            <div class="span12">
                <div class="headline">
                    <h3><span>SIMPTOM PENYAKIT KENCING MANIS (DIABETES)</span></h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="span6">
                <div class="well box">
                    <ul style="font-size: 18px;">
                        <li style="margin: 20px;"><p>•	Sakit dada yang mengencang atau menekan.</p></li>
                        <li style="margin: 20px;"><p>•	Sakit dada datang ketika membuat kerja berat.</p></li>
                        <li style="margin: 20px;"><p>•	Sakit dada akan berkurangan dan hilang ketika berehat.</p></li>
                    </ul>
                </div>
            </div>
            <div class="span6">
                <div class="well box">
                    <ul style="font-size: 18px;">
                        <li style="margin: 20px;"><p>•	Sakit ini boleh merebak ke bahagian rahang, leher atau lengan.</p></li>
                        <li style="margin: 20px;"><p>•	Sakit ini selalunya berlaku dalam beberapa minit sahaja.</p></li>
                        <li style="margin: 20px;"><p>•	Sakit ini boleh disertai dengan kesesakan nafas, rasa loya, berpeluh atau pengsan..</p></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section about -->

<!-- section faktor -->
<section id="faktor" class="section">
    <div class="container">
        <div class="row">
            <div class="span12">
                <div class="headline">
                    <h3><span><b>5 FAKTOR PENYEBAB PENYAKIT JANTUNG KORONARI</b></span></h3>
                </div>
            </div>
            <div  class="span-12">
                <ul style="font-size: 18px;">
                    <li style="margin: 20px;"><p><b>KERADANGAN KRONIK.</b><br>Keradangan kronik akan merosakkan dinding saluran darah. Jadi kolesterol jahat (LDL) melekat padanya dan akan membentuk plak kolestrol. Salur darah jadi sempit dan akan menyekat bekalan darah yang membawa oksigen ke otot-otot jantung. Otot-otot jantung yang tak cukup bekalan oksigen akan rosak dan menyebabkan serangan jantung.</p></li><br>
                    <li style="margin: 20px;"><p><b>AKTIVITI RADIKAL BEBAS.</b><br>Aktiviti radikal bebas pula akan merosakkan sel-sel saluran darah hingga menyebabkannya mengeras. Saluran darah perlu anjal (lembut) untuk mengembang dan menguncup supaya dapat mengawal paras tekanan darah menjadi normal. Saluran darah akan pecah jika tak anjal kerana tak dapat menampung tekanan darah yang terlalu tinggi pada otot-otot jantung. Ini menyebabkan serangan jantung akan berlaku.</p></li><br>
                    <li style="margin: 20px;"><p><b>PARAS KOLESTEROL TINGGI DALAM DARAH.</b><br>Kolesterol Jahat (LDL) yang tinggi dalam darah akan melekat pada dinding saluran darah yang rosak akibat keradangan kronik dan akan membentuk plak kolesterol. Salur darah jadi sempit dan akan meningkatkan tekanan darah dan menyekat bekalan darah yang membawa oksigen dengan mencukupi ke otot-otot jantung. Otot-otot jantung yang tak cukup bekalan oksigen akan rosak dan menyebabkan serangan jantung.</p></li><br>
                    <li style="margin: 20px;"><p><b>PARAS GULA TINGGI DALAM DARAH.</b><br>Paras gula yang tinggi dalam darah akan menyebabkan keradangan kronik berlaku yang merosakkan dinding saluran darah.</p></li><br>
                    <li style="margin: 20px;"><p><b>KEGEMUKAN.</b><br>Kegemukan menyebabkan pengumpulan lemak pada otot jantung. Jantung terpaksa mengepam lebih kuat seterusnya meningkatkan tekanan darah. Lama kelamaan otot-otot jantung akan membengkak dan menyebabkan serangan jantung.</p></li><br>
                </ul>
            </div>

            <div class="span12">
                <div class="headline">
                    <b><p>Kalau anda biarkan saja masalah PENYAKIT JANTUNG KORONARI anda BERLARUTAN tanpa mengawal dan merawatnya, anda terdedah kepada risiko SERANGAN STROKE / ANGIN AHMAR yang boleh menyebabkan KEMATIAN!</p></b>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- section works -->

<!-- section services -->
<section id="services" class="section parallax">
    <div class="container">
        <div class="row">
            <div class="span12">
                <div class="headline">
                    <h3><span>JUS TIGA SERANGKAI MENYELESAIKAN<br>MASALAH PENYAKIT JANTUNG KORONARI
</span></h3>
                </div>
            </div>
            <div class="span12">
                <div class="section-intro">
                    <p>
                        <b>JUS TIGA SERANGKAI ADALAH MINUMAN CAMPURAN 33 HERBA BOTANI DENGAN MENGGUNAKAN FORMULA METABOLAID (MetA) DAN FRUKTO OLIGOSAKARIDA (FOS) YANG PERTAMA DI MALAYSIA.</b>
                    </p>
                </div>
                <p>
                    KHASIAT 33 HERBA BOTANI dengan gabungan FORMULA METABOLAID (MetA) dan FRUKTO OLIGOSAKARIDA (FOS) telah TERBUKTI boleh membantu MENYELESAIKAN masalah PENYAKIT JANTUNG KORONARI dengan :
                </p>
            </div>
        </div>
        <div class="row">
            <div class="span3" style="text-align: center"><img src="{{ asset('img/3-Serangkai-Jumbo.png') }}" alt="" style="height:33vw;"></div>
            <div class="span8">
                <div class="well box aligncenter" style="background-color: #dfdfdf;padding: 10px;">
                    <p style="margin: 0px">
                        <b>•	TINGKATKAN KESAN ANTIRADANG</b> – ia mengurangkan keradangan kronik dalam saluran darah supaya pengumpulan plak kolesterol tak berlaku pada dinding saluran darah yang rosak.
                    </p>
                </div>
                <br>
                <div class="well box aligncenter" style="background-color: #dfdfdf;padding: 10px;">
                    <p style="margin: 0px">
                        <b>•	TINGKATKAN KESAN ANTIOKSIDAN</b> – ia bantu merencatkan aktiviti radikal bebas dalam badan supaya saluran darah tak rosak dan mengeras.
                    </p>
                </div>
                <br>
                <div class="well box aligncenter" style="background-color: #dfdfdf;padding: 10px;">
                    <p style="margin: 0px">
                        <b>•	TINGKATKAN METABOLISME</b> – ia bantu meningkatkan pembakaran lemak berlebihan dalam badan dengan lebih baik supaya mengurangkan kegemukan.
                    </p>
                </div>
                <br>
                <div class="well box aligncenter" style="background-color: #dfdfdf;padding: 10px;">
                    <p style="margin: 0px">
                        <b>•	TURUNKAN PARAS KOLESTEROL </b> – ia menurunkan kolesterol jahat LDL yang membentuk plak kolesterol dengan meningkatkan kolesterol baik HDL dalam saluran darah.
                    </p>
                </div>
                <br>
                <div class="well box aligncenter" style="background-color: #dfdfdf;padding: 10px;">
                    <p style="margin: 0px">
                        <b>•	TURUNKAN PARAS GULA </b> – ia menurunkan paras gula dalam darah supaya tidak berlaku keradangan kronik yang boleh merosakkan dinding saluran darah.
                    </p>
                </div>
                <br>
                <div class="well box aligncenter" style="background-color: #dfdfdf;padding: 10px;">
                    <p style="margin: 0px">
                        <b> •	MELANCARKAN SISTEM PEREDARAN DARAH </b> – ia membantu ritma denyutan jantung menjadi normal dan menganjalkan saluran darah supaya boleh mengembang dan menguncup untuk mengawal paras tekanan darah menjadi normal.
                    </p>
                </div>
                <br>
                <div class="well box aligncenter" style="background-color: #dfdfdf;padding: 10px;">
                    <p style="margin: 0px">
                        <b> •	MENYELARAS SISTEM IMUN </b> – ia membantu supaya Sistem Imun menjadi normal (tidak terlalu rendah dan tidak menjadi agresif) supaya tidak berlaku autoimun yang boleh mengganggu Sistem Peredaran Darah yang stabil dan normal.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section services -->

<!-- section manfaat -->
<section id="manfaat" class="section">
    <div class="container">
        <div class="row">
            <div class="span12">
                <div class="headline">
                    <h3><span><b>MANFAAT MENGAMALKAN JUS TIGA SERANGKAI</b></span></h3>
                </div>
            </div>
            <div  class="span12">
                <br>
                <p>
                    <b>MANFAAT UNTUK PENYAKIT JANTUNG KORONARI :</b>
                </p>
                <ul style="font-size: 18px;">
                    <li style="margin: 20px;"><p>Tiada lagi sakit dada yang mengencang dan menekan.</p></li>
                    <li style="margin: 20px;"><p>Tiada lagi sakit dada apabila melakukan kerja berat.</p></li>
                    <li style="margin: 20px;"><p>Risiko serangan stroke / angin ahmar boleh dielakkan.</p></li>
                </ul>
            </div>
            <div  class="span12">
                <br>
                <p>
                    <b>JUS TIGA SERANGKAI mengandungi 600ml.</b>
                </p>
                <p>Cara Penggunaan :</p>
                <ul style="font-size: 18px;">
                    <li style="margin: 20px;"><p>2 sudu besar, 2 kali sehari. (pagi dan malam sebelum makan hidangan utama).</p></li>
                    <li style="margin: 20px;"><p>Jarakkan masa setengah jam jika ada ambil ubat lain.</p></li>
                </ul>
            </div>
        </div>
    </div><hr>
</section>
<!-- section manfaat -->

<!-- section khasiat -->
<section id="khasiat">
    <div class="container">
        <div class="row">
            <div class="headline">
                <img src="{{ asset('img/33herba.png')}}" >
            </div>
        </div>
        <div class="row">
            <div class="span12">
                <div class="headline">
                    <img src="{{ asset('img/list_buah.png')}}" >
                </div>
            </div>
        </div>
    </div>
</section>


<!-- section halal -->
<section id="halal" class="section parallax">
    <div class="container">
        <div class="row">
            <div class="span12">
                <div class="headline">
                    <h3><span>KELULUSAN DAN PERSIJILAN</span></h3>
                </div>
            </div>
        </div>
        <div class="row" style="text-align: center;">
            <div class="span3">
                <img src="{{ asset('img/Logohalal.png')}}" alt="" style="height:200px; width:200px">
            </div>
            <div class="span3">
                <img src="{{ asset('img/gmp.png')}}" alt="" style="height:200px; width:200px">
            </div>
            <div class="span3">
                <img src="{{ asset('img/mesti.png')}}" alt="" style="height:200px; width:auto">
            </div>
            <div class="span3">
                <img src="{{ asset('img/logobuatanmalaysia.png')}}" alt="" style="height:200px; width:auto">
            </div>
        </div>
    </div>
</section>
<!-- end section halal -->


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
                    <p>
                        SEBAIKNYA, SEBELUM ANDA MENCUBA JUS TIGA SERANGKAI NI, DAPATKAN KHIDMAT NASIHAT DARI KAMI UNTUK KAMI PASTIKAN KAMI DAPAT BANTU SELESAIKAN MASALAH ANDA DENGAN BERKESAN.<br><br>

                        <b>KAMI JUGA NAK TAWARKAN HARGA ISTIMEWA UNTUK ANDA!
                            <br><br>
                            KLIK GAMBAR DI BAWAH UNTUK TERUS WHATSAPP KAMI SEKARANG!
                            </br>
                        </b>

                    </p>
                </div>
            </div>
        </div>
        <div class="span12">
            <div class="section-intro">
                <div style="width:100%; margin:0 auto;">
                    @if(isset($number))
                        <a href="/wasap/{{$number->number_phone}}" target="_blank"><img src="{{ asset('img/wasap.jpg')}}" ></a>
                    @else
                        <a href="https://kliksini.my/Jus-Tiga-Serangkai-TDT" target="_blank"><img src="{{ asset('img/wasap.jpg')}}"></a>
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
