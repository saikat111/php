<?php
function add($n1, $n2){
$sum = $n1 + $n2;
echo "The sum is:".$sum."<br>";
}
function sub($n1, $n2){
$sum = $n1 - $n2;
echo "The - is:".$sum."<br>";
}
if(isset($_POST['add'])){
  add($_POST['first'],$_POST['second']);
}
if(isset($_POST['sub'])){
  sub($_POST['first'],$_POST['second']);
}

?>
<form method="post">
Enter first number: <input type="number" name="first"/><br><br>
Enter second number: <input type="number" name="second"/><br><br>
<input type="submit" name="add" value="ADDITION"/>
<input type="submit" name="sub" value="SUBTRACTION"/>
</form>
