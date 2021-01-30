    <?php include('includes/config.php'); ?>
    <?php include('includes/header.php'); ?>
    	<?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "nicknelson97@gmail.com";  //place your/your client's email address here
        $toName = "Dominick Nelson"; //place your client's name here
        $website = "nicknelson97.xyz";  //place NAME of your client's website

        echo loadContact('simple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements

         include('includes/footer.php'); 
        ?>
  </main>
 </body>
</html>