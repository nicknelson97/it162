<?php
ob_start();
define('DEBUG', 'TRUE');

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE){
        case 'index.php';
        $title = 'Dominick Nelson Web Developer Examples and Resources';
        $mainHeadline = 'Welcome';
        $center = 'center';
        break;
        
        case 'webcam.php';
        $title = 'Live Feeds';
        $center = 'center';
        break;

        case 'calendar.php';
        $title = 'My Calendar';
        $center = 'center';
        break;
        
        case 'youtube.php';
        $title = 'Web Accessability';
        $center = 'center';
        break; 
        
        case 'map.php';
        $title = 'Map of SCC';
        $center = 'center';
        break;
        
        case 'contact.php';
        $title = 'Contact me';
        $mainHeadline = 'Welcome to the contact page';
        $center = 'center';
        break;
}//end switch

$nav['../index.php'] = 'Back To Portal Site';
$nav['webcam.php'] = 'Webcams';
$nav['<span>Google Tools</span>'] = '<ul>
                    <li><a href="calendar.php">Google Calendar</a></li>
                    <li><a href="youtube.php">Accessibility</a></li>
                    <li><a href="map.php">Google Map</a></li>
                </ul>';
$nav['<span>Research</span>'] = '<ul>
                    <li><a href="research1.php">Responsive vs Mobile</a></li>
                    <li><a href="">Galleries</a></li>
                    <li><a href="">Flexbox</a></li>
                </ul>';
$nav['contact.php'] = 'Contact Dominick';

function makeLinks($nav){
    $myReturn = '';
    foreach($nav as $key => $value) {
        if(THIS_PAGE == $key){
            $myReturn .= '<li class="topfirst"><a href=" '.$key.' " style="height:18px;line-height:18px;">'.$value.'</a></li>';
        } else if($key == '<span>Google Tools</span>'){
            $myReturn .= '<li class="topfirst"><a href="#" style="height:18px;line-height:18px;">'.$key.'</a>'.$value.'</li>';
        } else if($key == '<span>Research</span>'){
            $myReturn .= '<li class="topfirst"><a href="#" style="height:18px;line-height:18px;">'.$key.'</a>'.$value.'</li>';
        
        } else{
            $myReturn .= '<li class="topfirst"><a href=" '.$key.' " style="height:18px;line-height:18px;">'.$value.'</a></li>';
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