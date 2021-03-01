@extends('layouts.main')
@section('title','BSF Türkiye - Geri Dönüşüm Askerleri')
@section('description',"(BSF) Türkiye'nin Geri Dönüşüm Projesinde Çalışan Minik Askerleri")
@section('keywords','Siyah Asker Sineği BLOG')
@section('content')


    <section class="py-5 mt-5">

        <div class="container">

            <div class="row">
                <div class="col-md-8 mt-5">

                    <div class="text-center mb-3">

                        <img style="height:300px; width: auto;"
                             src="{{asset('public/images/larva-askerler.jpg')}}" class="img-fluid"
                             alt="BSF Larva Askerler">
                        <h1 class="mt-3">Türkiye'nin Geri Dönüşüm Projesinde Çalışan Minik Askerleri (BSF)</h1>

                    </div>
                    <div class="text-justify">

                        <p>
                            Son yıllarda artan maliyetler ile birlikte özellikle kanatlı hayvan ve balık çiftliği yetiştiricileri alternatif yem arayışlarına
                            girmektedir. Bu nedenle 1990'lı yılların başından itibaren dünyanın çeşitli bölgelerinde yetiştirilmeye başlayan böcek yetiştiriciliği son 5 yılda
                            oldukça popüler olmuştur. Bu böceklerden en verimli olanlardan birisi de <strong>(Black Soldier Fly) Siyah Asker Sinekleridir.</strong>
                        </p>
                        <p>
                            2017 yılında faaliyete başlayan <strong>Türkiye’nin en büyük üreticisi Profatfood şirketi </strong>Ar-Ge çalışmalarına oldukça hız vermiştir.
                            Bu kapsamda bir adet Kosgeb projesi yürütmekte olup, bir adet 1507 kodlu Ar-Ge niteliği taşıyan Tübitak projesi başvurusu yapmış
                            bulunmaktadır. Profatfood şirketi mühendislik ekibi <strong>Siyah Asker Sinek larvası’nın (BSFL) </strong> özellikle kanatlı ve balık yemi olarak
                            kullanılabilirliğini kapsamlı bir şekilde araştırmaya başlamıştır. Kara asker sinek larvası yem katkıları içinde en yüksek protein
                            içeriğine, ayrıca faydalı yağ içerikleri ve minerallere sahiptir. Bu hayvanların dışkıları organik gübre olarak kullanılabilir.
                            <strong> Siyah Asker Sinek Larvaları</strong>, Sayın <strong>Emine Erdoğan’ın</strong> başlattığı ve önemli rol oynadığı sıfır atık projesine <strong>“organik atıkların geri dönüşümü”</strong>
                            başlığı altında pozitif katkı sağlayacaktır. Geri dönüşen atıklar yüksek proteinli yemlere,
                            larvaların dışkıları ise organik gübreye dönüşecektir. Elde edilecek organik gübrenin, mevcut kimyasal gübrelerin yerini alacak
                            olması ise ülkemizin güvenli gıda üretimini katkı sağlayacaktır.
                        </p>
                        <p>Profatfood şirket müdürü olan Süleyman Çitfçi organik yem olarak kara asker sinek larvası (BSFL) yatırımını şu motto ile sürdürme niyetindedir;</p>
                        <p>“Geleceğin sağlıklı nesilleri organik yem ile beslenmiş besinleri tüketmelidir.”</p>



                    </div>

                </div>

                @include('blog.sidebar')

            </div>


    </section>





@endsection


