<!DOCTYPE html>
<html lang="ru">


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="./template/img/favicon.ico" type="image/x-icon">
    <link href="template/css/bootstrap.min.css" rel="stylesheet">
    <link href="template/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="template/css/font-awesome.min.css">
    <link href="template/css/thumbnail-gallery.css" rel="stylesheet">
    <title><?=$title?></title>
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Главная</a>
                
                <a class="navbar-brand"> <?=$title?></a>
            </div>
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">
    <div class="col-lg-12">
    </div>

        <div class="row">
            
                <?=$content?>
        </div>
        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Сергей Ковика 2015</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="template/js/jquery.js"></script>
    <script src="template/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="template/js/bootstrap-filestyle.min.js"> </script>

</body>

</html>
