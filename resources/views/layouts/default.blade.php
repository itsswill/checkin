<!DOCTYPE html>
<html lang="en" class="">
<head>
  <meta charset="utf-8" />
  <title>Checkin System</title>
  <meta name="description" content="app, web app, responsive, responsive layout, admin, admin panel, admin dashboard, flat, flat ui, ui kit, AngularJS, ui route, charts, widgets, components" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <link rel="stylesheet" href="{{ asset('libs/assets/animate.css/animate.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{ asset('libs/assets/font-awesome/css/font-awesome.min.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{ asset('/libs/assets/simple-line-icons/css/simple-line-icons.css')}}" type="text/css" />
  <link rel="stylesheet" href="{{ asset('/libs/jquery/bootstrap/dist/css/bootstrap.css')}}" type="text/css" />

  <link rel="stylesheet" href="{{ asset('css/font.css')  }}" type="text/css" />
  <link rel="stylesheet" href="{{ asset('css/app.css')  }}" type="text/css" />

  <script src="{{ asset('/libs/jquery/jquery/dist/jquery.js')}}"></script>
  <script src="{{ asset('/libs/jquery/bootstrap/dist/js/bootstrap.js')}}"></script>
  <script src="{{ asset('js/ui-load.js')}}"></script>
  <script src="{{ asset('js/ui-jp.config.js')}}"></script>
  <script src="{{ asset('js/ui-jp.js')}}"></script>
  <script src="{{ asset('js/ui-nav.js')}}"></script>
  <script src="{{ asset('js/ui-toggle.js')}}"></script>
  <script src="{{ asset('js/ui-client.js')}}"></script>

</head>
<body>
<div class="app app-header-fixed ">
  

    @include('_partials.header')


    <!-- aside -->
  <aside id="aside" class="app-aside hidden-xs bg-dark">
      <div class="aside-wrap">
        <div class="navi-wrap">

          <!-- nav -->
          @include('_partials.nav')
          <!-- nav -->


        </div>
      </div>
  </aside>
  <!-- / aside -->


  <!-- content -->
  <div id="content" class="app-content" role="main">
    <div class="app-content-body ">
      

<div class="hbox hbox-auto-xs hbox-auto-sm" ng-init="
    app.settings.asideFolded = false; 
    app.settings.asideDock = false;
  ">
  <!-- main -->
  <div class="col">
    <!--Begin the primary content-->
    @yield('content')
    <!--End The Primary Content -->    
  </div>
  <!-- / main -->
</div>



  </div>
  </div>
  <!-- /content -->
  
  <!-- footer -->
  <footer id="footer" class="app-footer" role="footer">
    <div class="wrapper b-t bg-light">
      <span class="pull-right">1.0.0 <a href ui-scroll="app" class="m-l-sm text-muted"><i class="fa fa-long-arrow-up"></i></a></span>
      &copy; 2016 Copyright.
    </div>
  </footer>
  <!-- / footer -->



</div>


</body>
</html>
