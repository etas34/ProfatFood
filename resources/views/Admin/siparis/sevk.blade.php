@extends('Admin.layouts.main')
@section('content1')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Sipariş Sevk Et
            </h1>
        </section>

        <section class="content">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" method="POST" action="{{route('admin.siparis.update', ['locale' => app()->getLocale(), 'id' => $siparisler->id])}}">
                            {{csrf_field()}}

                            <div class="box-body">

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Ürün Adı</label>
                                    <input type="email" class="form-control" name="urun_ad" disabled value="{{$siparisler->urun_ad}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Miktar</label>
                                    <input type="text" class="form-control" name="miktar"  disabled value="{{$siparisler->miktar}}">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Müşteri Adı</label>
                                    <input type="text" class="form-control"   disabled value="{{$siparisler->ad_soyad}}">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Kargo Adı</label>
                                    <input type="text" class="form-control" name="kargo_ad">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Kargo Numarası</label>
                                    <input type="text" class="form-control" name="kargo_no">
                                </div>
                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Tamam</button>
                            </div>
                        </form>
                    </div>

                </div>
                <!--/.col (left) -->
                <!-- right column -->

                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>


@endsection
