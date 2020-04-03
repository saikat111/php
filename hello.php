<?php
function me($num2){
$num1 = 10;
print $num1 + $num2;
print "<br>";
echo "This function name is :".__FUNCTION__;
}
me(10);
print"<br>";
$a = 20;
$$a  = 200;
print $a;
print"<br>";
print $$a;
print "<br>";
define("msg", "this is a define sms");
echo msg;
print "<br>";
define("name", "saikat");

echo name;
print "<br>";
echo "you are in line " . __LINE__;
print "<br>";
echo "your current fine address is :". __FILE__;
print "<br>";
echo __DIR__ . "<br><br>";
print "<br>";

?>
