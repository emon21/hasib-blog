<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Admin :: Home</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="ThemeDesign" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" href="{{ asset('backend') }}/assets/images/favicon.ico">
    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/plugins/morris/morris.css">
    <link href="{{ asset('backend') }}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend') }}/assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend') }}/assets/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>

@yield('content')

    <!-- jQuery  -->
    <script src="{{ asset('backend') }}/assets/js/jquery.min.js"></script>
    <script src="{{ asset('backend') }}/assets/js/bootstrap.min.js"></script>
    <script src="{{ asset('backend') }}/assets/js/modernizr.min.js"></script>
    <script src="{{ asset('backend') }}/assets/js/detect.js"></script>
    <script src="{{ asset('backend') }}/assets/js/fastclick.js"></script>
    <script src="{{ asset('backend') }}/assets/js/jquery.slimscroll.js"></script>
    <script src="{{ asset('backend') }}/assets/js/jquery.blockUI.js"></script>
    <script src="{{ asset('backend') }}/assets/js/waves.js"></script>
    <script src="{{ asset('backend') }}/assets/js/wow.min.js"></script>
    <script src="{{ asset('backend') }}/assets/js/jquery.nicescroll.js"></script>
    <script src="{{ asset('backend') }}/assets/js/jquery.scrollTo.min.js"></script>
    <!--Morris Chart-->
    <script src="{{ asset('backend') }}/assets/plugins/morris/morris.min.js"></script>
    <script src="{{ asset('backend') }}/assets/plugins/raphael/raphael-min.js"></script>
    <script src="{{ asset('backend') }}/assets/pages/dashborad.js"></script>
    <script src="{{ asset('backend') }}/assets/js/app.js"></script>
</body>
</html>