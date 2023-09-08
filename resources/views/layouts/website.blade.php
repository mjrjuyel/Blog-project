<!DOCTYPE html>
  <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <title>Blog </title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <meta content="Coderthemes" name="JUYEL" />

      <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700|Playfair+Display:400,700,900" rel="stylesheet">
      <link rel="stylesheet" href="fonts/icomoon/style.css">
      <link rel="stylesheet" href="{{asset('contents/website')}}/assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="{{asset('contents/admin')}}/assets/css/all.min.css"/>
      <link rel="stylesheet" href="{{asset('contents/website')}}/assets/css/magnific-popup.css">
      <link rel="stylesheet" href="{{asset('contents/website')}}/assets/css/jquery-ui.css">
      <link rel="stylesheet" href="{{asset('contents/website')}}/assets/css/owl.carousel.min.css">
      <link rel="stylesheet" href="{{asset('contents/website')}}/assets/css/owl.theme.default.min.css">
      <link rel="stylesheet" href="{{asset('contents/website')}}/assets/css/bootstrap-datepicker.css">
      <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
      <link rel="stylesheet" href="{{asset('contents/website')}}/assets/css/aos.css">
      <link rel="stylesheet" href="{{asset('contents/website')}}/assets/css/style.css">

      <script nonce="1c329c65-6194-45bc-8566-bf15e92508d7">(function(w,d){!function(bv,bw,bx,by){bv[bx]=bv[bx]||{};bv[bx].executed=[];bv.zaraz={deferred:[],listeners:[]};bv.zaraz.q=[];bv.zaraz._f=function(bz){return function(){var bA=Array.prototype.slice.call(arguments);bv.zaraz.q.push({m:bz,a:bA})}};for(const bB of["track","set","debug"])bv.zaraz[bB]=bv.zaraz._f(bB);bv.zaraz.init=()=>{var bC=bw.getElementsByTagName(by)[0],bD=bw.createElement(by),bE=bw.getElementsByTagName("title")[0];bE&&(bv[bx].t=bw.getElementsByTagName("title")[0].text);bv[bx].x=Math.random();bv[bx].w=bv.screen.width;bv[bx].h=bv.screen.height;bv[bx].j=bv.innerHeight;bv[bx].e=bv.innerWidth;bv[bx].l=bv.location.href;bv[bx].r=bw.referrer;bv[bx].k=bv.screen.colorDepth;bv[bx].n=bw.characterSet;bv[bx].o=(new Date).getTimezoneOffset();if(bv.dataLayer)for(const bI of Object.entries(Object.entries(dataLayer).reduce(((bJ,bK)=>({...bJ[1],...bK[1]})))))zaraz.set(bI[0],bI[1],{scope:"page"});bv[bx].q=[];for(;bv.zaraz.q.length;){const bL=bv.zaraz.q.shift();bv[bx].q.push(bL)}bD.defer=!0;for(const bM of[localStorage,sessionStorage])Object.keys(bM||{}).filter((bO=>bO.startsWith("_zaraz_"))).forEach((bN=>{try{bv[bx]["z_"+bN.slice(7)]=JSON.parse(bM.getItem(bN))}catch{bv[bx]["z_"+bN.slice(7)]=bM.getItem(bN)}}));bD.referrerPolicy="origin";bD.src="../../cdn-cgi/zaraz/sd0d9.js?z="+btoa(encodeURIComponent(JSON.stringify(bv[bx])));bC.parentNode.insertBefore(bD,bC)};["complete","interactive"].includes(bw.readyState)?zaraz.init():bv.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script>
  </head>
<body>
  <div class="site-wrap">
    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    <header class="site-navbar" role="banner">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-12 search-form-wrap js-search-form">
            <form method="get" action="#">
              <input type="text" id="s" class="form-control" placeholder="Search...">
              <button class="search-btn" type="submit"><span class="icon-search"></span></button>
            </form>
          </div>
          <div class="col-4 site-logo">
            <a href="{{ route('/')}}" class="text-black h2 mb-0">{{$basics->basic_logo_title}}</a>
          </div>
          <div class="col-8 text-right">
            <nav class="site-navigation" role="navigation">
              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block mb-0">
                <li><a href="{{ route('/')}}">Home</a></li>
                @foreach($categories as $cat)
                <li><a href="{{url('/post/category/'.$cat->cat_slug)}}">{{$cat->cat_title}}</a></li>
                @endforeach
                <li class="d-none d-lg-inline-block"><a href="#" class="js-search-toggle"><span
                      class="icon-search"></span></a></li>
              </ul>
            </nav>
            <a href="#" class="site-menu-toggle js-menu-toggle text-black d-inline-block d-lg-none"><span
                class="icon-menu h3"></span></a>
          </div>
        </div>
      </div>
    </header>
    @yield('content')
    <div class="site-footer">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-4">
            <h3 class="footer-heading mb-4">About Us</h3>
            <p>{{$basics->basic_about}}</p>
          </div>
          <div class="col-md-3 ml-auto">

            <ul class="list-unstyled float-left mr-5">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Advertise</a></li>
              <li><a href="#">Careers</a></li>
              <li><a href="#Subscribe">Subscribes</a></li>
            </ul>
            <ul class="list-unstyled float-left">
             @foreach($categories as $cat)
              <li><a href="{{url('/post/category/'.$cat->cat_slug)}}">{{$cat->cat_title}}</a></li>
              @endforeach
            </ul>
          </div>
          <div class="col-md-4">
            <div>
              <h3 class="footer-heading mb-4">Connect With Us</h3>
              <p>
                  @if($socials->sm_facebok != null)
                  <a href="{{$socials->sm_facebok}}" class="p-2"><i class="fa-brands fa-facebook-f"></i></a>
                  @endif
                  @if($socials->sm_insta != null)
                  <a href="{{$socials->sm_insta}}" class="p-2"><i class="fa-brands fa-instagram"></i></a>
                  @endif
                  <a href="#" class="p-2"><i class="fa-brands fa-youtube"></i></a>
                  
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 text-center">
            <p>

              Copyright &copy;
              <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made
              with <i class="icon-heart text-danger" aria-hidden="true"></i> by <h3>Juyel</h3>

            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
<script src="{{asset('contents/admin')}}/assets/js/jquery-3.6.4.min.js"></script>
<script src="{{asset('contents/website')}}/assets/js/jquery-migrate-3.0.1.min.js"></script>
<script src="{{asset('contents/website')}}/assets/js/jquery-ui.js"></script>
<script src="{{asset('contents/website')}}/assets/js/popper.min.js"></script>
<script src="{{asset('contents/website')}}/assets/js/bootstrap.min.js"></script>
<script src="{{asset('contents/website')}}/assets/js/owl.carousel.min.js"></script>
<script src="{{asset('contents/website')}}/assets/js/jquery.stellar.min.js"></script>
<script src="{{asset('contents/website')}}/assets/js/jquery.countdown.min.js"></script>
<script src="{{asset('contents/website')}}/assets/js/jquery.magnific-popup.min.js"></script>
<script src="{{asset('contents/website')}}/assets/js/bootstrap-datepicker.min.js"></script>
<script src="{{asset('contents/website')}}/assets/js/aos.js"></script>
<script src="{{asset('contents/website')}}/assets/js/main.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.{{asset('contents/website')}}/assets/js/vb26e4fa9e5134444860be286fd8771851679335129114" integrity="sha512-M3hN/6cva/SjwrOtyXeUa5IuCT0sedyfT+jK/OV+s+D0RnzrTfwjwJHhd+wYfMm9HJSrZ1IKksOdddLuN6KOzw==" data-cf-beacon='{"rayId":"7b1e925918d23366","version":"2023.3.0","b":1,"token":"cd0b4b3a733644fc843ef0b185f98241","si":100}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/miniblog/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Apr 2023 04:29:50 GMT -->
</html>
