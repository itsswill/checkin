<!DOCTYPE html>
<html lang="en" class="">
<head>
  <meta charset="utf-8" />
  <title>Daycare| Check In</title>
  <meta name="description" content="app, web app, responsive, responsive layout, admin, admin panel, admin dashboard, flat, flat ui, ui kit, AngularJS, ui route, charts, widgets, components" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <link rel="stylesheet" href="{{ URL::asset('libs/assets/animate.css/animate.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{ URL::asset('libs/assets/font-awesome/css/font-awesome.min.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{ URL::asset('libs/assets/simple-line-icons/css/simple-line-icons.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{ URL::asset('libs/jquery/bootstrap/dist/css/bootstrap.css') }}" type="text/css" />

  <link rel="stylesheet" href="{{ URL::asset('css/font.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" type="text/css" />

</head>
<body>
<div class="app app-header-fixed ">
  

    <!-- header -->
  <header id="header" class="app-header navbar" role="menu">
      <!-- navbar header -->
      <div class="navbar-header bg-dark">
        <button class="pull-right visible-xs dk" ui-toggle-class="show" target=".navbar-collapse">
          <i class="glyphicon glyphicon-cog"></i>
        </button>
        <button class="pull-right visible-xs" ui-toggle-class="off-screen" target=".app-aside" ui-scroll="app">
          <i class="glyphicon glyphicon-align-justify"></i>
        </button>
        <!-- brand -->
        <a href="#/" class="navbar-brand text-lt">
          <i class="fa fa-btc"></i>
          <img src="img/logo.png" alt="." class="hide">
          <span class="hidden-folded m-l-xs">Angulr</span>
        </a>
        <!-- / brand -->
      </div>
      <!-- / navbar header -->

      <!-- navbar collapse -->
      <div class="collapse pos-rlt navbar-collapse box-shadow bg-white-only">
        <!-- buttons -->
        <div class="nav navbar-nav hidden-xs">
          <a href="#" class="btn no-shadow navbar-btn" ui-toggle-class="app-aside-folded" target=".app">
            <i class="fa fa-dedent fa-fw text"></i>
            <i class="fa fa-indent fa-fw text-active"></i>
          </a>
        </div>
        <!-- / buttons -->

        <!-- link and dropdown -->

          <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">
              <i class="fa fa-fw fa-plus visible-xs-inline-block"></i>
              <span translate="header.navbar.new.NEW">New</span> <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#" translate="header.navbar.new.PROJECT">Projects</a></li>
              <li>
                <a href>
                  <span class="badge bg-info pull-right">5</span>
                  <span translate="header.navbar.new.TASK">Task</span>
                </a>
              </li>
              <li><a href translate="header.navbar.new.USER">User</a></li>
              <li class="divider"></li>
              <li>
                <a href>
                  <span class="badge bg-danger pull-right">4</span>
                  <span translate="header.navbar.new.EMAIL">Email</span>
                </a>
              </li>
            </ul>
          </li>
        </ul>
        <!-- / link and dropdown -->

        <!-- search form -->  
        <!-- / search form -->

        <!-- nabar right -->
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">
              <i class="icon-bell fa-fw"></i>
              <span class="visible-xs-inline">Notifications</span>
              <span class="badge badge-sm up bg-danger pull-right-xs">2</span>
            </a>
            <!-- dropdown -->
            <div class="dropdown-menu w-xl animated fadeInUp">
              <div class="panel bg-white">
                <div class="panel-heading b-light bg-light">
                  <strong>You have <span>2</span> notifications</strong>
                </div>
                <div class="list-group">
                  <a href class="list-group-item">
                    <span class="pull-left m-r thumb-sm">
                      <img src="img/a0.jpg" alt="..." class="img-circle">
                    </span>
                    <span class="clear block m-b-none">
                      Use awesome animate.css<br>
                      <small class="text-muted">10 minutes ago</small>
                    </span>
                  </a>
                  <a href class="list-group-item">
                    <span class="clear block m-b-none">
                      1.0 initial released<br>
                      <small class="text-muted">1 hour ago</small>
                    </span>
                  </a>
                </div>
                <div class="panel-footer text-sm">
                  <a href class="pull-right"><i class="fa fa-cog"></i></a>
                  <a href="#notes" data-toggle="class:show animated fadeInRight">See all the notifications</a>
                </div>
              </div>
            </div>
            <!-- / dropdown -->

            <!-- dropdown -->

            <!-- / dropdown -->
          </li>
        </ul>
        <!-- / navbar right -->
      </div>
      <!-- / navbar collapse -->
  </header>
  <!-- / header -->


    <!-- aside -->
  <aside id="aside" class="app-aside hidden-xs bg-dark">
      <div class="aside-wrap">
        <div class="navi-wrap">
          <!-- user -->
          <div class="clearfix hidden-xs text-center hide" id="aside-user">
            <div class="dropdown wrapper">
              
              <!-- dropdown -->
              <!-- / dropdown -->
            </div>
            <div class="line dk hidden-folded"></div>
          </div>
          <!-- / user -->

          <!-- nav -->
          <nav ui-nav class="navi clearfix">
            <ul class="nav">
              <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">

              <li>
                <a href="mail.html">
                  <b class="badge bg-info pull-right">9</b>
                  <i class="glyphicon glyphicon-envelope icon text-info-lter"></i>
                  <span class="font-bold">Email</span>
                </a>
              </li>
              <li class="line dk"></li>
          <!-- nav -->

          <!-- aside footer -->
          <!-- / aside footer -->
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
    <!-- main header -->
    <div class="bg-light lter b-b wrapper-md">
      <div class="row">
        <div class="col-sm-6 col-xs-12">
          <h1 class="m-n font-thin h3 text-black">Attendance Sign In</h1>
          <small class="text-muted">Welcome!</small>
        </div>
    </div>
  
    <!-- / main header -->
