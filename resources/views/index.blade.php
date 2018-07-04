<!DOCTYPE HTML>
<html lang="ru-RU">
    <head>
        <title>Magic Shapes: резка пенопласта, фигурная и декоративная резка</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="description" content="Magic Shapes: резка пенопласта, фигурная и декоративная резка" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <link rel="shortcut icon" href="/images/favicon.ico" />    
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700' rel='stylesheet' type='text/css'>		
        <link rel="stylesheet" type="text/css"  href='/assets/css/clear.css' />
        <link rel="stylesheet" type="text/css"  href='/assets/css/common.css' />
        <link rel="stylesheet" type="text/css"  href='/assets/css/font-awesome.min.css' />
        <link rel="stylesheet" type="text/css"  href='/assets/css/carouFredSel.css' />
        <link rel="stylesheet" type="text/css"  href='/assets/css/prettyPhoto.css' />        
        <link rel="stylesheet" type="text/css"  href='/assets/css/sm-clean.css' />        
        <link rel="stylesheet" type="text/css"  href='/assets/css/style.css' />
        <link rel="stylesheet" type="text/css"  href='/css/front.css' />

        <!--[if lt IE 9]>
                <script src="js/html5shiv.js"></script>                
                <script src="js/respond.min.js"></script>                
        <![endif]-->

    </head>
    <body class="page">

        @include('partials.loader') 

        @include('partials.search')


        <div class="body-wrapper">           
            
        @include('partials.header')

          <div id="content" class="site-content">
              <article>
                  @yield('content')
              </article>
          </div>

        @include('partials.footer')

        </div>



        <!--Load JavaScript-->
        <script src="/assets/js/jquery.js"></script>			                                       
        <script src='/assets/js/jquery.fitvids.js'></script>
        <script src='/assets/js/jquery.smartmenus.min.js'></script>        
        <script src='/assets/js/imagesloaded.pkgd.js'></script>        
        <script src='/assets/js/isotope.pkgd.js'></script>        
        <script src='/assets/js/jquery.carouFredSel-6.0.0-packed.js'></script>
        <script src='/assets/js/jquery.mousewheel.min.js'></script>
        <script src='/assets/js/jquery.touchSwipe.min.js'></script>
        <script src='/assets/js/jquery.easing.1.3.js'></script>
        <script src='/assets/js/jquery.prettyPhoto.js'></script>        
        <script src='/assets/js/jquery.ba-throttle-debounce.min.js'></script>                
        <script src='/assets/js/jquery.nicescroll.min.js'></script>
        <script src='/assets/js/main.js'></script>
        <script src='/js/front.js'></script>
    </body>
</html>