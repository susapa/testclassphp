<?php
class test 
{   
    protected $firstname = susapa  ;
    protected $lastname = Test;
}
class childen extends test
{
    function __construct()
        {
        echo $this->firstname.'<br>';
        echo $this->lastname;
        }
    }
$a = new childen();
?>
