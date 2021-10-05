<?php
class country
{
public $name = "India";

}
class player extends country
{

public $name1 = "Ankur";
}
class state extends player
{

public $state ="MP";

public function player()
{
 echo $this->name.$this->name1.$this->state;

}
}

$obj = new state();
echo $obj->player();
?>