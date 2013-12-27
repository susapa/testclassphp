<?php
class human {
    var $name = "human";
    var $sex = 1;
    var $height = 0;
    var $weight = 0;
    var $age = 0;
    var $province;
    function showName(){
        return $this->name;
    }
    function showHeight(){
        return $this->height;
    }
    function showWeight(){
        return $this->weight;
    }
    function showAge(){
        return $this->age;
       // return ($this->sex == 2?"No Answer" : $this->age);
    }
    function showSex(){
        return ($this->sex ==2?"หญิง":"ชาย");
    }
    function showprovice(){
           $province = "select * from province";
           $provinceresult =   mysql_query($province);
        while ($row = mysql_fetch_array($provinceresult)){
            echo $row["PROVINCE_ID"].' ค่า '.$row["PROVINCE_NAME"].'<br>';
    }
    }
}
class women extends human{
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
    function showSex() {
        return "หญิง";
    }
}
class men extends human{
    function showSex() {
        return "ชาย";
    }
}
?>