<?php

class Person {

public function showData() {
        echo "This is Person's showData()n<br>";
    }
    public function testShow(){
        echo 'test Show Use From Parent<br>';
    }
}

class Customer extends Person {

    public function showData() {
        parent::showData();
        parent::testShow();
       echo "This is Customer's showData()<br>";
    }

}
$c = new Customer();
$c->showData();

?>
