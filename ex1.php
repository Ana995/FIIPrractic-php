<?php
$a=5;
$b=6;
$c=7;
$suma=$a+$b+$c;
$dif=$c-$b-$a;
$s='December';
$names=array('Ana','Maria','Alina','Georgiana','Simona');
echo 'Suma:'; echo $suma;
echo '<br>';
echo 'Diferenta:'; echo $dif;
echo '<br>';
echo 'Inmultire:';echo $a*$b*$c;
echo '<br>';
echo 'Impartire:'; echo ($c/$b)/$a;
echo '<br>';
echo '<br>';
 if (date("F")==$s && date("d")>20 && date("d")<26)
    echo 'Craciun fericit';
 else 
 { 
   echo 'O zi buna!';	
   echo '<br>';
 }
for ($i=1;$i<=5;$i++)
{
	echo $a=$i*5;
	echo '<br>';
	
}
foreach ($names as $key=>$value)
{
	print"<br> For $key of names the value is $value";
}
?>
