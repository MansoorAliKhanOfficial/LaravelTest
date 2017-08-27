<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <title>

    Home &middot; Application theme &middot; Official Bootstrap Themes

    </title>

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="/css/bootstrap-reboot.min.css" rel="stylesheet"> --}}
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/toolkit.css" rel="stylesheet">

    <link href="/css/application.css" rel="stylesheet">

    <!-- contact form css-->


    <link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>

    <style>
    /* note: this is a hack for ios iframe for bootstrap themes shopify page */
    /* this chunk of css is not part of the toolkit :) */
    body {
    width: 1px;
    min-width: 100%;
    *width: 100%;
    }
    </style>

  </head>


  <body class="bpi">
    <div class="container-fluid">
      @include('admin.layouts.nav')
      <div class="row">
        @yield('content')
      </div>
    </div>
    @include('admin.layouts.footer')
  </body>
</html>
