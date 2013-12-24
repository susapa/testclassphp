<?php

class TemperatureDegrees{
private $value;
private $temperatureUnit;

public function __construct($value,$temperatureUnit){
$this->value=$value;
$this->temperatureUnit=$temperatureUnit;
$temperatureUnit->setTemperatureDegrees($this);
}


public function setTemperatureUnit($temperatureUnit){
$this->temperatureUnit=$temperatureUnit;
}

public function getValue(){
return $this->value;
}

public function setValue($value){
$this->value=$value;
}

public function __toString(){
return (string)$this->getValue();
}

public function add($addDegrees){
return $this->temperatureUnit->add($addDegrees);
}

public function addToSeft($addDegrees){
$this->temperatureUnit->addToSeft($addDegrees);
}
public function toCelsius(){
return $this->temperatureUnit->toCelsius();
}
public function toFahrenheit(){
return $this->temperatureUnit->toFahrenheit(); 
}
public function toKelvin(){
return $this->temperatureUnit->toKelvin(); 
}
}

class Celsius extends TemperatureDegrees{
public function __construct($value){
parent::__construct($value,new TemperatureUnitCelsius());
}
}

class Fahrenheit extends TemperatureDegrees{
public function __construct($value){
parent::__construct($value,new TemperatureUnitFahrenheit());
}
}
class Kelvin extends TemperatureDegrees{
public function __construct($value){
parent::__construct($value,new TemperatureUnitKelvin());
}
}


class TemperatureUnit{

public function setTemperatureDegrees($degrees){
$this->degrees=$degrees;
}

protected function getName(){
return substr(get_class($this),strpos(get_class($this),'Unit')+4);
}

public function add($addDegrees){
$class=$this->getName();
$method='to'.$this->getName();
return new $class($this->degrees->getValue()+$addDegrees->$method()->getValue());
}

public function addToSeft($addDegrees){
$class=$this->getName();
$method='to'.$this->getName();
$this->degrees->setValue(new $class($this->degrees->getValue()+$addDegrees->$method()->getValue()));
return $this->degrees;
}
}
class TemperatureUnitCelsius extends TemperatureUnit{

public function toCelsius(){
return $this->degrees;
}
public function toFahrenheit(){
return new Fahrenheit($this->degrees->getValue() * (9 / 5) + 32);
}
public function toKelvin(){
return new Kelvin($this->degrees->getValue() + 273.15);
}
}

class TemperatureUnitFahrenheit	 extends TemperatureUnit{	
public function toCelsius(){
return new Celsius(($this->degrees->getValue() -32) * 5/9); 
}
public function toFahrenheit(){
return new Fahrenheit($this->degrees->getValue());
}
public function toKelvin(){
return new Kelvin(($this->degrees->getValue() + 459.67) * 5/9);
}

}

class TemperatureUnitKelvin	 extends TemperatureUnit{	
public function toCelsius(){
return new Celsius($this->degrees->getValue() - 273.15);
}
public function toFahrenheit(){
return new Fahrenheit($this->degrees->getValue() * (9/5) - 459.67);
}
public function toKelvin(){
return new Kelvin($this->degrees->getValue());
}

}
$celsius=new Celsius(-150);
echo $celsius . 'C<br/>';
echo $celsius->toFahrenheit(). 'F<br/>';
echo $celsius->toKelvin() . 'K<br/>';
echo '<br/>';
$fahrenheit=new Fahrenheit(458);
echo $fahrenheit . 'F<br/>';
echo $fahrenheit->toCelsius(). 'C<br/>';
echo $fahrenheit->toKelvin(). 'K<br/>';
echo '<br/>';
$kelvin=new Kelvin(9.15);
echo $kelvin .'K<br/>';
echo $kelvin->toCelsius(). 'C<br/>';
echo $kelvin->toFahrenheit().'F<br/>';

?>
