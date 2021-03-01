@extends('layouts.main')
@section('title','Siyah Asker Sineği Larvası Satış')
@section('description','BSF Kuru Larva Online Satış. Tavuk ve Balık Yem Katkı Maddesi Olarak Kullanılabilir.')
@section('keywords','BSF Larvası,Siyah Asker Sineği Larvası')
@section('content')



    <section id="urun1" class="py-5 mt-5">

        <div class="container my-5">
            <div class="row">
                <div class="col-md-5 mt-1">

                    <div class="card border-0 shadow">
                        <div class="card-body">

                            <img src="{{asset('public/images/bsf-kuru-larva.jpg')}}" class="img-fluid" alt="BSF Kuru Larva">

                        </div>
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


