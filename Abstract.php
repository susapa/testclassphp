<?php
//if(eregi("/Abstract.php",$_SERVER['PHP_SELF'])){
//header("location: http://www.google.com");
//}

abstract class AbstractClass {

    // Force Extending class to define this method
    abstract protected function getValue();

    abstract protected function prefixValue($prefix);

    // Common method
    public function printOut() {
        print $this->getValue() . "\n";
    }

}

class ConcreteClass1 extends AbstractClass {

    protected function getValue() {
        return "ConcreteClass1";
    }

    public function prefixValue($prefix) {
        return "{$prefix}ConcreteClass1";
    }

}

class ConcreteClass2 extends AbstractClass {

    public function getValue() {
        return "ConcreteClass2";
    }

    public function prefixValue($prefix) {
        return "{$prefix}ConcreteClass2";
    }

}

abstract class AbstractClass2 {

    abstract protected function prefixName($name);
}

class ConcreteClass extends AbstractClass2 {

    public function prefixName($name, $separator = ".") {
        if ($name == "Susapa") {
            $prefix = "Mr";
        } else if ($name == "Kupa") {
            $prefix = "Mrs";
        } else {
            $prefix = "Kuy";
        }
        return "{$prefix}{$separator}{$name}";
    }

}

$class1 = new ConcreteClass1;
$class1->printOut();
echo $class1->prefixValue('FOO_') . "\n";

$class2 = new ConcreteClass2;
$class2->printOut();
echo $class2->prefixValue('FOO_') . "\n";
echo '<hr>';
$class = new ConcreteClass();
echo $class->prefixName("Susapa"), "\n";
echo '<hr>';
echo $class->prefixName("Kupa"), "\n";
echo '<hr>';
echo $class->prefixName("Ja");
?>