@extends('layouts.main')
@section('title','PROFATFOOD | Siyah Asker Sineği Larvası - BSF ')
@section('description','Siyah Asker Sineği (BSF) Larvası - Bol Proteinli Balık ve Kanatlı Yemleri - Online Satış.')
@section('keywords','Siyah Asker Sineği, Kara Asker Sineği Larvası, BSF Larvası, Siyah Asker Sineği Larvası')
@section('captcha')
        <script src="https://www.google.com/recaptcha/api.js?render=6Lc7NeEUAAAAAJf8sn-KY-6xtOPTSkFKsd4sx5JR"></script>
    @endsection
@section('content')

    <!-- Header Section -->
    <header id="headerSection">
        <div class="overlay">
            <div class="container">
                <div class="row text-center maincontent">
                    <div class="col my-auto">
                        <h1 class="display-4 text-white"> @lang('msg.slider-baslik')</h1>
                        <p class="altbaslik"><em>@lang('msg.slider-text')</em></p>
                        <button type="button" class="btn btn-success "><a href="#urunlerimiz">@lang('msg.hemen-satin-al')</a>
                        </button>
                        <button type="button" class="btn btn-outline-success "><a href="#hakkimizda">@lang('msg.hakkimizda')</a>
                        </button>
                    </div>
                </div>
            </div>

        </div>


    </header>






    <!-- Ürünlerimiz Section -->

    <section id="urunlerimiz">
        <div class="container">
            <h2>@lang('msg.urunlerimiz')</h2>

            <div class="row animsatinalma2">
                <div class="col-md-4 ">
                    <div class="card text-center border-0 shadow">
                        <div class="image-container">
                            <img class="card-img-top img-fluid" src="{{asset('public/images/bsf-canli-larva.gif')}}"  alt="BSF Canlı Larva">
                            <hr>
                            <div class="image-overlay">
                                <div class="image-text">
                                    <p><b><span style="font-weight: bolder">@lang('msg.protein'): </span>%13</b></p>
                                    <p><b><span style="font-weight: bolder">@lang('msg.yag'): </span>%10</b></p>
                                    <p><b><span style="font-weight: bolder">@lang('msg.nem'): </span>%70</b></p>
                                    <p><b><span style="font-weight: bolder">@lang('msg.diger'): </span>%7</b></p>


                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h3 style="margin-top: -15px;">@lang('msg.canli-larva')</h3>
                            <a class="btn btn-outline-success btn-block" href="{{route('bsf-canli', app()->getLocale())}}">@lang('msg.satin-al')</a>


                        </div>

                    </div>

                </div>
                <div class="col-md-4">
                    <div class="card text-center border-0 shadow">
                        <div class="image-container">
                            <img class="card-img-top img-fluid" src="{{asset('public/images/bsf-kuru-larva.jpg')}}" alt="BSF Kuru Larva">
                            <hr>
                            <div class="image-overlay">
                                <div class="image-text">
                                    <p><b><span style="font-weight: bolder">@lang('msg.protein'): </span>%42</b></p>
                                    <p><b><span style="font-weight: bolder">@lang('msg.yag'): </span>%35</b></p>
                                    <p><b><span style="font-weight: bolder">@lang('msg.nem'):  </span>%3-8</b></p>
                                    <p><b><span style="font-weight: bolder">@lang('msg.diger'): </span>%15</b></p>


                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h3 style="margin-top: -15px;">@lang('msg.kuru-larva')</h3>
                            <a class="btn btn-outline-success btn-block" href="{{route('bsf-kuru', app()->getLocale())}}">@lang('msg.satin-al')</a>


                        </div>

                    </div>

                </div>
                <div class="col-md-4">
                    <div class="card text-center border-0 shadow">
                        <div class="image-container">
                            <img class="card-img-top img-fluid"
                                 src="{{asset('public/images/(0).jpg')}}" alt="BSF 22 Çeşit Besin">
                            <hr>
                            <div class="image-overlay">
                                <div class="image-text">
                                    <p><b><span style="font-weight: bolder">@lang('msg.protein'): </span>%42</b></p>
                                    <p><b><span style="font-weight: bolder">@lang('msg.yag'):  </span>%35</b></p>
                                    <p><b><span style="font-weight: bolder">@lang('msg.nem'): </span>%3-8</b></p>
                                    <p><b><span style="font-weight: bolder">@lang('msg.diger'):</span>%15</b></p>


                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h3 style="margin-top: -15px;">@lang('msg.larva-unu')</h3>
                            <a class="btn btn-outline-success btn-block" href="{{route('bsf-ogutulmus', app()->getLocale())}}">@lang('msg.satin-al')</a>


                        </div>

                    </div>

                </div>


            </div>


        </div>


    </section>





    <!-- bsf Section -->


    <section id="bsfnedir">

        <div class="container">
            <div class="row">
                <div class="col-md-4 anim-bsfleft">
                    <img src="{{asset('public/images/bsf.jpg')}}" class="img-fluid" alt="Siyah Asker Sineği">

                </div>

                <div class="col-md-8 anim-bsfright">
                    <h2 class="mb-1 ">@lang('msg.siyah-asker-sinegi-nedir')</h2>

                    <p><strong>Siyah Asker Sineği (BSF)</strong> batı yarım kürede ve Avustralya'da yaşar. Erişkin
                        sineğin i̇ğnesi ve ağzı yoktur. Bu nedenle organik artık tüketmezler. İnsan ya da bir başka
                        memeliyi ısıramazlar. Sinek hali tamamı ile sterildir ve ellenmesinde mahsur yoktur. Çok fazla
                        uçup insanları rahatsız etmez ve kolayca yakalanıp evden dışarı atılabilir.</p>

                    <h3> @lang('msg.bsfl-siyah-asker-sinegi-larvasi')</h3>

                    <p><strong>Siyah Asker Sineği (BSF) larvaları</strong> hayvan dışkısı ve yemek atıklarını büyük
                        hacimlerde yiyerek olağanüstü bir hızla büyürler. %42 oranında protein ile hacimsel olarak en
                        fazla proteini barındıran kurttur.</p>


                </div>


            </div>


            <div class="row mt-3">


                <div class="col-md-8 anim-bsfright">

                    <p><strong>Siyah Asker Sineği (BSF) larvaları</strong> direk olarak yada kurutulduktan sonra hayvan
                        yemi olarak kullanılabilirler.<strong>Siyah Asker Sineği (BSF)</strong> insanların yaşam 
                        alanlarından uzak durular bu nedenle hastalık taşıma riskleri yoktur ayrıca rekabet ederek başka
                        sinek  ve böceklerin popülasyonlarını sınırlarlar. Kısa yaşam döngüleri sık üremeleri bu
                        sineklerin büyük boyutlarda ve uzun süreli olarak üretimini kolaylaştır. Biyolojik atık
                        tüketmeleri hem bu atıkları çevreye zararsız hale getirmeleri ve hem de yüksek kalitede hayvan
                        yemi sağlamaları nedeni ile etkin ve düşük maliyetli bir modeldir.</p>
                    <p>Omega 3 ve mineraller açısından çok zengin olan ve yüksek oranda kalsiyum içeren bir
                        larvadır. Tüm <strong>kanatlı hayvanlar</strong> ve <strong>balıklar</strong> için mükemmel bir
                        <strong>canlı yemdir.</strong></p>

                    <p><span style="font-weight: bold">Siyah Asker Sineği (BSF) larvasının analizi :</span>
                        %41.1 protein,
                        %34.8 yağ,
                        %14.6 Kül,
                        %7.9 Su,
                        %7 Fiber,
                        %5 kalsiyum,
                        %1.5 Fosfor,
                        %14 NFE(Nitrogen free extract)</p>


                </div>
                <div class="col-md-4 anim-bsfleft">
                    <img src="{{asset('public/images/tavuk.jpg')}}" class="img-fluid" alt="Tavuk Yemi">

                </div>


            </div>

        </div>

    </section>




    <!-- kullanım alani Section -->

    <section id="kullanim">
        <div class="container text-center">
            <h2>@lang('msg.kullanim-alani')</h2>
            <div class="row">
                <div class="col-md-3">
                    <div class="feature">
                        <div class="feature-top">

                            <img class="img-fluid" src="{{asset('public/images/akvaryum.jpg')}}" alt="Akvaryum Balık Yemi">
                            <h3 class="mt-2">Balık Yemi</h3>
                        </div>
                        <p class="text-justify"><strong>Balık yemi</strong> olarak kullanıldığında balıkların immün sistemini destekleyerek
                            hastalıklara daha dayanıklı ve sağlıklı <strong>balık üretimine </strong>katkısı olduğu
                            raporlanmıştır.<strong> Akvaryum balıkları, süs balıkları ve alabalık çiftliklerindeki
                                balıklar</strong> için rahatlıkla kullanılabilmektedir. </p>


                    </div>

                </div>

                <div class="col-md-3">
                    <div class="feature">
                        <div class="feature-top">
                            <img class="img-fluid" src="{{asset('public/images/kus.jpg')}}" alt="Kuş Yemi">
                            <h3 class="mt-2">Kuş Yemi</h3>
                        </div>
                        <p class="text-justify"><strong>Kuşlarda</strong> tüylenme ve yumurta verimini arttırmakta olup canlı, <strong>kuru
                                ve öğütülmüş larva</strong> olarak besleme yapılabilmektedir.</p>
                    </div>

                </div>

                <div class="col-md-3">
                    <div class="feature">
                        <div class="feature-top">
                            <img class="img-fluid" src="{{asset('public/images/surungen.jpg')}}" alt=”Sürüngen Yemi”>
                            <h3 class="mt-2">Sürüngen Yemi</h3>
                        </div>
                        <p class="text-justify"><strong>Canlı Larva, Kuru Larva ve 22 Çeşit Besin</strong> olarak besleme yapılabilmektedir.<strong> 22 Çeşit Besin</strong> mamalarının içerisine koyularak besleme takviyesi olarakta
                            kullanılabilmektedir. </p>
                    </div>

                </div>


                <div class="col-md-3">
                    <div class="feature">
                        <div class="feature-top">
                            <img class="img-fluid" src="{{asset('public/images/kumes.jpg')}}" alt="Kümes Hayvanları Yemi">
                            <h3 class="mt-2">Tavuk Yemi</h3>
                        </div>
                        <p class="text-justify"><strong>Kümes hayvanları</strong>, tüy gelişimi, et ve yumurta üretimi için yüksek miktarda
                            protein, aminoasit ve enerjiye ihtiyaç duyarlar. <strong>BSF Larvası</strong>  içeriğindeki yüksek protein, yağ ve minerallerden dolayı tavuk, bıldırcın vb.
                            kümes hayvanlarından alınan verimi artırmaktadır.</p>


                    </div>

                </div>


            </div>

        </div>


    </section>









    <!-- sozler Section -->

    <section id="sozler" class="text-center py-5 image-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <div class="quote"><i class="fa fa-quote-left fa-4x"></i></div>

                    <div id="sozlercarousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#sozlercarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#sozlercarousel" data-slide-to="1"></li>
                            <li data-target="#sozlercarousel" data-slide-to="2"></li>
                        </ol>

                        <div class="carousel-inner">
                            <div class="carousel-item active yazarlar">
                                <img src="{{asset('public/images/man.jpg')}}" class="img-fluid rounded-circle">
                                <div class="carousel-caption">
                                    <blockquote class="blockquote">
                                        <p class="mb-0">Emek ver,kulak ver, bigi ver ama Sakın boş verme. </p>
                                        <footer class="blackquote-footer">MEVLANA / <cite title="Job">Düşünür</cite>
                                        </footer>

                                    </blockquote>

                                </div>
                            </div>

                            <div class="carousel-item yazarlar">
                                <img src="{{asset('public/images/man.jpg')}}" class="img-fluid rounded-circle">
                                <div class="carousel-caption">
                                    <blockquote class="blockquote">
                                        <p class="mb-0">Doğa, her yaprağında en derin yazılar olan biricik
                                            kitaptır. </p>
                                        <footer class="blackquote-footer">Goethe / <cite title="Job">Yazar</cite>
                                        </footer>

                                    </blockquote>

                                </div>
                            </div>

                            <div class="carousel-item yazarlar">
                                <img src="{{asset('public/images/man.jpg')}}" class="img-fluid rounded-circle">
                                <div class="carousel-caption">
                                    <blockquote class="blockquote">
                                        <p class="mb-0">Son ağaç kesildikten, son ırmak zehirlendikten, son balık
                                            yakalandıktan sonra… Ancak ondan sonra paranın yenemeyeceğini
                                            anlayacaksınız</p>
                                        <footer class="blackquote-footer">Kızılderili Atasözü</footer>

                                    </blockquote>

                                </div>
                            </div>
                        </div>


                    </div>


                </div>
            </div>
        </div>


    </section>




    <!-- hakkımızda Section -->

    <section id="hakkimizda" class="py-5">

        <div class="container">
            <div class="row">
                <div class="col-md-5 mt-1">
                    <img src="{{asset('public/images/hakkimizda.jpg')}}" class="img-fluid" alt=”Hakkımızda”>

                </div>


                <div class="col-md-7">

                    <h2> @lang('msg.hakkimizda')</h2>
                    <p> Şirketimiz <strong>BSF (Black Soldier Fly)</strong> ile araştırmalarına 2017 yılında başlamıştır. Ar-Ge
                        faaliyetleri çerçevesinde yapılan test ve analizlerden olumlu sonuçlar almış ve BSF’nin katma
                        değer oluşturacak canlı bir ürün olduğu sonucuna varılmıştır. Şirket kurucu ortakları yem
                        sektörüne katkı sağlamak için 2019 yılında Profatfood şirketini kurmuşlardır. </p>
                    <p> Şirketimiz önceliğini “ithal mal muadili ürün geliştirme” olarak benimsemiş ve yüksek fayda/kar
                        amacı taşımaktadır. Dünyamızdaki besin zinciri ele alındığında güvenilir, organik ve yüksek
                        protein içeren<strong> BSFL’sı</strong> üretmek gerek birincil tüketiciler için gerekse ikincil tüketici olan biz
                        insanlar için de büyük önem taşıdığını düşünmekteyiz.</p>
                    <p><strong>Türkiye'nin En Büyük BSF Üreticisi</strong> şirketimiz mühendislik birimi BSF ile ilgili Ar-Ge çalışmalarına ara vermeksizin devam etmektedir.</p>



                </div>


            </div>


        </div>


    </section>


    <section id="medya" class="py-5">


        <div class="container text-center">
            <h2 class="text-white">@lang('msg.siyah-asker-sinegi')</h2>
            <p class="text-white">Türk Bilim Adamları, Siyah Asker Sineğinin Atık Sorununu Çözebileceğini Söyledi</p>

                <video style="width: 100%;  height: auto;" controls>
                    <source src="{{asset('public/videos/bsf-video.mp4')}}" type="video/mp4">
                    <source src="{{asset('public/videos/bsf-video.mp4')}}" type="video/ogg">
                    Your browser does not support HTML5 video.
                </video>

        </div>


    </section>


    <section id="blog" class="py-5">


        <div class="container text-center">
            <h2>@lang('msg.son-yazilarimiz')</h2>
            <div class="row blog">
                <div class="col-md-12">
                    <div id="blogCarousel" class="carousel slide" data-ride="carousel">

                        <ol class="carousel-indicators">
                            <li data-target="#blogCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#blogCarousel" data-slide-to="1"></li>
                        </ol>

                        <!-- Carousel items -->
                        <div class="carousel-inner">

                            <div class="carousel-item active">
                                <div class="row">

                                    <div class="col-md-4">
                                        <div class="card border-0 shadow">
                                            <img class="card-img-top img-fluid"
                                                 src="{{asset('public/images/canli-yem-olarak-bsf.jpg')}}"
                                                 alt="Canlı Yem Olarak BSF">
                                            <div class="card-body">
                                                <a href="{{route('blog_yazi1', app()->getLocale())}}" style="color:inherit;">
                                                <h3 class="text-left">Canlı Yem Kara Asker Sineği Larvası</h3>
                                                    <br></a>
                                                <p class="text-justify ozet">Profatfood firması <strong>Türkiye'nin En
                                                        Büyük Siyah Asker Sineği</strong> üretimi yapan firmasıdır.
                                                    Firmamızın satışını yapmış olduğu canlı yem kategorisi
                                                    bilindik canlı yemlerin dışında kara asker
                                                        sineği (black soldier fly) larvasıdır...</p>

                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="card border-0 shadow">
                                            <img class="card-img-top img-fluid"
                                                 src="{{asset('public/images/alternatif-protein-kaynagi.jpg')}}"
                                                 alt="BSF Protein Kaynağı">
                                            <div class="card-body">
                                                <a href="{{route('blog_yazi2', app()->getLocale())}}" style="color:inherit;">
                                                <h3 class="text-left">Alternatif Protein Kaynağı Olarak BSF</h3>
                                                    <br>
                                                </a>
                                                <p class="text-justify ozet ">Kümes hayvanları, tüy gelişimi, et ve
                                                    yumurta üretimi için yüksek miktarda protein, aminoasit ve enerjiye
                                                    ihtiyaç duyarlar. İçeriğindeki yüksek protein, yağ ve enerji
                                                    miktarından dolayı tavuk vb. kümes hayvanlarından alınan verimi
                                                    arttırmaktadır.<strong> Canlı Larva, Kuru Larva ve 22 Çeşit Besin</strong> olarak besleme
                                                    yapılabilmektedir. Öğütülmüş larva yem takviyelerine ilave
                                                    edilerekte beslenmelerinde kullanılabilmekted</p>
                                            </div>

                                        </div>
                                    </div>


                                </div>
                                <!--.row-->
                            </div>
                            <!--.item-->

                            <div class="carousel-item">
                                <div class="row">

                                    <div class="col-md-4">
                                        <div class="card border-0 shadow">
                                            <img class="card-img-top img-fluid"
                                                 src="{{asset('public/images/larva-askerler.jpg')}}"
                                                 alt="Canlı Yem Olarak BSF">
                                            <div class="card-body">
                                                <a href="{{route('blog_yazi3', app()->getLocale())}}" style="color:inherit;">
                                                    <h3 class="text-left" >Türkiye'nin Geri Dönüşüm Projesinde Çalışan Minik Askerleri</h3></a>
                                                <p class="text-justify ozet">Son yıllarda artan maliyetler ile birlikte özellikle kanatlı hayvan ve balık çiftliği yetiştiricileri alternatif yem arayışlarına girmektedir. Bu nedenle 1990'lı yılların başından itibaren dünyanın çeşitli bölgelerinde yetiştirilmeye başlayan böcek yetiştiriciliği son 5 yılda oldukça popüler olmuştur. </p>

                                            </div>

                                        </div>
                                    </div>


                                </div>
                                <!--.row-->
                            </div>
                            <!--.item-->

                        </div>
                        <!--.carousel-inner-->
                    </div>
                    <!--.Carousel-->

                </div>
            </div>
        </div>


    </section>







    <!-- iletişim Section -->

    <section id="iletisim" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">

                    <h2> @lang('msg.iletisim')</h2>
                    <div class="effect aeneas">
                        <div class="buttons">
                            <a href="https://www.facebook.com/profatfood" class="fb" title="Facebook"><i
                                    class="fab fa-facebook" aria-hidden="true"></i></a>
                            <a href="https://www.instagram.com/profatfood/?hl=tr" class="insta" title="Instagram"><i
                                    class="fab fa-instagram" aria-hidden="true"></i></a>
                            <a href="https://api.whatsapp.com/send?phone=905530878086" class="tw" title="Whatsapp"><i
                                    class="fab fa-whatsapp" aria-hidden="true"></i></a>
                        </div>
                    </div>

                    <br>


                    <h3>@lang('msg.adres')</h3>
                    <p>Organize Sanayi Bölgesi 2.Cadde 7.Sokak No:6 AFYONKARAHİSAR</p>
                    <h3>@lang('msg.e-mail')</h3>
                    <p>info@profatfood.com</p>
                    <h3>@lang('msg.telefon')</h3>
                    <p>+90 553 087 8086</p>


                </div>
                <div class="col-lg-7">

                    <form action="{{route('mail_anasayfa', app()->getLocale())}}" method="post">
                        {{csrf_field()}}
                            <input id="token" name="token" type="hidden">
                        <div class="form-group">
                            <div class="input-group input-group-lg">
                                    <span class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </span>
                                <input class="form-control" type="text" placeholder="Adınız" name="ad">
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="input-group input-group-lg">
                                    <span class="input-group-addon">
                                        <i class="fa fa-envelope"></i>
                                    </span>
                                <input class="form-control" type="email" placeholder="E-Mail" name="mail">
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="input-group input-group-lg">
                                    <span class="input-group-addon">
                                        <i class="fas fa-pencil-alt"></i>
                                    </span>
                                <textarea class="form-control" placeholder="Mesajınız..." rows="5"
                                          name="mesaj"></textarea>
                            </div>
                        </div>

                        <input type="submit" value="Gönder" class="btn btn-success btn-block">


                    </form>


                </div>

            </div>


        </div>


    </section>



    <!-- Creates the bootstrap modal where the image will appear -->
    <div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span
                            aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                </div>
                <div class="modal-body">
                    <img src="" id="imagepreview" class="img-fluid">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
                </div>
            </div>
        </div>
    </div>



@endsection

@push('scripts')
    <script>
        grecaptcha.ready(function() {
            grecaptcha.execute('6Lc7NeEUAAAAAJf8sn-KY-6xtOPTSkFKsd4sx5JR', {action: 'homepage'}).then(function(token) {
                document.getElementById("token").value = token;
            });
        });
    </script>

@endpush


