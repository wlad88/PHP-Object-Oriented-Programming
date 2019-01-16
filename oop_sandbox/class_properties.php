<?php

class Student {
  var $first_name;
  var $last_name;
  var $country = 'None';
}

$student1 = new Student;
$student1->first_name = "Piet";
$student1->last_name = "Jansen";

$student2 = new Student;
$student2->first_name = "Jaap";
$student2->last_name = "Vermeulen";

echo $student1->first_name . $student1->last_name
echo $student2->first_name . $student2->last_name

?>
