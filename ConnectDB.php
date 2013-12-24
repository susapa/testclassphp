<?php
############ user,password,dbname for localhost ##########
define(HOST,"localhost");
define(USER,"root");
define(PASS,"");
define(DBNAME,"test");
############ user,password,dbname for localhost ##########
 
class MYSQL{
  
 private $str;
 private $result;
  
 public function  __construct($host,$user,$pass,$dbname) {
 $this->str = mysql_connect($host,$user,$pass) or die (mysql_error());
 $this->dbname = mysql_select_db($dbname);
 mysql_query("SET NAMES UTF8");
 }
  
 public function INSERT(){
  $this->str ="INSERT INTO $this->TABLE ($this->FIELD) VALUES ($this->VALUE)";
 
  return mysql_query($this->str);
  }
 public function SELECT(){
 $this->str ="SELECT $this->FIELD FROM $this->TABLE";
 
  $this->result =mysql_query($this->str);
  }
 public function UPDATE(){
  $this->str ="UPDATE $this->TABLE SET $this->VALUE";
  $this->result = mysql_query($this->str);
  }
 public function DELETE(){
  $this->str ="DELETE FROM $this->TABLE";
  return mysql_query($this->str);
  }
 public function FETCH_OBJ(){
  return  mysql_fetch_object($this->result);
  }
 public function FETCH_ARR(){
  return  mysql_fetch_array($this->result);
  }
 public function NUM_ROWS(){
  return  mysql_num_rows($this->result);
  }
 public function FETCH_RESULT(){
  return  mysql_result($this->result);
  }
 } // End class MYSQL
 ?>