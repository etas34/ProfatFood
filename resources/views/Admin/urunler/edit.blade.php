@extends('Admin.layouts.main')
@section('content1')


    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Ürün Düzenleme
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
                        <form role="form" method="POST" action="{{route('admin.urunler.update', ['locale' => app()->getLocale(), 'id' => $urunler->id])}}">
                            {{csrf_field()}}

                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Ürün Adı</label>
                                    <input type="text" class="form-control" name="urun_ad" disabled value="{{$urunler->urun_ad}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Miktar</label>
                                    <input type="number" class="form-control" name="miktar"  required value="{{$urunler->miktar}}">
                                </div>


                                <div class="form-group">
                                    <label for="exampleInputPassword1">Birim</label>
                                    <input type="text" class="form-control" disabled  value="{{$urunler->birim}}">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Fiyat (₺)</label>
                                    <input type="number" class="form-control" name="fiyat" required  value="{{$urunler->fiyat}}">
                                </div>

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" @if($urunler->satistami=='Evet') checked @endif name="satistami" > Satışta
                                    </label>
                                </div>
                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Düzenle</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.box -->

                    <!-- Form Element sizes -->

                    <!-- /.box -->


                    <!-- /.box -->

                    <!-- Input addon -->

                    <!-- /.box -->

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
