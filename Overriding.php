<?php

class Person {

    function calculateAge($dob) {
        echo "calculateAge called of Person Classn";
    }

}

class Customer extends Person {

    function calculateAge($dob) {
        echo "calculateAge called of Customer Classn<br>";
        echo $dob;
    }

}
$c1 = new Customer();
$p1 = new Person();
$c1->calculateAge("Something");
echo '<br>';
$p1->calculateAge("Something More");

?>
