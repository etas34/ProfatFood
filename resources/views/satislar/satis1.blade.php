@extends('layouts.main')
@section('title','Canlı Yem Satış BSF ')
@section('description','BSF Larva Online Satış.')
@section('keywords','Siyah Asker Sineği, Kara Asker Sineği Larvası, BSF Larvası,Siyah Asker Sineği Larvası')
@section('content')

    <?php $formData = Session::get('formData'); ?>

    <section id="hakkimizda" class="py-5 mt-5">
        <div class="container">
            <div class="row  text-center justify-content-center">
                <div class="col-md-8">
                    <div class="progress center-block">
                        <div class="one success-color">
                            <div style="font-size: 25px; font-weight: bold; color: white;">1</div>
                        </div>
                        <div class="two no-color">
                            <div style="font-size: 25px; font-weight: bold; color: white;">2</div>
                        </div>
                        <div class="three no-color">
                            <div style="font-size: 25px; font-weight: bold; color: white;">3</div>
                        </div>
                        <div class="progress-bar bg-success" role="progressbar" style="width: 33%" aria-valuenow="33"
                             aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <hr/>


                    <h4> Alıcı Bilgileri</h4>
                    <form action="{{route('satis1_post', app()->getLocale())}}" method="POST">
                        {{csrf_field()}}

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Adınız" required name="ad">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Soyadınız" required name="soyad">
                        </div>

                        <div class="form-group">
                            <input type="email" class="form-control"
                                   placeholder="Email (Sipariş numarası buraya gönderilecek)" required name="mail">
                        </div>

                        <div class="form-group">
                            <textarea class="form-control" placeholder="Adresiniz" rows="5" required
                                      name="adres"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Telefon" required name="telefon">
                        </div>


                        <input type="hidden" name="siparis_tur" value="{{$formData['siparis_tur']}}"/>
                        <input type="hidden" name="miktar" value="{{$formData['miktar']}}"/>
                        <input type="hidden" name="fiyat" value="{{$formData['topfiyatname']}}"/>
                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-success btn-block">DEVAM ET</button>
                        </div>
                    </form>

                </div>


            </div>


        </div>


    </section>




@endsection
