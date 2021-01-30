<!DOCTYPE html>
<html>
 <head>
     <title><?php echo $title; ?></title>
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/portal.css" />
  <link rel="stylesheet" href="css/nav.css" />
  <script src="https://use.fontawesome.com/6a71565c22.js"></script>
 </head>
 <body>
     <main class="wrapper">
     <header>
     <h1><a href="index.php"><i class="logo fa fa-home"></i>Dominick Nelson: IT 162 Portal Website</a></h1>
     <nav> 
         <ul class="topnav" id="myTopnav">    
             <?php echo makeLinks($nav);   ?>
         </ul>
         </nav>
     </header>