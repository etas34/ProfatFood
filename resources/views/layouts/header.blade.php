<nav class="navbar navbar-expand-md navbar-dark  fixed-top " style="background-color:#20bf44">
    <div class="container">
        <button class="navbar-toggler" data-toggle="collapse" data-target="#nvbCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a href="{{route('anasayfa', app()->getLocale())}}"><img class="navbar-brand" src="{{asset('public/images/profatlogo.png')}}" alt=”Profat-Food-Logo”></a>
        <div class="collapse navbar-collapse" id="nvbCollapse">
            <ul class="navbar-nav ml-auto smooth-scroll list-unstyled">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('anasayfa', app()->getLocale())}}/#headerSection"> @lang('msg.anasayfa')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('anasayfa', app()->getLocale())}}/#urunlerimiz">@lang('msg.urunlerimiz')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('anasayfa', app()->getLocale())}}/#bsfnedir">@lang('msg.bsf-nedir')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('anasayfa', app()->getLocale())}}/#hakkimizda">@lang('msg.hakkimizda')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('anasayfa', app()->getLocale())}}/#medya">@lang('msg.medya')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('anasayfa', app()->getLocale())}}/#blog">@lang('msg.blog')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('anasayfa', app()->getLocale())}}/#iletisim">@lang('msg.iletisim')</a>
                </li>

                <li class="nav-item dropdown language-selector" style="margin-top: -2px;">
                        @if (app()->getLocale() == 'tr')

                        <a href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), 'en') }}" class="nav-link">

                            <img src="{{asset('public/images/flag-uk.png')}}" />
                            English

                        </a>
                            @elseif(app()->getLocale() == 'en')

                        <a href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), 'tr') }}" class="nav-link">

                            <img src="{{asset('public/images/flag-tr.png')}}" />
                            Türkçe
                        </a>

                            @endif

                    <ul class="dropdown-menu pull-right">
                        <li class="">
                            @if (app()->getLocale() == 'en')
                                <a href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), 'en') }}">
                                    <img src="{{asset('public/images/flag-uk.png')}}" />
                                    <span>English</span>
                                </a>
                            @elseif(app()->getLocale() == 'tr')
                                <a href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), 'tr') }}">
                                    <img src="{{asset('public/images/flag-tr.png')}}" />
                                    <span>Türkçe</span>
                                </a>
                            @endif

                        </li>
                    </ul>
                </li>



            </ul>

        </div>
    </div>

</nav>
