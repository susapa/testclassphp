<?php

class BaseClass {

    public function myMethod() {
        echo "BaseClass method Called";
    }

}

class DerivedClass extends BaseClass {

    public function myMethod() {
        echo "DerivedClass method Called";
    }
}
class parent1
{
    private $firstname = "susapa";
    private $lastname = "testlastname";
    
    protected function getData()
    {
        return $this->firstname;
    }
}
class childen extends parent1
{
    function __construct() {
        echo $this->getData();
    }
    function test()
    {
        echo $this->firstname;
    }
}
$a = new childen();
echo '<br>';
function processClass(BaseClass $c)
{
    $c->myMethod();
}
$c = new DerivedClass();
processClass($c);
?>
