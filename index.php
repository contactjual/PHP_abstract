<?php

echo "Abstract classes and methods are when the parent class has a named method, but need its child class(es) to fill out the tasks. <br>";

abstract class car {
    public $name;

    public function __construct ($car_name) {
        $this->name = $car_name;
    }

    abstract public function message ();
}

class final_car extends car {
    public function message() {
        return "Thanks for buying $this->name car";
    }
}

$Toyota_company = new final_car("toyota");
echo $Toyota_company->message();


?>