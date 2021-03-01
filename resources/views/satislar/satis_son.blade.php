@extends('layouts.main')
@section('title','Canlı Yem Satış BSF ')
@section('description','BSF Larva Online Satış.')
@section('keywords','Siyah Asker Sineği, Kara Asker Sineği Larvası, BSF Larvası,Siyah Asker Sineği Larvası')
@section('content')

    <?php use App\Siparis;
    use Illuminate\Support\Facades\Mail;
    $formData = Session::get('formData');

    require_once('public/iyzico/config.php');


    # create request class

    $request = new \Iyzipay\Request\RetrieveCheckoutFormRequest();

    $request->setLocale(\Iyzipay\Model\Locale::TR);

    $request->setConversationId("123456789");

    $request->setToken($_POST["token"]);


    # make request

    $checkoutForm = \Iyzipay\Model\CheckoutForm::retrieve($request, Config::options());



    # print result



    # print result

    print_r($checkoutForm->getPaymentStatus());

    print_r($checkoutForm->getErrorMessage());

    $basketid=$checkoutForm->getbasketId();


    # mail atma

    $siparisNo = $basketid;

    $dbsiparis=Siparis::find($siparisNo);
    $dbsiparis->id;

    $siparis_tur= $dbsiparis->urun_ad;
    $siparis_miktar= $dbsiparis->miktar;
    $ad_soyad= $dbsiparis->ad_soyad;
    $mailadresi= $dbsiparis['mail'];
    $tel= $dbsiparis->tel;
    $sevk_adres= $dbsiparis->sevk_adres;



    /// müşteri mail body



    $data1 = array
    (
        'siparisNo'=>$siparisNo,
        'siparis_tur'=>$siparis_tur,
        'siparis_miktar'=>$siparis_miktar,
        'ad_soyad'=>$ad_soyad,
        'mailadresi'=>$mailadresi,
        'tel'=>$tel,
        'sevk_adres'=>$sevk_adres
    );

    $data2 = array
    (
        'siparisNo'=>$siparisNo,
        'siparis_tur'=>$siparis_tur,
        'siparis_miktar'=>$siparis_miktar
    );
       function mailgonder($data,$view) {



        Mail::send($view, $data, function ($message)  {
            $message->subject ('Profat Food Satış Özeti');
            $message->from ('info@profatfood.com', 'Profat Food');
            $message->to('eyup.tas@ciftcilerelektrik.com.tr', 'Eyüp Taş');
            $message->to('info@profatfood.com', 'Profat Food');
            $message->to('profatfood@gmail.com', 'Profat Food');
        });

    }


    function mailgonderMusteri($data,$view,$send_mail) {



        Mail::send($view, $data, function ($message) use ($send_mail) {
            $message->subject ('Profat Food Satış Özeti');
            $message->from ('info@profatfood.com', 'Profat Food');
            $message->to($send_mail, 'Müşteri');
        });


    }


    # sonuç ekranı

    if ($checkoutForm->getPaymentStatus()=="SUCCESS") {
        $sonuc="Siparişiniz Başarıyla Alınmıştır. <br> Sipariş Numaranız : ".$siparisNo."<br> Sipariş Bilgileriniz mailinize gönderilmiştir.";


          mailgonder($data1,'mail/mail_satis');
        mailgonderMusteri($data1,'mail/mail_musteri',$mailadresi);

        $dbsiparis->onay=1;
        $dbsiparis->save();
    }
    else {
        $sonuc= "Ödeme işlemlerinde hata oldu! Lütfen daha sonra tekrar deneyiniz.";
        mailgonder($data1,'mail/mail_satis_hata');


    }
    ?>


    <section id="hakkimizda" class="py-5 mt-5">

        <div class="container py-5 mt-5">
            <div class="row  text-center justify-content-center py-5 mt-5">
                <div class="col-md-8">

                    <h3><?php echo $sonuc ?></h3>


                </div>






            </div>





        </div>



    </section>



@endsection
