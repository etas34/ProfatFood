@extends('Admin.layouts.main')
@section('content1')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Siparişler
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">

                    <div class="box">
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Sipariş No</th>
                                    <th>Ürün Adı</th>
                                    <th>Miktar</th>
                                    <th>Fiyat</th>
                                    <th>Ad Soyad</th>
                                    <th>E-Mail</th>
                                    <th>Telefon</th>
                                    <th>Sevk Adresi</th>
                                    <th>Sipariş Tarihi</th>
                                    <th>Onay</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($siparisler as $key=>$value)
                                <tr>
                                    <td>{{$value->id}}</td>
                                    <td>{{$value->urun_ad}}</td>
                                    <td>{{$value->miktar}}</td>
                                    <td>{{$value->fiyat}}</td>
                                    <td>{{$value->ad_soyad}}</td>
                                    <td>{{$value->mail}}</td>
                                    <td>{{$value->tel}}</td>
                                    <td>{{$value->sevk_adres}}</td>
                                    <td>{{$value->created_at}}</td>
                                    <td><a href="{{route('admin.siparis.sevk', ['locale' => app()->getLocale(), 'id' => $value->id])}}" ><span class="label label-info">Siparişi Tamamla</span></a></td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>


@endsection
