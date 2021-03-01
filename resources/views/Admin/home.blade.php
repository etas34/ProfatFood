@extends('Admin.layouts.main')
@section('content1')
    <div class="content-wrapper">

        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-md-6">
                    <!-- small box -->
                    <a class="small-box bg-green-gradient" href="{{route('admin.siparis.yeni', app()->getLocale())}}">
                        <div class="inner text-center">

                            <h3>{{$yenisiparisler->count()}}</h3>

                            <p>Yeni Siparişler</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-paper-airplane"></i>
                        </div>
                    </a>
                </div>
                <!-- ./col -->
                <div class="col-md-6">
                    <!-- small box -->
                    <a class="small-box bg-aqua-gradient" href="{{route('admin.siparis.eski', app()->getLocale())}}">
                        <div class="inner text-center">
                            <h3>{{$eskisiparisler->count()}}</h3>

                            <p>Tamamlanan Siparişler</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                    </a>
                </div>

            </div>
                <!-- ./col -->

                <!-- ./col -->
            <!-- /.row -->
            <!-- Main row -->

            <!-- /.row (main row) -->

        </section>
    </div>

@endsection
