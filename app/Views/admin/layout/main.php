<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Blank Page Stisla</title>

   <!-- General CSS Files -->
  <link rel="stylesheet" href="<?php echo base_url('admin/modules/bootstrap/css/bootstrap.min.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('admin/modules/fontawesome/css/all.min.css') ?>">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="<?php echo base_url('admin/modules/jquery-selectric/selectric.css') ?>">

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo base_url('admin/css/style.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('admin/css/components.css') ?>">

  <?php echo $this->renderSection('style'); ?>
</head>
<body>
  <div id="app">

    <?php echo $this->renderSection('content'); ?>

  </div>

<!-- General JS Scripts -->
  <script src="<?php echo base_url('admin/modules/jquery.min.js') ?>"></script>
  <script src="<?php echo base_url('admin/modules/popper.js') ?>"></script>
  <script src="<?php echo base_url('admin/modules/tooltip.js') ?>"></script>
  <script src="<?php echo base_url('admin/modules/bootstrap/js/bootstrap.min.js') ?>"></script>
  <script src="<?php echo base_url('admin/modules/nicescroll/jquery.nicescroll.min.js') ?>"></script>
  <script src="<?php echo base_url('admin/modules/moment.min.js') ?>"></script>
  <script src="<?php echo base_url('admin/js/stisla.js') ?>"></script>
  
  <!-- JS Libraies -->
  <script src="<?php echo base_url('admin/modules/jquery-pwstrength/jquery.pwstrength.min.js') ?>"></script>
  <script src="<?php echo base_url('admin/modules/jquery-selectric/jquery.selectric.min.js') ?>"></script>

  <!-- Page Specific JS File -->
  <script src="<?php echo base_url('admin/js/page/auth-register.js') ?>"></script>
  
  <!-- Template JS File -->
  <script src="<?php echo base_url('admin/js/scripts.js') ?>"></script>
  <script src="<?php echo base_url('admin/js/custom.js') ?>"></script>

  <?php echo $this->renderSection('script'); ?>
</body>
</html>