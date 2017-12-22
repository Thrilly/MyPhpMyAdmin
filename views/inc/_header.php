<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>My PhpMyAdmin - ETNA</title>
  <link rel="shortcut icon" href="img/logo_pma.png">
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="assets/dataTables.bootstrap4.css" rel="stylesheet">
  <link href="assets/css/myphpmyadmin.css" rel="stylesheet">
  <link href="assets/css/custom.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<?php if (isset($infobar)): ?>
<div class="infobar bg-<?php echo $infobar['bg'] ?>"><p><i class="fa fa-<?php echo $infobar['fa'] ?>" aria-hidden="true"></i> <?php echo $infobar['msg'] ?></p></div>
<?php endif ?>