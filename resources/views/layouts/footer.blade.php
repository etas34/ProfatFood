<!-- Footer -->
<footer id="main-footer" class="page-footer font-small teal pt-4">

    <!-- Footer Text -->
    <div class="container text-center text-md-left">

        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-md-5 mt-md-0 mt-3">

                <!-- Content -->
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">SERTİFİKALARIMIZ</h5>

{{--                <p class="mr-5">Profat Food, sitemizden güvenli bir şekilde (3D Secure ile) alışveriş yapmanızı temin eder.  </p>--}}
               <a href="#" class="pop"><img id="imageresource" src="{{asset('public/images/ISO9001.jpg')}}" class="img-fluid" alt="”Hakkımızda”" style="height: 150px; width: auto; margin-right: 10px;"></a>
                <a href="#" class="pop"><img src="{{asset('public/images/ISO10002.jpg')}}" class="img-fluid" alt="”Hakkımızda”" style="height: 150px; width: auto; margin-right: 10px;"></a>
                <a href="#" class="pop"><img src="{{asset('public/images/OHSAS18001.jpg')}}" class="img-fluid" alt="”Hakkımızda”" style="height: 150px; width: auto; margin-right: 10px;"></a>


            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none pb-3">

            <!-- Grid column -->
            <div class="col-md-5 mb-md-0 mb-3">

                <!-- Content -->
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Müşteri Hizmetleri</h5>

                <ul class="list-unstyled">
                    <li>
                        <a href="{{route('sozlesme', app()->getLocale())}}">Mesafeli Satış Sözleşmesi</a>
                    </li>
                    <li>
                        <a href="{{route('iade', app()->getLocale())}}">Teslimat ve İade</a>
                    </li>
                    <li>
                        <a href="{{route('gizlilik', app()->getLocale())}}">Gizlilik Politikası</a>
                    </li>
                </ul>

            </div>

            <div class="col-md-2 mb-md-0 mb-3">

                <img src="{{asset('public/images/visalogos.png')}}" class="img-fluid" alt=”Visa Logo”>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </div>
    <!-- Footer Text -->

    <!-- Copyright -->
    <p class="lead text-center">Copyright &copy; Profat Food 2019. Tüm hakları saklıdır. Designed by <a href="http://afyonyazilimevi.com/" style="color: #f0542c;">Afyon Yazılım Evi</a></p>
    <!-- Copyright -->

</footer>





