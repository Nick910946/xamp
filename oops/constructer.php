<?php
 
 class student
 {
public $name ="&nbsp;tushar";
public function __construct()
{
 echo "start&nbsp;";
}
function kk(){
echo $this->name;
}

 function __destruct()
{
 echo "&nbsp;end";
// echo $this->name;
}



 }


$s = new student;
$s -> kk();

?>