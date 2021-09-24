<!doctype html>
<html lang="en">

<head>

    
    <meta charset="utf-8" />
    <title><?= $title;?> - <?= master_title();?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?= base_url();?>assets/images/favicon.png">
    <meta content="" name="description" />
    <meta content="TubanWeb" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?= base_url();?>assets/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="<?= base_url();?>assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="<?= base_url();?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url();?>assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="<?= base_url();?>assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    <style type="text/css">
        .bg-primary {
            background-color: #F5E9E9!important;
        }

        .btn-primary {
            color: #fff;
            background-color: #F28F7A;
            border-color: #F28F7A;
        }

        .btn-primary:hover {
            background-color: #664249;
            border-color: #664249;
        }

        .text-primary{
            color: #F28F7A !important;
        }

        .text-primary-dark{
            color: #664249 !important;
        }
    </style>
</head>


<body class="authentication-bg bg-primary">