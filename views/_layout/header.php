<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?=$this->title?></title
        <!-- Bootstrap Core CSS -->
    <link href="<?=APP_ROOT?>/content/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=APP_ROOT?>/content/css/sb-admin-2.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="<?=APP_ROOT?>/content/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="wrapper">
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-brand" href="<?=APP_ROOT?>/">Начало</a>
        </div>
        <ul class="nav navbar-top-links navbar-right" >
            <?php
            if (isset($_SESSION['messages'])) { ?>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i>
                        <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages" >
                        <!-- add notification messages -->
                        <?php require_once('show-notify-messages.php'); ?>
                    </ul>
                </li>
                <?php
            }
            ?>
        </ul>
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <?php
                require_once ('sidebar.php');
                ?>
            </div>
        </div>
    </nav>



