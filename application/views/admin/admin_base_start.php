<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Komik</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/jsgrid/jsgrid.min.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/jsgrid/jsgrid-theme.min.css" />
   <link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
    <script src="<?php echo base_url()?>assets/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/jsgrid/jsgrid.min.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
            body {
                font-family: 'Segoe UI';
            }
        </style>
    
</head>
<body>

    <nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Admin Page</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
            
            <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Admin Komik<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo base_url('Admin/index'); ?>">Datatable Komik</a></li>
                    <li><a href="<?php echo base_url('Admin/create'); ?>">Tambah Komik</a></li>
                    <li><a href="<?php echo base_url('Admin/sinopsiscover'); ?>">Edit sinopsis dan Cover</a></li>                     
                </ul>
            </li>
            
            <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Admin Chapter<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo base_url('Admin_chapter/index'); ?>">Datatable Chapter</a></li>
                    <li><a href="<?php echo base_url('Admin_chapter/ambiljudul'); ?>">Tambah Chapter</a></li>                     
                </ul>
            </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo base_url('login/logout'); ?>">Log Out</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div>
</nav>