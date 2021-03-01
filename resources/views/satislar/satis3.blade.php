@extends('layouts.main')
@section('title','Canlı Yem Satış BSF ')
@section('description','BSF Larva Online Satış.')
@section('keywords','Siyah Asker Sineği, Kara Asker Sineği Larvası, BSF Larvası,Siyah Asker Sineği Larvası')
@section('content')

    <?php use App\Siparis;$formData = Session::get('formData');
        $kargolu_fiyat=(int)$formData["fiyat"];
    if($kargolu_fiyat<50)
        {
            $kargolu_fiyat+=10;
        }

    require_once('public/iyzico/config.php');

    if ($formData["birey-sirket"]=="birey"){

        $fat_ad=$formData["fat_bireyad"];
        $fat_vergidaire="BireyselFatura";
        $fat_vergino=$formData["fat_bireytc"];
        $fat_adres=$formData["fat_bireyadres"];

    }
    else if ($formData["birey-sirket"]=="sirket"){

        $fat_ad=$formData["fat_sirketad"];
        $fat_vergidaire="fat_sirketvergidaire";
        $fat_vergino=$formData["fat_sirketvergino"];
        $fat_adres=$formData["fat_sirketadres"];

    }

    $kullanici_ad=$formData["ad"];
    $kullanici_soyad=$formData["soyad"];
    $kullanici_gsm=$formData["telefon"];
    $kullanici_mail=$formData["mail"];
    $kullanici_zaman="2015-10-05 12:43:35";
    $kullanici_adres=$formData["adres"];


    $kullanici_il="-";
    $sepettoplam=$kargolu_fiyat;


    $miktar=$formData["miktar"];
    $siparis_tur=$formData["siparis_tur"];


    $dbsiparis=new Siparis();

    $dbsiparis->urun_ad=$siparis_tur;
    $dbsiparis->miktar=$miktar;
    $dbsiparis->fiyat=$sepettoplam;
    $dbsiparis->ad_soyad=$kullanici_ad." ".$kullanici_soyad;
    $dbsiparis->mail=$kullanici_mail;
    $dbsiparis->tel=$kullanici_gsm;
    $dbsiparis->sevk_adres=$kullanici_adres;
    $dbsiparis->onay=0;
    $dbsiparis->save();




    $siparis_no=$dbsiparis->id ;
    # create request class

    $request = new \Iyzipay\Request\CreateCheckoutFormInitializeRequest();

    $request->setLocale(\Iyzipay\Model\Locale::TR);

    $request->setConversationId("123456789");

    $request->setPrice($sepettoplam);

    $request->setPaidPrice($sepettoplam);

    $request->setCurrency(\Iyzipay\Model\Currency::TL);

    $request->setBasketId($siparis_no);

    $request->setPaymentGroup(\Iyzipay\Model\PaymentGroup::PRODUCT);

    $request->setCallbackUrl(route('satis_son', app()->getLocale()));

    $request->setEnabledInstallments(array(2, 3, 6, 9));


    //$request->setCardUserKey("aSu3/S7tx3xUbYCPliY8RjxRyfg=");


    $buyer = new \Iyzipay\Model\Buyer();

    $buyer->setId("1");

    $buyer->setName($kullanici_ad);

    $buyer->setSurname($kullanici_soyad);

    $buyer->setGsmNumber($kullanici_gsm);

    $buyer->setEmail($kullanici_mail);

    $buyer->setIdentityNumber("12345678902");

    $buyer->setLastLoginDate($kullanici_zaman);

    $buyer->setRegistrationDate($kullanici_zaman);

    $buyer->setRegistrationAddress($kullanici_adres);

    $buyer->setIp("85.34.78.112");

    $buyer->setCity($kullanici_il);

    $buyer->setCountry("Turkey");

    $buyer->setZipCode("00000");

    $request->setBuyer($buyer);


    $shippingAddress = new \Iyzipay\Model\Address();

    $shippingAddress->setContactName($kullanici_ad." ".$kullanici_soyad);

    $shippingAddress->setCity($kullanici_il);

    $shippingAddress->setCountry("Turkey");

    $shippingAddress->setAddress($kullanici_adres);

    $shippingAddress->setZipCode("00000");

    $request->setShippingAddress($shippingAddress);


    $billingAddress = new \Iyzipay\Model\Address();

    $billingAddress->setContactName($fat_ad);

    $billingAddress->setCity("Vergi Numarası : ".$fat_vergidaire);

    $billingAddress->setCountry("Vergi Numarası : ".$fat_vergino);

    $billingAddress->setAddress($fat_adres);

    $billingAddress->setZipCode("00000");

    $request->setBillingAddress($billingAddress);


    $basketItems = array();

    $firstBasketItem = new \Iyzipay\Model\BasketItem();

    $firstBasketItem->setId("BI101");

    $firstBasketItem->setName("Binocular");

    $firstBasketItem->setCategory1("Collectibles");

    $firstBasketItem->setCategory2("Accessories");

    $firstBasketItem->setItemType(\Iyzipay\Model\BasketItemType::PHYSICAL);

    $firstBasketItem->setPrice($sepettoplam);


    $basketItems[0] = $firstBasketItem;

    $request->setBasketItems($basketItems);


    # make request

    $checkoutFormInitialize = \Iyzipay\Model\CheckoutFormInitialize::create($request, Config::options());


    # print result

    # print result

    //print_r($checkoutFormInitialize->getCheckoutFormContent());

    //print_r($checkoutFormInitialize);

    print_r($checkoutFormInitialize->getErrorMessage());
    print_r($checkoutFormInitialize->getCheckoutFormContent());

    ?>


    <section id="hakkimizda" class="py-5 mt-5">

        <div class="container">
            <div class="row  text-center justify-content-center">



                <div class="col-md-8">

                    <div class="progress">
                        <div class="one success-color"><div style="font-size: 25px; font-weight: bold; color: white;" >1</div></div><div class="two success-color"><div style="font-size: 25px; font-weight: bold; color: white;" >2</div></div><div class="three success-color"><div style="font-size: 25px; font-weight: bold; color: white;" >3</div></div>
                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <hr />

                    <h4> Ödeme Bilgileri</h4>
                    <div  id="iyzipay-checkout-form" class="responsive"></div>


                </div>







            </div>





        </div>



    </section>



@endsection
