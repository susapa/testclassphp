<?php
class human {
    var $name = "human";
    var $sex = 1;
    var $height = 0;
    var $weight = 0;
    var $age = 0;
    function showName(){
        return $this->name;
    }
    function showHeight(){
        return $this->height;
    }
    function showWeight(){
       if ($this->sex == 2){
           return $this->weight = "No Answer";
       }
       else{
           return $this->weight;
      }
       // return ($this->sex == 2?"No Answer" : $this->weight);
    }
    function showAge(){
        return ($this->sex == 2?"No Answer" : $this->age);
    }
    function showSex(){
        return($this->sex);
    }
}
?>