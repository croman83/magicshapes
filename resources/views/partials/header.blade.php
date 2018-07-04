<div class="content-1330 header-holder center-relative">
    <div class="header-logo left">

        <h1 class="site-title">
            <a href="{{route('main')}}">
                <img src="/images/logo-color-big.png" alt="Sun-">
            </a>               
        </h1>

    </div>

    

    <div class="header-menu right">
        <nav id="header-main-menu" class="left">
            @include('partials.nav')
        </nav>
        {{-- <div class="toggle-holder relative right">
            <div id="toggle">
                <i class="fa fa-search"></i>                      
            </div>
        </div> --}}
        <ul class="lang relative right">
            <li>
            <a rel="alternate" class="{{LaravelLocalization::getCurrentLocale() === 'ru' ? 'active' : ''}}" hreflang="ru" href="{{ LaravelLocalization::getLocalizedURL('ru', null, [], true) }}">
                    RU
                </a>
            </li>
            <li>
                <a rel="alternate" class="{{LaravelLocalization::getCurrentLocale() === 'ro' ? 'active' : ''}}" hreflang="ro" href="{{ LaravelLocalization::getLocalizedURL('ro', null, [], true) }}">
                    RO
                </a>
            </li>
        </ul>
        <div class="clear"></div>							
    </div>
    <div class="clear"></div>
</div>