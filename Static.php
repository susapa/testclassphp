<?php

class ClassName {

    static private $staticvariable;

    function __construct($value) {
        if ($value != "") {
            ClassName::$staticvariable = $value;
        }
        $this->getStaticData();
    }

    public function getStaticData() {
        echo ClassName::$staticvariable;
    }

}

$a = new ClassName("12");
$a = new ClassName("25");
$a = new ClassName("");
?>
