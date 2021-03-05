@extends('layouts.main')
@section('title','Siyah Asker Sineği Larvası Satış')
@section('description','BSF Kuru Larva Online Satış. Tavuk ve Balık Yem Katkı Maddesi Olarak Kullanılabilir.')
@section('keywords','BSF Larvası,Siyah Asker Sineği Larvası')
@section('content')



    <section id="urun1" class="py-5 mt-5">

        <div class="container my-5">
            <div class="row">
                <div class="col-md-5 mt-1">

                            <div id="myCarousel" class="carousel slide shadow">
                                <!-- main slider carousel items -->
                                <div class="carousel-inner">
                                    <div class="active carousel-item" data-slide-number="0">
                                        <img src="{{asset('public/images/bsf-kuru-larva.jpg')}}"  class="img-fluid">

                                    </div>
                                    <div class="carousel-item" data-slide-number="1">
                                        <img src="{{asset('public/images/bsf-larva-unu.jpg')}}"   class="img-fluid">
                                    </div>
                                    <div class="carousel-item" data-slide-number="2">
                                        <img src="http://placehold.it/1200x480&amp;text=three" class="img-fluid">
                                    </div>
                                    <div class="carousel-item" data-slide-number="3">
                                        <img src="http://placehold.it/1200x480&amp;text=four" class="img-fluid">
                                    </div>
                                    <div class="carousel-item" data-slide-number="4">
                                        <img src="http://placehold.it/1200x480&amp;text=five" class="img-fluid">
                                    </div>
                                    <div class="carousel-item" data-slide-number="5">
                                        <img src="http://placehold.it/1200x480&amp;text=six" class="img-fluid">
                                    </div>
                                    <div class="carousel-item" data-slide-number="6">
                                        <img src="http://placehold.it/1200x480&amp;text=seven" class="img-fluid">
                                    </div>
                                    <div class="carousel-item" data-slide-number="7">
                                        <img src="http://placehold.it/1200x480&amp;text=eight" class="img-fluid">
                                    </div>
                                    <div class="carousel-item" data-slide-number="8">
                                        <img src="http://placehold.it/1200x480&amp;text=seven" class="img-fluid">
                                    </div>
                                    <div class="carousel-item" data-slide-number="9">
                                        <img src="http://placehold.it/1200x480&amp;text=eight" class="img-fluid">
                                    </div>

                                    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>

                                </div>
                                <!-- main slider carousel nav controls -->


                                <ul class="carousel-indicators list-inline mx-auto border px-2">
                                    <li class="list-inline-item active">
                                        <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#myCarousel">
                                            <img src="{{asset('public/images/bsf-kuru-larva.jpg')}}" class="img-fluid">

                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a id="carousel-selector-1" data-slide-to="1" data-target="#myCarousel">
                                            <img src="{{asset('public/images/bsf-larva-unu.jpg')}}" class="img-fluid">
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a id="carousel-selector-2" data-slide-to="2" data-target="#myCarousel">
                                            <img src="http://placehold.it/80x60&amp;text=three" class="img-fluid">
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a id="carousel-selector-3" data-slide-to="3" data-target="#myCarousel">
                                            <img src="http://placehold.it/80x60&amp;text=four" class="img-fluid">
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a id="carousel-selector-4" data-slide-to="4" data-target="#myCarousel">
                                            <img src="http://placehold.it/80x60&amp;text=five" class="img-fluid">
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a id="carousel-selector-5" data-slide-to="5" data-target="#myCarousel">
                                            <img src="http://placehold.it/80x60&amp;text=six" class="img-fluid">
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a id="carousel-selector-6" data-slide-to="6" data-target="#myCarousel">
                                            <img src="http://placehold.it/80x60&amp;text=seven" class="img-fluid">
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a id="carousel-selector-7" data-slide-to="7" data-target="#myCarousel">
                                            <img src="http://placehold.it/80x60&amp;text=eight" class="img-fluid">
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a id="carousel-selector-6" data-slide-to="8" data-target="#myCarousel">
                                            <img src="http://placehold.it/80x60&amp;text=seven" class="img-fluid">
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a id="carousel-selector-7" data-slide-to="9" data-target="#myCarousel">
                                            <img src="http://placehold.it/80x60&amp;text=eight" class="img-fluid">
                                        </a>
                                    </li>
                                </ul>
                            </div>

                </div>


                <div class="col-md-7">

                    <h2> KURU LARVA</h2>
                    <p style="font-size: 20px;">Canlı larvanın hijyenik şartlar altında hiçbir katkı maddesi ve koruyucu kullanılmadan yıkanıp
                        kurutulmasıyla elde edilir. Kuru larva mikro mineral bakımından oldukça zengindir. Yüksek
                        protein, yağ ve enerji değerinden dolayı elverişli ve faydalıdır. </p>
                    <div class="row">

                        <div class="col-md-7">
                            <ul style="font-size: 20px;">
                                <li>% 42 Protein</li>
                                <li>% 35 Yağ</li>
                                <li>% 3-8 Nem</li>
                                <li>% 15 Diğer Mineraller İçerir</li>
                            </ul>
                        </div>

                        <div class="col-md-5 text-center">
                            <img width="200px;" src="{{asset('public/images/kargo.png')}}" class="img-fluid">
                            <h4 class="text-success">(Kargo : +10 TL)</h4>
                        </div>
                    </div>


                    <form action="{{route('bsf-satis_post', app()->getLocale())}}" method="POST">
                        {{csrf_field()}}
                        <select name="miktar" class="form-control" id="sel1" onchange="dropdownchange()" style="font-size: 20px;">
                            @foreach($urundata as $key=>$value)
                                <option value='{{$value->fiyat}}' @if($value->satistami=='Hayır') disabled @endif>{{$value->miktar}} {{$value->birim}}</option>
                            @endforeach
                        </select>
                        <div class="toplamfiyat mt-1">
                            <input type="number" class="border-0 text-success" value="@if($urundata->where('satistami','=','Evet')->count()>0){{$urundata->where('satistami','=','Evet')->first()->fiyat}}@endif" id="toplamfiyatid"
                                   name="topfiyatname" readonly style="width: 80px;">
                            <label class="text-success">TL</label>
{{--                            <label class="text-success">(Koloni büyütme aşamasında olduğumuz için satışlarımız kısa bir--}}
{{--                                süreliğine kapatılmıştır.)</label>--}}
                        </div>


                        <input type="hidden" name="siparis_tur" value="Kuru Larva"/>
                        <input type="hidden" name="miktar" id="miktarid" value="@if($urundata->where('satistami','=','Evet')->count()>0){{$urundata->where('satistami','=','Evet')->first()->miktar}} {{$urundata->where('satistami','=','Evet')->first()->birim}}@endif"/>

                        <button type="submit" class="btn btn-outline-success btn-block" @if($urundata->where('satistami','=','Evet')->count()==0) disabled @endif >SATIN AL</button>
                    </form>


                </div>

            </div>


        </div>


    </section>


    <script>


        function dropdownchange() {


            var fiyat= document.getElementById("sel1");
            var secilifiyat = fiyat.options[fiyat.selectedIndex].value;
            var top=secilifiyat;
            document.getElementById("toplamfiyatid").value=top;



            var secilitext = fiyat.options[fiyat.selectedIndex].text;
            document.getElementById("miktarid").value=secilitext;

        }

    </script>
@endsection


@push('scripts')




    <script type="application/ld+json">
                {
                  "@context": "https://schema.org/",
                  "@type": "Product",
                  "name": "BSF Kuru Larva",
                  "image": "{{ URL::asset('public/images/bsf-kuru-larva.jpg') }}",
                  "description": "Siyah Asker Sineği Larvası Kuru Larva",
                  "brand": "Siyah Asker Sineği,BSF,Kuru Larva,",
                  "offers": {
                    "@type": "Offer",
                    "url": "https://profatfood.com/bsf-kuru-larva",
                    "priceCurrency": "TRY",
                    "price": "60"
                  }
                }
</script>



@endpush



