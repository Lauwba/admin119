<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Administrator Dashboard Pages</title>
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/dataTables.bootstrap4.min.css" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
        <script src="<?php echo base_url() ?>assets/js/jquery-1.12.4.js"></script>
        <script src="<?php echo base_url() ?>assets/js/sweetalert2.all.js"></script>
        <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/jquery.dataTables.min.js"></script>
    </head>
    <body>
        <div class="container pt-4 pb-4">
            <nav class="navbar navbar-expand-lg navbar-light" >
                <div class="container"> 
                    <a class="border-danger navbar-brand text-danger" href="#">
                        <i class="fa d-inline fa-lg fa-circle-o"></i>
                        <b> 119 Dashboard </b>
                    </a> <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar5">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbar5">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item" id="dashboard"> <a class="nav-link" href="<?php echo site_url('dash/#!dashboard') ?>"> <span class="fa fa-home"></span> Dashboard</a> </li>
                            <li class="nav-item" id="report"> <a class="nav-link" href="<?php echo site_url('report-received/#!report') ?>"> <span class="fa fa-phone"></span> Laporan Emergency</a> </li>
                            <!--<li class="nav-item" id=""> <a class="nav-link" href="#"> <span class="fa fa-sticky-note"></span> Log</a> </li>-->
                        </ul>
                        <a class="btn btn-outline-danger navbar-btn ml-md-2" href="<?php echo site_url('sign-out'); ?>"><i class="fa fa-sign-out"></i> Sign Out</a>
                    </div>
                </div>
            </nav>
            <script>
                var url = window.location.href;
                var id = url.split('!');
                var getActive = id[1];
                $("#" + getActive).addClass("active");
                $("#" + getActive).css("active");
            </script>
        </div>

        <div class="container mb-4">
            <h4>Selamat Datang, <?php echo $this->session->userdata('nama') ?></h4>
        </div>
