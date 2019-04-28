<?php
/*
portal-config.php

Used to store all of our WEB120 configuration information

*/

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;

switch(THIS_PAGE)
{
    case 'index.php':
    $title = "George's Home Page";
    $logo = "fa-home";
    $logo_color = "#000";
    $PageID = "Welcome";
    Break;

    case 'aia.php':
    $title = "George's Final Project AIA (Client work)";
    $logo = "fa-universal-access";
    $logo_color = ' style="color:#8b0000"';
    $PageID = "AIA";
    Break;

    case 'contactme.php':
    $title = "Contact George";
    $logo = "fa-paper-plane-o";
    $logo_color = ' style="color:#add8e6"';
    $PageID = "Contact Me";
    break;
        
    default:    
    $title = THIS_PAGE;    
    $logo = '';//no icon by default    
}

$nav1['index.php'] = "Welcome";
$nav1['big/index.php'] = "Big";
$nav1['aia.php'] = "AIA";
$nav1['flowchart.php'] = "Flowchart";
$nav1['fp/index.php'] = "Final Project";
$nav1['contactme.php'] = "Contact Sara";

/* 
Creating a function to generate links and and apply the class=selected to currently called page

<li><a href="index.php" class="selected">Welcome</a></li>
      <li><a href="big/index.php">Big</a></li>
      <li><a href="aia.php">AIA</a></li>
      <li><a href="flowchart.php">Flowchart</a></li>
      <li><a href="fp/index.php">Final Project</a></li>
      <li><a href="contactme.php">Contact Sara</a></li>
*/

function makeLinks($nav1)
{
    $myReturn = '';
    foreach($nav1 as $url => $text){
        
        if($url == THIS_PAGE){
            $myReturn .= "<li><a class=\"selected\" href=\"$url\">$text</a></li>";
        }else{
            $myReturn .= "<li><a href=\"$url\">$text</a></li>";
        }
    }
    
    return $myReturn;
}

?>
