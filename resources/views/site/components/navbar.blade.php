<header class="page-header" id="header">
    <!-- RD Navbar-->
    <div class="rd-navbar-wrap">
        <nav class="rd-navbar rd-navbar-background" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fullwidth" data-lg-device-layout="rd-navbar-fixed"
            data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="150px" data-xl-stick-up-offset="150px" data-xxl-stick-up-offset="150px"
            data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true" data-stick-up-clone="true">
            <div class="rd-navbar-inner">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel">
                    <!-- RD Navbar Toggle-->
                    <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar"><span></span></button>
                    <!-- RD Navbar Brand-->
                    <div class="rd-navbar-brand">
                        <a href="index.html"><img class="logo-inverse" src="images/logo-inverse-36x74.png" width="36" height="74" alt=""><img class="logo-default" src="images/logo-default-36x45.png" width="36" height="74" alt=""></a>
                    </div>
                </div>
                <div class="rd-navbar-nav-wrap">
                    <ul class="rd-navbar-nav">
                    <li class="rd-nav-item"><a class="rd-nav-link" href="{{route('view.site.home')}}">Home</a>
                        </li>
                        <li class="rd-nav-item {{request()->is('galeria')?'active':''}}"><a class="rd-nav-link" href="{{route('view.site.gallery')}}">Galeria</a>
                        </li>
                        <li class="rd-nav-item {{request()->is('contato')?'active':''}}"><a class="rd-nav-link" href="{{route('view.site.contacts')}}">Contato</a>
                        </li>
                        <li class="rd-nav-item {{request()->is('ecommerce')?'active':''}}"><a class="rd-nav-link" href="{{route('view.ecommerce')}}">Ecommerce</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>