<?php
class Person{
    public $name;
    public $age;
    public function __construct($name,$age){
        $this->name=$name;
        $this->age=$age;
    }
    public function greet(){
        echo "Bonjour, je suis " . $this->name . " et j'ai " . $this->age . " ans.";

    }
}
$person=new Person("Ikram",22);
$person->greet();
?>