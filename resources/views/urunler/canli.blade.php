@extends('layouts.main')
@section('title','Canlı Larva | Canlı Yem Satış')
@section('description','BSF Larva Online Satış.')
@section('keywords','Siyah Asker Sineği, Siyah Asker Sineği Larvası')
@section('content')
<section id="urun1" class="py-5 mt-5">

    <div class="container my-5">
        <div class="row">
            <div class="col-md-5 mt-1">

                <div class="card border-0 shadow">
                    <div class="card-body">

                        <img src="{{asset('public/images/bsf-canli-larva.gif')}}" width="405px" class="img-fluid">

                    </div>
                </div>

            </div>


            <div class="col-md-7">

                <h2 > CANLI LARVA</h2>
                <p style="font-size: 20px;">Kanatlı çiftlik hayvanları, sürüngenler, kuşlar, akvaryum balıkları, süs balıkları ve özellikle hayvanat bahçelerinde beslenen egzotik canlılar için besleme yapılabilmektedir. İçeriğindeki kalsiyum, fosfor dengesi, yüksek laurik asit miktarı , protein , yağ ve enerjiden dolayı hayvan sağlığına olumlu etkileri mevcuttur. </p>

                <div class="row">

                    <div class="col-md-7">

                        <ul style="font-size: 20px;">
                            <li>% 13 Protein</li>
                            <li>% 10 Yağ</li>
                            <li>% 70 Nem</li>
                            <li>% 7 Diğer Mineraller İçerir </li>
                        </ul>
                    </div>

                    <div class="col-md-5 text-center">
                        <img width="200px;" src="{{asset('public/images/kargo.png')}}" class="img-fluid">
                        <h4 class="text-success">(Kargo : +10 TL)</h4>
                    </div>
                </div>

                <form action="{{route('bsf-satis_post', app()->getLocale())}}" method="POST">
                    {{csrf_field()}}
                    <select name="miktar"  class="form-control" id="sel1" onchange="dropdownchange()" style="font-size: 20px;">
                        @foreach($urundata as $key=>$value)
                        <option value='{{$value->fiyat}}' @if($value->satistami=='Hayır') disabled @endif>{{$value->miktar}} {{$value->birim}}</option>
                        @endforeach
                    </select>

                    <div class="toplamfiyat mt-1">
                        <input type="number" class="border-0 text-success" value="@if($urundata->where('satistami','=','Evet')->count()>0){{$urundata->where('satistami','=','Evet')->first()->fiyat}}@endif" id="toplamfiyatid"  name="topfiyatname"readonly style="width: 80px;">
                        <label class="text-success">TL</label>
{{--                        <label class="text-success">(Koloni büyütme aşamasında olduğumuz için satışlarımız kısa bir süreliğine kapatılmıştır.)</label>--}}
                    </div>



                    <input type="hidden" name="siparis_tur" value="Canlı Larva" />
                    <input type="hidden" name="miktar" id="miktarid" value="@if($urundata->where('satistami','=','Evet')->count()>0){{$urundata->where('satistami','=','Evet')->first()->miktar}} {{$urundata->where('satistami','=','Evet')->first()->birim}}@endif" />


                    <!--                            <button type="submit" class="btn btn-outline-success btn-block btn-disabled"  disabled>Canlı Larva Satışı İçin İletişime Geçin</button>-->

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
                  "name": "BSF Canlı Larva",
                  "image": "{{ URL::asset('public/images/bsf-canli-larva.gif') }}",
                  "description": "Siyah Asker Sineği Larvası, Canlı Yem",
                  "brand": "Siyah Asker Sineği,BSF,Canlı Larva,",
                  "offers": {
                    "@type": "Offer",
                    "url": "https://profatfood.com/bsf-canli-larva",
                    "priceCurrency": "TRY",
                    "price": "60"
                  }
                }
</script>



    @endpush

