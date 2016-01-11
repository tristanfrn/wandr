<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <link rel="shortcut icon" href="img/favicon_1.ico">

        <title>Velonic - Responsive Admin Dashboard Template</title>

        


        <!-- Bootstrap core CSS -->
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <link href="/css/bootstrap-reset.css" rel="stylesheet">

        <!--Animation css-->
        <link href="/css/animate.css" rel="stylesheet">

        <!--Icon-fonts css-->
        <link href="/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <link href="/assets/ionicon/css/ionicons.min.css" rel="stylesheet" />

        <!-- Custom styles for this template -->
        <link href="/css/style.css" rel="stylesheet">
        <link href="/css/helper.css" rel="stylesheet">
        <link href="/css/app.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
        <!--[if lt IE 9]>
          <script src="js/html5shiv.js"></script>
          <script src="js/respond.min.js"></script>
        <![endif]-->

    </head>


    <body>

        <div class="wrapper-page animated fadeInDown">
            <div class="panel panel-color panel-primary">

                @yield('content')

            </div>
        </div>

    


        <!-- js placed at the end of the document so the pages load faster -->
        <script src="/js/jquery.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/pace.min.js"></script>
        <script src="/js/wow.min.js"></script>
        <script src="/js/jquery.nicescroll.js" type="text/javascript"></script>
            

        <!--common script for all pages-->
        <script src="/js/jquery.app.js"></script>

    
    </body>
</html>
