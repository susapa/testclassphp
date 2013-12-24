<?php
$a = array('b'=>'bat','a'=>'ant','c'=>'cat');
print_r($a);
echo '<hr>';
$b =array('bat','cat','dog');
print_r ($b);
echo '<hr>';
$c =array('bat','cat','dog');
foreach ($c as $arr)
{
    echo $arr."<br>";
}
foreach ($a as $ar1=>$ar2)
{
    echo "Key = ".$ar1."Value = ".$ar2.'<br>';
}
foreach ($b as $key=>$val)
{
    echo "Key = ".$key."Value = ".$val.'<br>';
}

?>
