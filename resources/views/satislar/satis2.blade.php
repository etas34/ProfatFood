@extends('layouts.main')
@section('title','Canlı Yem Satış BSF ')
@section('description','BSF Larva Online Satış.')
@section('keywords','Siyah Asker Sineği, Kara Asker Sineği Larvası, BSF Larvası,Siyah Asker Sineği Larvası')
@section('content')

    <?php $formData = Session::get('formData'); ?>

    <section id="faturasection" class="py-5 mt-5">

        <div class="container">
            <div class="row  text-center justify-content-center">
                <div class="col-md-8">

                    <div class="progress center-block">
                        <div class="one success-color"><div style="font-size: 25px; font-weight: bold; color: white;" >1</div></div><div class="two success-color"><div style="font-size: 25px; font-weight: bold; color: white;" >2</div></div><div class="three no-color"><div style="font-size: 25px; font-weight: bold; color: white;" >3</div></div>
                        <div class="progress-bar bg-success" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <hr />




                    <h4> Fatura Bilgileri</h4>


                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item col-md-6">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                               aria-selected="true">Bireysel Fatura</a>
                        </li>
                        <li class="nav-item col-md-6">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
                               aria-selected="false">Şirket İçin Fatura</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">


                            <form action="{{route('satis2_post', app()->getLocale())}}" method="POST">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Ad Soyad" value="{{$formData['ad']}} {{$formData['soyad']}}"  required name="fat_bireyad">
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control" placeholder="TC (Zorunlu Değil)" name="fat_bireytc">
                                </div>

                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Fatura Adresiniz" rows="5" required name="fat_bireyadres">{{$formData['adres']}}</textarea>
                                </div>


                                <input type="hidden" name="birey-sirket" value="birey" />
                                <input type="hidden" name="ad" value="{{$formData['ad']}}" />
                                <input type="hidden" name="soyad" value="{{$formData['soyad']}}" />
                                <input type="hidden" name="telefon" value="{{$formData['telefon']}}" />
                                <input type="hidden" name="mail" value="{{$formData['mail']}}" />
                                <input type="hidden" name="adres" value="{{$formData['adres']}}" />
                                <input type="hidden" name="siparis_tur" value="{{$formData['siparis_tur']}}"/>
                                <input type="hidden" name="miktar" value="{{$formData['miktar']}}"/>
                                <input type="hidden" name="fiyat" value="{{$formData['fiyat']}}"/>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-outline-success btn-block">DEVAM ET</button>
                                </div>
                            </form>

                        </div>


                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                            <form action="{{route('satis2_post', app()->getLocale())}}" method="POST">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Firma/Kurum Unvan" required name="fat_sirketad">
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control" placeholder="VergiNo" required name="fat_sirketvergino">
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Vergi Dairesi" required name="fat_sirketvergidaire">
                                </div>

                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Fatura Adresiniz" rows="5" required name="fat_sirketadres"></textarea>
                                </div>

                                <input type="hidden" name="birey-sirket" value="sirket" />
                                <input type="hidden" name="ad" value="{{$formData['ad']}}" />
                                <input type="hidden" name="soyad" value="{{$formData['soyad']}}" />
                                <input type="hidden" name="telefon" value="{{$formData['telefon']}}" />
                                <input type="hidden" name="mail" value="{{$formData['mail']}}" />
                                <input type="hidden" name="adres" value="{{$formData['adres']}}" />
                                <input type="hidden" name="siparis_tur" value="{{$formData['siparis_tur']}}"/>
                                <input type="hidden" name="miktar" value="{{$formData['miktar']}}"/>
                                <input type="hidden" name="fiyat" value="{{$formData['fiyat']}}"/>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-outline-success btn-block">DEVAM ET</button>
                                </div>
                            </form>

                        </div>



                    </div>



                </div>






            </div>





        </div>



    </section>






@endsection
