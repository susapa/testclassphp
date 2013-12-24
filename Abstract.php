<?php
abstract  class AbstractClass
{
    abstract protected function  getValue();
    abstract protected function  prefixValue();
    
    public function  printOut(){
        echo $this->getValue()."\n";
    }
}
class ConcreteClass1 extends AbstractClass
{
    protected function getValue() {
        return "ConcreteClass1";
    }

    protected function prefixValue($prefix) {
        return "{$prefix}ConcreteClass1";
    }    
}
class ConcreteClass2 extends AbstractClass
{
    protected function getValue() {
           return "ConcreteClass2";
    }

    protected function prefixValue($prefix) {
        return "{$prefix}ConcreteClass2";
    }    
}
$cass1 = new ConcreteClass1();
$cass1->printOut();
//echo $class1->prefixValue('FOO_')."\n";
?>
