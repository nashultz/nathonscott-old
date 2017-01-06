<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- Styles -->


</head>
<body>

    <!-- --------------------------------------------------------------------------------
        ----- MASTHEAD -----
    --------------------------------------------------------------------------------- -->

    <div id="masthead">

    </div>

    <!-- --------------------------------------------------------------------------------
        ----- NAVIGATION -----
    --------------------------------------------------------------------------------- -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container"><div class="row">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="mainnav nav navbar-nav">
                        @include('partials.mainnav')
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div></div>
        <!-- /.container -->
    </nav>

    <!-- --------------------------------------------------------------------------------
        ----- FLASH MESSAGING -----
    --------------------------------------------------------------------------------- -->
    <div class="container">
        @include('flash::message')
    </div>

    <!-- --------------------------------------------------------------------------------
        ----- MAIN CONTENT -----
    --------------------------------------------------------------------------------- -->
    <div class="container">
        @include('content')
    </div>

    <!-- --------------------------------------------------------------------------------
        ----- FOOTER -----
    --------------------------------------------------------------------------------- -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4 hidden-print">
                        <h3>Location</h3>
                        <p>Nathon Scott</p>
                    </div>
                    <div class="footer-col col-md-4 hidden-print">
                        <h3>Around the Web</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="#" target="_blank" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>About Nathon Scott</h3>
                        <p></p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="row hidden-print">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <a href="#" title="Mission Statement and Legal Information">Legal</a> |
                            <a href="#" title="Members Area">Members Area</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; Faulkner County Landlord Association {{date('Y')}}. Site maintained by <a href="http://nathonscott.com" target="_blank">Nathon Scott</a>.
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- --------------------------------------------------------------------------------
        ----- SCROLL TO TOP -----
    --------------------------------------------------------------------------------- -->
    <!-- Only visible on small and extra-small screen sizes -->
    <div class="scroll-top page-scroll">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- --------------------------------------------------------------------------------
        ----- JAVASCRIPT -----
    --------------------------------------------------------------------------------- -->
    <script src="themes/default/assets/js/all.js"></script>
</body>
</html>