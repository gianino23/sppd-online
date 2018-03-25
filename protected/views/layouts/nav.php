<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>E-SPPD</title>

	<!-- Bootstrap Core CSS -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/themes/sb-admin/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/themes/sb-admin/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/themes/sb-admin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/themes/sb-admin/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/themes/sb-admin/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/themes/sb-admin/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<link rel="shortcut icon" href="#"/>
</head>

<body>
	<div id="wrapper">

        
<!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
				<a class="navbar-brand" href="index.php">Selamat Datang Admin</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
			   
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="E-Laporan" disabled>
                                <span class="input-group-btn">
                                
                            </span>
                            </div>
                            <!-- /input-group--> 
                        </li>
						<li><a href="index.php"><i class="fa fa-home"></i> Dashboard</a></li>
						<li><a href="index.php?r=pegawai/admin"><i class="fa fa-user"></i> Pegawai</a></li>
						<li><a href="index.php?r=site/logout"><i class="fa fa-power-off"></i> Logout</a></li>
								
					</ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
		
		<div id="page-wrapper">
			<?php echo $content; ?>
	</div>
	
</div>	

		<?php Yii::app()->clientScript->registerCoreScript("jquery");?>
		 <!-- jQuery -->
   
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/sb-admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/sb-admin/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/sb-admin/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/sb-admin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/sb-admin/dist/js/sb-admin-2.js"></script>
   

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>
</body>
</html>