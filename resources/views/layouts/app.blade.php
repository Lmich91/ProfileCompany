<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Profile Company</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link href="{{ asset('bootstrap-3.3.7/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <style>
        body {
            padding-top:50px;
        }

        #masthead {
            min-height:270px;
            background-color:#85ff28;
            color:white;
        }

        #masthead h1 {
            font-size: 55px;
            line-height: 1;
        }

        #masthead .well {
            margin-top:13%;
            background-color:#111155;
            border-color:#000033;
        }

        .icon-bar {
            background-color:#fff;
        }

        /* hide sidebar sub menus by default */
        #sidebar.nav .nav {
            display: none;
            font-size:12px;
        }

        /* show sub menu when parent is active */
        #sidebar.nav>.active>ul {
            display: block;
        }

        @media screen and (min-width: 768px) {
            #masthead h1 {
                font-size: 50px;
            }
        }

        .navbar-bright {
            background-color:#111155;
            color:#fff;
        }
          
        .navbar-bright a, #masthead a, #masthead .lead {
            color:#aaaacc;
        }

        .navbar-bright li > a:hover {
            background-color:#000033;
        }

        .affix-top,.affix{
            position: static;
        }

        @media (min-width: 979px) {
          #sidebar.affix-top {
            position: static;
            margin-top:30px;
            width:228px;
          }
          
          #sidebar.affix {
            position: fixed;
            top:70px;
            width:228px;
          }
        }

        #sidebar li.active {
            border:0 #eee solid;
            border-right-width:4px;
        }


        {
            font-family: 'Lato';
        }
        

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body>
 
<header class="navbar navbar-bright navbar-fixed-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="/" class="navbar-brand">Sinergi</a>
    </div>
    <nav class="collapse navbar-collapse" role="navigation">
      <ul class="nav navbar-nav">
        <li>
          <a href="#sec">Profil</a>
        </li>
        <li>
          <a href="#sec">Produk</a>
        </li>
        <li>
          <a href="#sec">Blog</a>
        </li>
        <li>
          <a href="#sec">Customer</a>
        </li>
      </ul>

                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/user') }}"><i class="fa fa-btn fa-sign-out"></i>User Menu</a></li>
                                <li><a href="{{ url('/role') }}"><i class="fa fa-btn fa-sign-out"></i>Role Menu</a></li>
                                <li><a href="{{ url('/permission') }}"><i class="fa fa-btn fa-sign-out"></i>Permission Menu</a></li>
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
    </nav>

  </div>
</header>

<div id="masthead">  
  <div class="container">
      <div class="row">
        <div class="col-md-7">
          <h1>Sinergi Multi Cipta
            <p class="lead">ICT, Training & Consultant</p>
          </h1>
        </div>
        <div class="col-md-5">
            <div class="well well-lg"> 
              <div class="row">
                <div class="col-sm-6">
                    <img src="//placehold.it/180x100" class="img-responsive">
                </div>
                <div class="col-sm-6">
                    <strong>Important</strong>
                    <p>hari</p>
                </div>
              </div>
            </div>
        </div>
      </div> 
  </div><!-- /cont -->
</div>

    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
