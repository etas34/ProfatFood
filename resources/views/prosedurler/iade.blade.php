@extends('layouts.main')
@section('title','Siyah Asker Sineği Larvası | BSF ')
@section('description','Bol Proteinli Balık ve Kanatlı Yemleri - (BSF)Siyah Asker Sineği Larvası Online Satış.')
@section('keywords','Siyah Asker Sineği, Kara Asker Sineği Larvası, BSF Larvası,Siyah Asker Sineği Larvası')
@section('content')
    <section id="hakkimizda" class="py-5 mt-5">

        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-5">
                    <img src="{{asset('public/images/sozlesme.jpg')}}" class="img-fluid">

                    <h2 class="mt-3 text-center"> Teslimat ve İade</h2>
                    <p lang="en-US" align="justify">
                        <strong>1</strong>
                        .Kullanmakta olduğunuz web sitesi üzerinden elektronik ortamda sipariş
                        verdiğiniz takdirde, size sunulan ön bilgilendirme formunu ve mesafeli
                        satış sözleşmesini kabul etmiş sayılırsınız.
                        <br/>
                        <strong>2</strong>
                        .Alıcılar, satın aldıkları ürünün satış ve teslimi ile ilgili olarak 6502
                        sayılı Tüketicinin Korunması Hakkında Kanun ve Mesafeli Sözleşmeler
                        Yönetmeliği (RG:27.11.2014/29188) hükümleri ile yürürlükteki diğer yasalara
                        tabidir.
                        <br/>
                        <strong>3.</strong>
                        Ürün sevkiyat masrafı olan kargo ücretleri alıcılar tarafından ödenecektir.
                        <br/>
                        <strong>4</strong>
                        .Satın alınan her bir ürün, 30 günlük yasal süreyi aşmamak kaydı ile
                        alıcının gösterdiği adresteki kişi ve/veya kuruluşa teslim edilir. Bu süre
                        içinde ürün teslim edilmez ise, alıcılar sözleşmeyi sona erdirebilir.
                        <br/>
                        <strong>5</strong>
                        .Satın alınan ürün, eksiksiz ve siparişte belirtilen niteliklere uygun ve
                        varsa garanti belgesi,
                        <br/>
                        kullanım klavuzu gibi belgelerle teslim edilmek zorundadır.
                        <br/>
                        <strong>6</strong>
                        .Satın alınan ürünün satılmasının imkansızlaşması durumunda, satıcı bu
                        durumu öğrendiğinden itibaren 3 gün içinde yazılı olarak alıcıya bu durumu
                        bildirmek zorundadır. 15 gün içinde de toplam bedel alıcıya iade edilmek
                        zorundadır.
                        <br/>
                        <strong>SATIN ALINAN ÜRÜN BEDELİ ÖDENMEZ İSE:</strong>
                        <br/>
                        <strong>7</strong>
                        .Alıcı, satın aldığı ürün bedelini ödemez veya banka kayıtlarında iptal
                        ederse, satıcının ürünü
                        teslim yükümlülüğü sona erer.
                        <br/>
                        <strong>
                            KREDİ KARTININ YETKİSİZ KULLANIMI İLE YAPILAN ALIŞVERİŞLER:
                        </strong>
                        <br/>
                        <strong>8.</strong>
                        Ürün teslim edildikten sonra, alıcının ödeme yaptığı kredi kartının
                        yetkisiz kişiler tarafından
                        haksız olarak kullanıldığı tespit edilirse ve satılan ürün bedeli ilgili
                        banka veya finans kuruluşu
                        tarafından satıcıya ödenmez ise, alıcı, sözleşme konusu ürünü 3 gün
                        içerisinde nakliye gideri
                        satıcıya ait olacak şekilde iade etmek zorundadır.
                        <br/>
                        <strong>
                            ÖNGÖRÜLEMEYEN SEBEPLERLE ÜRÜN SÜRESİNDE TESLİM EDİLEMEZ İSE:
                        </strong>
                        <br/>
                        <strong>9.</strong>
                        Satıcı’nın öngöremeyeceği mücbir sebepler oluşursa ve ürün süresinde teslim
                        edilemez ise,
                        durum alıcıya bildirilir. Alıcı, siparişin iptalini, ürünün benzeri ile
                        değiştirilmesini veya engel
                        ortadan kalkana dek teslimatın ertelenmesini talep edebilir. Alıcı siparişi
                        iptal ederse; ödemeyi
                        nakit ile yapmış ise iptalinden itibaren 15 gün içinde kendisine nakden bu
                        ücret ödenir. Alıcı,
                        ödemeyi kredi kartı ile yapmış ise ve iptal ederse, bu iptalden itibaren
                        yine 15 gün içinde ürün
                        bedeli bankaya iade edilir, ancak bankanın alıcının hesabına 2-3 hafta
                        içerisinde aktarması
                        olasıdır.
                    </p>
                    <p lang="en-US" align="justify">
                        <strong>ALICININ ÜRÜNÜ KONTROL ETME YÜKÜMLÜLÜĞÜ:</strong>
                        <br/>
                        <strong>10</strong>
                        .Alıcı, sözleşme konusu mal/hizmeti teslim almadan önce muayene edecek;
                        ezik, kırık, ambalajı yırtılmış vb. hasarlı mal/hizmeti kargo şirketinden
                        teslim almayacaktır. Teslim alınan mal/hizmetin hasarsız ve sağlam olduğu
                        kabul edilecektir. Alıcı, teslimden sonra mal/hizmeti özenle korunmak
                        zorundadır. Cayma hakkı kullanılacaksa mal/hizmet kullanılmamalıdır. Ürünle
                        birlikte fatura da iade edilmelidir.
                        <br/>
                        <strong>CAYMA HAKKI:</strong>
                        <br/>
                        <strong>11</strong>
                        .Alıcı; satın aldığı ürünün kendisine veya gösterdiği adresteki
                        kişi/kuruluşa teslim tarihinden itibaren 15 gün içerisinde, satıcıya
                        aşağıdaki iletişim bilgileri üzerinden bildirmek şartıyla hiçbir hukuki ve
                        cezai sorumluluk üstlenmeksizin ve hiçbir gerekçe göstermeksizin malı
                        reddederek sözleşmeden cayma hakkını kullanabilir.
                        <br/>
                        <strong>
                            12.SATICININ CAYMA HAKKI BİLDİRİMİ YAPILACAK İLETİŞİM BİLGİLERİ:
                        </strong>
                        <br/>
                        <strong>ŞİRKET</strong>
                        <strong>:</strong>
                        <strong>
                            <br/>
                            ADI/UNVANI:
                        </strong>
                        Profatfood Gıda Yem Sanayi ve Ticaret Ltd.Şti.
                        <strong>
                            <br/>
                            ADRES:
                        </strong>
                        Afyon Organize Sanayi Bölgesi 2.cd.7.sk.No: 6 Merkez/ AFYONKARAHİSAR
                        <strong>
                            <br/>
                            EPOSTA
                        </strong>
                        <strong>:</strong>
                        info@profatfood.com
                        <br/>
                        <strong>TEL: </strong>
                    </p>



                    <p lang="en-US" align="justify">
                        <strong>CAYMA HAKKININ SÜRESİ:</strong>
                    </p>
                    <p lang="en-US" align="justify">
                        <strong>13</strong>
                        <strong>.</strong>
                        Alıcı, satın aldığı eğer bir hizmet ise, bu 15 günlük süre sözleşmenin
                        imzalandığı tarihten
                        itibaren başlar. Cayma hakkı süresi sona ermeden önce, tüketicinin onayı
                        ile hizmetin ifasına
                        başlanan hizmet sözleşmelerinde cayma hakkı kullanılamaz.
                        <br/>
                        <strong>14</strong>
                        .Cayma hakkının kullanımından kaynaklanan masraflar satıcıya aittir.
                        <br/>
                        <strong>15</strong>
                        .Cayma hakkının kullanılması için 15 günlük süre içinde satıcıya iadeli
                        taahhütlü
                        <br/>
                        posta, faks veya e-posta ile yazılı bildirimde bulunulması ve ürünün işbu
                        sözleşmede düzenlenen "Cayma Hakkı Kullanılamayacak Ürünler" hükümleri
                        çerçevesinde kullanılmamış olması şarttır.
                        <br/>
                        <strong>CAYMA HAKKININ KULLANIMI:</strong>
                        <br/>
                        <strong>16</strong>
                        .3<strong>.</strong> kişiye veya alıcıya teslim edilen ürünün faturası,
                        (İade edilmek istenen ürünün faturası)
                        kurumsal ise, iade ederken kurumun düzenlemiş olduğu iade faturası ile
                        birlikte gönderilmesi
                        gerekmektedir. Faturası kurumlar adına düzenlenen sipariş iadeleri iade
                        faturası kesilmediği takdirde tamamlanamayacaktır.
                        <br/>
                        <strong>17.</strong>
                        İade formu, iade edilecek ürünlerin kutusu, ambalajı, varsa standart
                        aksesuarları ile birlikte
                        eksiksiz ve hasarsız olarak teslim edilmesi gerekmektedir.
                        <br/>
                        <strong>İADE KOŞULLARI:</strong>
                        <br/>
                        <strong>18.</strong>
                        Satıcı, cayma bildiriminin kendisine ulaşmasından itibaren en geç 10 günlük
                        süre içerisinde toplam bedeli ve alıcıyı borç altına sokan belgeleri
                        alıcıya iade etmek ve 20 günlük süre içerisinde malı iade almakla
                        yükümlüdür.
                        <br/>
                        <strong>19.</strong>
                        Alıcının kusurundan kaynaklanan bir nedenle malın değerinde bir azalma
                        olursa veya iade imkânsızlaşırsa alıcı kusuru oranında satıcının
                        zararlarını tazmin etmekle yükümlüdür. Ancak cayma hakkı süresi içinde
                        malın veya ürünün usulüne uygun kullanılması sebebiyle meydana gelen
                        değişiklik ve bozulmalardan alıcı sorumlu değildir.
                        <br/>
                        <strong>20</strong>
                        .Cayma hakkının kullanılması nedeniyle satıcı tarafından düzenlenen
                        kampanya limit tutarının altına düşülmesi halinde kampanya kapsamında
                        faydalanılan indirim miktarı iptal edilir.
                        <br/>
                        <strong>CAYMA HAKKI KULLANILAMAYACAK ÜRÜNLER:</strong>
                        <br/>
                        <strong>21</strong>
                        .Alıcının isteği veya açıkça kişisel ihtiyaçları doğrultusunda hazırlanan
                        ve geri gönderilmeye müsait olmayan,tek kullanımlık ürünler, çabuk bozulma
                        tehlikesi olan veya son kullanma tarihi geçme ihtimali olan mallar, teslim
                        edildikten sonra başka ürünlerle karışan ve doğası gereği ayrıştırılması
                        mümkün olmayan ürünler, alıcıya teslim edilmesinin ardından alıcı
                        tarafından ambalajı açıldığı takdirde iade edilmesi Yönetmelik gereği
                        mümkün değildir. Ayrıca Cayma hakkı süresi sona ermeden önce, tüketicinin
                        onayı ile ifasına başlanan hizmetlere ilişkin cayma hakkının kullanılması
                        da Yönetmelik gereği mümkün değildir.
                        <br/>
                        <br/>
                        <strong>TEMERRÜT HALİ VE HUKUKİ SONUÇLARI</strong>
                        <br/>
                        <strong>2</strong>
                        <strong>2</strong>
                        .Alıcı, ödeme işlemlerini kredi kartı ile yaptığı durumda temerrüde düştüğü
                        takdirde, kart
                        <br/>
                        sahibi banka ile arasındaki kredi kartı sözleşmesi çerçevesinde faiz
                        ödeyeceğini ve bankaya karşı sorumlu olacağını kabul, beyan ve taahhüt
                        eder. Bu durumda ilgili banka hukuki yollara
                        başvurabilir; doğacak masrafları ve vekâlet ücretini alıcıdan talep
                        edebilir ve her koşulda
                        alıcının borcundan dolayı temerrüde düşmesi halinde, alıcı, borcun
                        gecikmeli ifasından dolayı satıcının uğradığı zarar ve ziyanını ödeyeceğini
                        kabul eder.
                    </p>
                    <p lang="en-US" align="justify">
                        <br/>
                        <strong>ÖDEME VE TESLİMAT</strong>
                    </p>
                    <p lang="en-US" align="justify">
                        <strong>2</strong>
                        <strong>3</strong>
                        .Banka Havalesi veya EFT (Elektronik Fon Transferi) yaparak, İş Bankası
                        hesaplarımızdan(TL) herhangi birine yapabilirsiniz.
                        <br/>
                        <strong>2</strong>
                        <strong>4</strong>
                        .Sitemiz üzerinden kredi kartlarınız ile, her türlü kredi kartınıza online
                        tek ödeme ya da online taksit imkânlarından yararlanabilirsiniz. Online
                        ödemelerinizde siparişiniz sonunda kredi kartınızdan tutar çekim işlemi
                        gerçekleşecektir.
                    </p>

                </div>






            </div>





        </div>



    </section>



@endsection




