@extends('layouts.main')
@section('title','Canlı Yem Kara Asker Sineği Larvası | BSF ')
@section('description','Canlı Yem, Kara Asker Sineği, Alternatif Protein Kaynağı Olarak Siyah Asker Sineği')
@section('keywords','Siyah Asker Sineği BLOG, Kara Asker Sineği Larvası, BSF Larvası,Siyah Asker Sineği Larvası')
@section('content')

<header class="masthead" style="background-image: url({{asset('public/images/home-bg.jpg')}})">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1>Profat Food Blog</h1>
                    <span class="subheading">Sağlıklı gelecek için ...</span>
                </div>
            </div>
        </div>
    </div>
</header>



<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-preview">
                <a href="{{route('blog_yazi1', app()->getLocale())}}">
                    <h2 class="post-title">
                        Canlı Yem Kara Asker Sineği Larvası
                    </h2>
                    <p>Profatfood firması Türkiye geneli canlı yem satışı yapan firmalardan birisidir. Firmamızın satışını yapmış olduğu canlı yem kategorisi bilindik canlı yemlerin dışında kara asker sineği (black soldier fly) larvasıdır.Yüksek proteinli bu kara asker sineği (black soldier fly) larvası besine olan ihtiyaçta ve bu besin kaybının önlenmesinde büyük rol oynamaktadır...</p>
                </a>

                <p class="post-meta">25 Ekim, 2019</p>
            </div>

            <div class="post-preview">
                <a href="{{route('blog_yazi2', app()->getLocale())}}">
                    <h2 class="post-title">
                        Alternatif Protein Kaynağı Olarak Siyah Asker Sineği Larvası
                    </h2>
                    <p>Böcek üretimine dayalı alternatif protein ve yağ kaynağı kullanımı Avrupa Birliği, Kanada, Hollanda ve Çin’de yasallaşmış durumdadır. Üretilecek ürünün GDO’lu soyaya kıyasla doğal olması, yağ asidi, fosfor, kalsiyum gibi kısımlarda daha iyi olduğu tespit edilmiştir...</p>
                </a>

                <p class="post-meta">19 Ağustos, 2019</p>
            </div>
            <hr>
        </div>
    </div>
</div>

<hr>



@endsection


