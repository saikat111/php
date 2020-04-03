<?php
$num1 = 5;
$num2 = 555;
$num3 = 55;
$num4 = 50;
if ($num1 >= 2) {
  echo $num1;
  print "<br>";
  if ($num2 <600) {
    echo "less than 600 <br>";
    // code...
  }
  else {
    echo "not less than 600";
  }

}
else{
  echo "not valid";
}
switch ($num1) {
  case 1:
    // code...
    echo "one";
    break;
    case '5':
      // code...
      echo "five <br>";

      break;

  default:
    // code...
    break;
}
for ($i=0; $i <=10 ; $i++) {
  // code...
  echo "the valu of I is :" .$i."<br>";
}
print "<br>";
$season = array ("Summer", "Winter", "Autumn", "Rainy");

//access array elements using foreach loop
foreach ($season as $element) {
    echo "$element";
    echo "</br>";
}
$employee = array (
        "Name" => "Alex",
        "Email" => "alex_jtp@gmail.com",
        "Age" => 21,
        "Gender" => "Male"
    );

    //display associative array element through foreach loop
    foreach ($employee as $key => $element) {
        echo $key . " : " . $element;
        echo "</br>";
    }  





 ?>
