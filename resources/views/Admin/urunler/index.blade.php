@extends('Admin.layouts.main')
@section('content1')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Ürünler
            </h1>

        </section>

        <!-- Main content -->
        <section class="content">

            <!-- /.row -->
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <!-- /.box-header -->
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                                <tr>
                                    <th>ID</th>
                                    <th>Ürün Adı</th>
                                    <th>Miktar</th>
                                    <th>Birim</th>
                                    <th>Fiyat (₺)</th>
                                    <th>Satışta</th>
                                    <th>İşlem</th>
                                </tr>
                                @foreach($urunler as $key=>$value)
                                    <tr>
                                        <td>{{$value->id}}</td>
                                        <td>{{$value->urun_ad}}</td>
                                        <td>{{$value->miktar}}</td>
                                        <td>{{$value->birim}}</td>
                                        <td>{{$value->fiyat}}</td>
                                        <td><span
                                                class="label @if($value->satistami=='Evet') label-success @elseif ($value->satistami=='Hayır') label-danger @endif">{{$value->satistami}}</span>
                                        </td>
                                        <td><a href="{{route('admin.urunler.edit', ['locale' => app()->getLocale(), 'id' => $value->id])}}"><span
                                                    class="label label-warning">Düzenle</span></a></td>

                                    </tr>
                                @endforeach

                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
            </div>
        </section>

        <!-- /.content -->
    </div>
@endsection