<form action="checkin.blade.php" method="post">
    First name:<br>
    <input type="text" name="first_name"><br>
    Last name:<br>
    <input type="text" name="last_name"><br>
    <br>
    <div>
<textarea name="comments" id="comments" style="font-family:sans-serif;font-size:1.2em;">Any Comments?
</textarea><br>
</div>
    <input type="submit" value="Submit">
</form>

      <!-- / stats -->

      <!-- service -->
    
      <!-- / service -->
      <!-- tasks -->
      <!-- tasks -->
    </div>
  </div>
  <!-- / main -->
  <!-- right col -->

<!-- who to follow -->
<!-- who to follow -->
<!-- chats -->
<!-- chats -->


<!-- transactions -->
<!-- transactions -->        

<!-- streamline -->
<!-- / streamline -->
    </div>
    <div data-ng-include=" 'tpl/blocks/aside.right.html' ">
      
  <!-- aside right -->
  <div class="app-aside-right pos-fix no-padder w-md w-auto-xs bg-white b-l animated fadeInRight hide">
    <div class="vbox">
      <div class="wrapper b-b b-t b-light m-b">
        <a href class="pull-right text-muted text-md" ui-toggle-class="show" target=".app-aside-right"><i class="icon-close"></i></a>
        Chat
      </div>
      <div class="row-row">
        <div class="cell">
          <div class="cell-inner padder">
            <!-- chat list -->
            <!-- / chat list -->
          </div>
        </div>
      </div>
      <div class="wrapper m-t b-t b-light">
        <form class="m-b-none">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Say something">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">SEND</button>
            </span>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- / aside right -->

    </div>
  </div>
  <!-- / right col -->
</div>



	</div>
  </div>
  <!-- /content -->
  
  <!-- footer -->
  <footer id="footer" class="app-footer" role="footer">
    <div class="wrapper b-t bg-light">
      <span class="pull-right">2.2.0 <a href ui-scroll="app" class="m-l-sm text-muted"><i class="fa fa-long-arrow-up"></i></a></span>
      &copy; 2016 Copyright.
    </div>
  </footer>
  <!-- / footer -->



</div>

<script src="{{ URL::asset('libs/jquery/jquery/dist/jquery.js') }}"></script>
<script src="{{ URL::asset('libs/jquery/bootstrap/dist/js/bootstrap.js') }}"></script>
<script src="{{ URL::asset('js/ui-load.js') }}"></script>
<script src="{{ URL::asset('js/ui-jp.config.js') }}"></script>
<script src="{{ URL::asset('js/ui-jp.js') }}"></script>
<script src="{{ URL::asset('js/ui-nav.js') }}"></script>
<script src="{{ URL::asset('js/ui-toggle.js') }}"></script>
<script src="{{ URL::asset('js/ui-client.js') }}"></script>

</body>
</html>
