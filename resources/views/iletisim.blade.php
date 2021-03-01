@extends('layouts.main')
@section('content')


<section id="hakkimizda" class="py-5 mt-5">

<div class="container">
<div class="row">
<div class="col-md-12 mt-5">

    @if(isset($send))

        @if($send=true)

            <h2 class="mt-3 text-center"> Mesajınız İletildi</h2>
            <h2 class="mt-3 text-center"> Size En Kısa Süre İçerisinde Dönüş Yapacağız.</h2>
        @else

            <h2 class="mt-3 text-center"> Mesajınız İletilemedi</h2>
            <h2 class="mt-3 text-center"> Lütfen daha sonra tekrar deneyiniz..</h2>
        @endif

        <br><br><br><br><br><br><br><br><br><br>
    @endif


</div>






</div>





</div>



</section>




@endsection




