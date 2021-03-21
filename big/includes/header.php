<!DOCTYPE html>
<html lang="en">
<?php include('includes/config.php'); ?>
 <head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="initial-scale=1.0">
	<title><?php echo $title; ?></title>
		<!-- Start css3menu.com HEAD section -->
	<link rel="stylesheet" href="css/nav.css" type="text/css" /><style type="text/css">._css3m{display:none}</style>
	<!-- End css3menu.com HEAD section -->
     
      <meta charset="utf-8" />
      <meta name="robots" content="noindex,nofollow" />
      <meta name="viewport" content="width=device-width" />
      <link rel="stylesheet" href="css/big.css" />
 </head>
 <body>

     
     
   <main>
    <header>
     <h1><a href="index.php">Dominick Nelson IT 162 BIG Site</a></h1>
        <nav class="topnav" id="myTopnav">
            <input type="checkbox" id="css3menu-switcher" class="c3m-switch-input">
            <ul id="css3menu1" class="topmenu">
                <li class="switch"><label onclick="" for="css3menu-switcher"></label></li>
                <?php echo makeLinks($nav);   ?>
            </ul>
            <!-- End css3menu.com BODY section -->
        </nav>
     </header> 