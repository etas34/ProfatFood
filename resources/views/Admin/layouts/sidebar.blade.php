<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MENÜ</li>
            <li><a href="{{route('admin.urunler', app()->getLocale())}}"><i class="fa fa-cubes "></i> <span>Ürünler</span></a></li>
            <li>
                <a href="{{route('admin.siparis.yeni', app()->getLocale())}}">
                    <i class="fa fa-paper-plane"></i> <span>Yeni Siparişler</span>
                    <span class="pull-right-container">
                @if($yenisiparisler->count()>0)
              <small class="label pull-right bg-green">{{$yenisiparisler->count()}}</small>
                    @endif

            </span>
                </a>
            </li>

            <li><a href="{{route('admin.siparis.eski', app()->getLocale())}}"><i class="fa fa-share"></i> <span>Tamamlanan Siparişler</span></a></li>
        </ul>

    </section>

    <!-- /.sidebar -->
</aside>
