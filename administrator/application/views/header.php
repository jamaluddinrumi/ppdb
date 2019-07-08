<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    if ( isset($title)) {

    } else {
      $rsegment1 = $this->uri->rsegment(1);
      $rsegment2 = $this->uri->rsegment(2);
      if (strtolower($rsegment2) == 'index') {
        $title = $rsegment1;
      } else {
        $title = $rsegment2;
      }
    }

    ?>
    <title><?php echo humanize($title); ?></title>

    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/image/favicon.png" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/aos.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/foundation.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,400i,500,500i" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/app-dashboard-layout.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/app.css">
  </head>
  <body class="<?php echo $this->uri->rsegment(1) ?> <?php echo $this->uri->rsegment(2) ?>">
    <div class="grid-container full">
