<?php

class Customer {

    const TYPES = "Mindphp.com";

    public $TYPES;

    public function __construct() {

        $this->TYPES = 12345;
    }

    public function test() {
        $x = $this->TYPES = 123456789;
        echo "Types are : " . $x;
    }

}

class ResultVat {

    const TESTCON = "TESTCONSTANCOMPLETE";

    public $TESTCON;
    public $vat = 9;

    public function __construct() {
        echo 'WellCome<br>';
    }

    public function testvat() {
        $a = $this->vat;
        $x = 9000 / $a;
        echo 'Result Of Vat From 9000 Is' . $x;
    }

}

class BaseClass 
{

    public function myMethod() 
             {
                  echo "BaseClass method called";
             }

}
class DerivedClass extends BaseClass
{
    public function myMethod() 
            {
                   echo "DerivedClass method called";
            } 
}
   function processClass(BaseClass $c)
            {
                   $c->myMethod();
            }
   
   
$a = new Customer();

echo "Types are : " . $a->TYPES;
echo '<br>';
echo "Types are : " . Customer::TYPES;
echo '<br>';
$a->test();
echo '<br>';
$b = new ResultVat();
$b->testvat();
echo '<br>';
echo 'Value Vat Is' . $b->vat;
?>