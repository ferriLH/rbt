<!DOCTYPE HTML>
<html>
<head>
    <title><?php echo $title." | Page";?></title>
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url('assets/main_page/images')?>/favicon.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Bootstrap Core CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<!--    <link href="--><?php //echo base_url()?><!--assets/main_page/css/bootstrap.css" rel='stylesheet' type='text/css' />-->
	<script>
        var test = document.createElement("div")
        test.className = "hidden d-none"

        document.head.appendChild(test)
        var cssLoaded = window.getComputedStyle(test).display === "none"
		document.head.removeChild(test)

        if (!cssLoaded) {
            var link = document.createElement("link");

            link.type = "text/css";
            link.rel = "stylesheet";
            link.href = "<?php echo base_url()?>assets/main_page/css/bootstrap.css";

            document.head.appendChild(link);
        }
	</script>
    <!-- Custom CSS -->
    <link href="<?php echo base_url()?>assets/main_page/css/style.css" rel='stylesheet' type='text/css' />
    <!-- Graph CSS -->
    <link href="<?php echo base_url()?>assets/main_page/css/font-awesome.css" rel="stylesheet">
    <!-- jQuery -->
    <!-- lined-icons -->
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <!-- //lined-icons -->
    <!-- Meters graphs -->
    <script src="<?php echo base_url()?>assets/main_page/js/jquery-2.1.4.js"></script>
    <script src="<?php echo base_url()?>assets/dashboard_page/js/sweetalert/sweetalert2.all.min.js"></script>


</head>
