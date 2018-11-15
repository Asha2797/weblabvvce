<?php
$a1 = array(
    array(1, 2,3),
    array(3, 4,1),
    array(5, 6,9)
);
echo "<h1> first  matrix </h1>";
echo "<pre/>";print_r($a1);
$a2 = array(
    array(1, 2,3),
    array(3, 4,1),
    array(5, 6,9)
);
echo "<h1> second matrix </h1>";
echo "<pre/>";print_r($a2);
$result = array();

for($i=0;$i<3;$i++)
{
	for($j=0;$j<3;$j++)
	{
	$result[$i][$j]=0;
		for($k=0;$k<3;$k++)
		{
		$result[$i][$j]+=$a1[$i][$k]*$a2[$k][$j];
		}
	}
	
	
}
echo "<h1> result matrix </h1>";

echo "<pre/>";print_r($result);
	

