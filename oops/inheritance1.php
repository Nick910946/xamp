<?php
class faimly
{
public $name = "Faimly:-&nbsp;&nbsp; Verma's faimly<br> <br>";

}
class grandfather extends faimly
{

public $gfaname = "Grand father :-&nbsp;&nbsp;Ankur&nbsp;Verma<br><br>";
}
class father extends grandfather
{

public $fname ="Father:-&nbsp;&nbsp;Akash&nbsp;Verma<br><br>";
}
class me extends father
{
 
 public $name1 = "My name:-&nbsp;&nbsp;Ankita&nbsp;Verma";



    public function members()
    {
     echo $this->name.$this->gfaname.$this->fname.$this->name1;

    }
}

$obj = new me();
echo $obj->members();
?>