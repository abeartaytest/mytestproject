<?php

$Weekdays = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");

echo end($Weekdays);
exit;

$element = "Monday";

$x = array_slice($Weekdays, 0, array_search($element, $Weekdays));
$y = array_reverse(array_slice(array_reverse($Weekdays), 0, array_search($element, array_reverse($Weekdays))));

//echo "<p><pre>"; print_r($x); echo "</pre></p>"; echo "<p><pre>"; print_r($y); echo "</pre></p>";

$z = array_merge( (array)$element, $y, $x);

echo "<p><pre>"; print_r($z); echo "</pre></p>";
echo "<p><pre>"; print_r(array_slice($z, 0, 3)); echo "</pre></p>";
exit;


  if ( in_array($element,$myArray ) )
  {
    //show original array
    echo "<p><pre>"; print_r($myArray); echo "</pre></p>";
    //find the key
    $key = array_search($element, $myArray); 
    //delete the element
    unset($myArray[$key]);
	
	//$array = array_unique(array_merge(array($value), $array)); 
	$myArray = array_values(array_unique(array_merge(array($element), $myArray))); 

    //prepend to the front of the array
    array_unshift($myArray,$element);
    //show updated array
    echo "<p><pre>"; print_r($myArray); echo "</pre></p>";
  }

//echo date('Y-m-d H:i:s', strtotime( date('Monday')));
exit;

echo (strtotime(date('10:00:00')) > strtotime(date('11:09:00'))) ? 'yes':'no';
exit;

echo '<pre>';
print_r($_POST);
exit;

//session_start();/echo session_id();		exit;/exit;

$str = base64_encode('Naresh$||$R$||$naresh@sigmaedge.com$||$DD_04132011_7');
echo $str.'<br>';

list($f, $l, $e, $p) = explode('$||$', base64_decode($str));

echo $f.'<br>';
echo $l.'<br>';
echo $e.'<br>';
echo $p.'<br>';



exit;

$str = 'a:4:{s:13:"LoginFormData";s:149:"a:6:{s:5:"fname";s:4:"test";s:5:"lname";s:4:"test";s:5:"email";s:13:"test@test.com";s:3:"pid";s:13:"TL_03272011_1";s:1:"x";s:2:"46";s:1:"y";s:1:"7";}";s:8:"UserData";a:6:{s:6:"CustID";s:1:"1";s:8:"CustName";s:9:"test test";s:7:"PartyID";s:1:"1";s:8:"PartyStr";s:13:"TL_03272011_1";s:9:"PartyTime";s:57:"Party at SigmaEdge\'s on Sunday at 10:30 am March 27, 2011";s:12:"ConsultantID";s:1:"1";}s:8:"P_Blocks";a:0:{}s:13:"TL_03272011_1";O:8:"stdClass":10:{s:7:"PartyID";s:1:"1";s:8:"PartyStr";s:13:"TL_03272011_1";s:9:"partyName";s:9:"SigmaEdge";s:8:"TimeZone";s:3:"IST";s:9:"StartDate";s:10:"2011-03-27";s:9:"StartTime";s:8:"10:30:00";s:14:"ConsultantFKID";s:1:"1";s:13:"ProductsBlock";s:1:"0";s:9:"OpprBlock";s:1:"0";s:10:"IntroBlock";s:1:"0";}}';

echo '<pre>';
print_r(unserialize($str));