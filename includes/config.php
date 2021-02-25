<?php
ob_start();
define('DEBUG', 'TRUE');

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE){
        case 'index.php';
        $title = 'Home';
        $mainHeadline = 'Welcome';
        $center = 'center';
        break;
        
        case 'big.php';
        $title = 'BIG';
        $mainHeadline = 'BIG site';
        $center = 'center';
        break;
       
       // case 'cat.php';
       // $title = 'Cats';
       // $mainHeadline = 'Cats for Adoption';
       // $center = 'center';
       // break;
        
        case 'final.php';
        $title = 'Final page';
        $center = 'center';
        break;
        
        case 'contact.php';
        $title = 'Contact me';
        $mainHeadline = 'Welcome to the contact page';
        $center = 'center';
        break;
}//end switch

$nav['index.php'] = 'Home';
$nav['big/index.php'] = 'BIG';
//$nav['cat.php'] = 'Cats';
$nav['final.php'] = 'Final';
$nav['contact.php'] = 'Contact';

function makeLinks($nav){
    $myReturn = '';
    foreach($nav as $key => $value) {
        if(THIS_PAGE == $key){
            $myReturn .= '<li><a href=" '.$key.' "  class="selected">'.$value.'</a></li>';
        } else{
            $myReturn .= '<li><a href=" '.$key.' ">'.$value.'</a></li>';
        }
    }
    return $myReturn;
}//end func

function myerror($myFile, $myLine, $errorMsg){
    if(defined('DEBUG') && DEBUG){
        echo 'Error in file: <b> '.$myLine.' </b> on line: <b>'.$myLine.' </b>';
        echo 'Error message: <b> '.$errorMsg.'</b>';
        die();
    } else {
        echo 'issue';
        die();
    }
}



?>