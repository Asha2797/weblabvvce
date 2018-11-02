<?php
 $allTheStates = "Mississippi Alabama Texas Massachusetts Kansas";
 $statesArray = [];
 $states1 = explode(' ',$allTheStates);
 $i = 0;
 
 foreach($states1 as $state) {
	 if(preg_match('/xas$/',($state)))
	 {
		 $statesArray[$i]=($state);
		 $i= $i+1;
		 print "\n The States that ends in xas : \n".$state;
	 }
 }
 
 foreach($states1 as $state) {
	 if(preg_match('/^K.*s$/',($state)))
	 {
		 $statesArray[$i]=($state);
		 $i= $i+1;
		 print "<br> The States that begin with K  ends in s <br>: ".$state;
	 }
 }
 
 foreach($states1 as $state) {
	 if(preg_match('/^M.*s$/',($state)))
	 {
		 $statesArray[$i]=($state);
		 $i= $i+1;
		 print "\n The States that begin with M and ends in s \n : ".$state;
	 }
 }
 
 foreach($states1 as $state) {
	 if(preg_match('/a$/',($state)))
	 {
		 $statesArray[$i]=($state);
		 $i= $i+1;
		 print "\n The States that ends in a \n: ".$state;
	 }
 }
 
 foreach ($statesArray as $element  => $value)
 {
	 print("<br>".$value. "is the element " .$element);
 }
 
 ?>