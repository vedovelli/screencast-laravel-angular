<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SPAs, por Vedovelli</title>

    <!-- Bootstrap Core CSS -->
    <link href="/sbadmin/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/sbadmin/css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/sbadmin/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Select2 -->
    <link href="/bower_components/select2/select2.css" rel="stylesheet">
    <link href="/bower_components/select2-bootstrap3-css/select2-bootstrap.css" rel="stylesheet">

    <!-- Animate.css -->
    <link href="/bower_components/animate.css/animate.min.css" rel="stylesheet">

    <!-- Local CSS -->
    <link href="/css/spa.css" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        @include('layouts.partials.admin_top_area')

        <div id="page-wrapper">

            <div class="spa-users container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Usuários
                            <small>Gerenciamento dos Usuários do Sistema</small>
                        </h1>
                        @yield('content')
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <script src="/js/min/spa-min.js"></script>

</body>

</html>
