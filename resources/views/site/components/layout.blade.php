<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
    <title>Contacts</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="https://livedemo00.template-help.com/wt_58440/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Unica+One%7COpen+Sans:400,600,700,300%7CCabin:400,500,700,600">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="site/assets/css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.2.0/css/all.css">
    <link rel="stylesheet" href="https://static.fontawesome.com/css/fontawesome-app.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.0/dist/aos.css">
    <style>
        .ie-panel {
            display: none;
            background: #212121;
            padding: 10px 0;
            box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, .3);
            clear: both;
            text-align: center;
            position: relative;
            z-index: 1;
        }
        
        html.ie-10 .ie-panel,
        html.lt-ie-10 .ie-panel {
            display: block;
        }
    </style>
    
</head>

<body>
    <div class="ie-panel">
        <a href="https://windows.microsoft.com/en-US/internet-explorer/"><img src="https://livedemo00.template-help.com/wt_58440/images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a>
    </div>
    <div class="preloader">
        <div class="preloader-body">
            <div class="cssload-container">
                <div class="cssload-speeding-wheel"></div>
            </div>
            <p>Carregando...</p>
        </div>
    </div>
    <div class="page">
        @include('site.components.navbar')
        <!--Google Map-->

        @yield('content')

        <footer class="page-footer">
            <div class="container">
                <div class="row row-30">
                    <div class="col-md-5">
                        <div class="contact-info text-center text-md-left">
                            <address>28 Jackson Blvd Ste 1020, Chicago <br class="d-none d-xl-block">IL 60604-2340
                </address>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <ul class="inline-list">
                            <li>
                                <a class="fl-glypho-facebook2" href="contacts.html#"></a>
                            </li>
                            <li>
                                <a class="fl-glypho-twitter" href="contacts.html#"></a>
                            </li>
                            <li>
                                <a class="fl-glypho-google-plus" href="contacts.html#"></a>
                            </li>
                            <li>
                                <a class="fl-glypho-instagram19" href="contacts.html#"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4 text-center text-md-right">
                        <p class="rights copyright"><span>&copy;&nbsp;</span><span class="copyright-year"></span><span>&nbsp;</span>
                            <a href="{{route('view.admin.dashboard')}}">admin</a>
                            <br/></p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="../cdn-cgi/apps/head/3ts2ksMwXvKRuG480KNifJ2_JNM.js"></script>
    <script src="site/assets/js/core.min.js"></script>
    <script src="site/assets/js/script.js"></script>
    <script src="https://unpkg.com/aos@2.3.0/dist/aos.js"></script>
    @yield('script')
</body>
<!-- Google Tag Manager --><noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P9FT69"height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src = '//www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-P9FT69');
</script>

<!-- End Google Tag Manager -->

</html>