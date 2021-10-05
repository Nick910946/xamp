<?php
 
class furniture
{
 
 public $name = "table";
 public $price = "Price = &nbsp; 700";
 public $size = "123x445";

function kk()
{

echo $this->size;

}



}

$obj = new furniture();
echo $obj->price;
echo "<br>";
$obj->kk();
echo "<br>";

echo $obj->name;


?>