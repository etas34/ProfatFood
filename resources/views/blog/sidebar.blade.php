
<!-- Sidebar Widgets Column -->
<div class="col-md-4 mt-5">

    <!-- Search Widget -->


    <!-- Categories Widget -->
    <div class="card my-4">
        <h5 class="card-header">Son Yazılar</h5>
        <div class="card-body">
            <div class="border-bottom mb-3">
                <div class="row">
                    <div class="col-md-6">
                        <img style="width: 100%;  height: auto;"
                             src="{{asset('public/images/canli-yem-olarak-bsf.jpg')}}">
                    </div>
                    <div class="col-md-6">
                        <a href="{{route('blog_yazi1', app()->getLocale())}}" style="color:inherit;">
                            <h5 class="text-justify">Canlı Yem Kara Asker Sineği Larvası</h5>
                        </a>

                    </div>
                </div>
            </div>
            <div class="border-bottom mb-3">
                <div class="row">
                    <div class="col-md-6">
                        <img style="width: 100%;  height: auto;"
                             src="{{asset('public/images/alternatif-protein-kaynagi.jpg')}}">
                    </div>
                    <div class="col-md-6">
                        <a href="{{route('blog_yazi2', app()->getLocale())}}" style="color:inherit;">
                            <h5 class="text-justify">Alternatif Protein Kaynağı Olarak BSF</h5>
                        </a>

                    </div>
                </div>
            </div>
            <div class="border-bottom mb-3">
                <div class="row">
                    <div class="col-md-6">
                        <img style="width: 100%;  height: auto;"
                             src="{{asset('public/images/larva-askerler.jpg')}}">
                    </div>
                    <div class="col-md-6">
                        <a href="{{route('blog_yazi3', app()->getLocale())}}" style="color:inherit;">
                            <h5 class="text-justify">Geri Dönüşüm Projesinde Çalışan Minik Askerler (BSF)</h5>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Side Widget -->
    <div class="card my-4">
        <h5 class="card-header">Online Satış</h5>
        <div class="card-body">

            <div class="border-bottom mb-3">
                <div class="row">
                    <div class="col-md-6">
                        <img style="width: 100%;  height: auto;"
                             src="{{asset('public/images/bsf-canli-larva.gif')}}">
                    </div>
                    <div class="col-md-6">
                        <h5 class="text-center">Canlı Larva</h5>
                        <a class="btn btn-outline-success btn-block" href="{{route('bsf-canli', app()->getLocale())}}">SATIN AL</a>
                    </div>
                </div>
            </div>
            <div class="border-bottom mb-3">
                <div class="row">
                    <div class="col-md-6">
                        <img style="width: 100%;  height: auto;"
                             src="{{asset('public/images/bsf-kuru-larva.jpg')}}">
                    </div>
                    <div class="col-md-6">
                        <h5 class="text-center">Kuru Larva</h5>
                        <a class="btn btn-outline-success btn-block" href="{{route('bsf-kuru', app()->getLocale())}}">SATIN AL</a>
                    </div>
                </div>
            </div>
            <div class="border-bottom mb-3">
                <div class="row">
                    <div class="col-md-6">
                        <img style="width: 100%;  height: auto;"
                             src="{{asset('public/images/bsf-larva-unu.jpg')}}">
                    </div>
                    <div class="col-md-6">
                        <h5 class="text-center">Larva Unu</h5>
                        <a class="btn btn-outline-success btn-block" href="{{route('bsf-ogutulmus', app()->getLocale())}}">SATIN AL</a>

                    </div>
                </div>
            </div>

        </div>
    </div>


</div>
