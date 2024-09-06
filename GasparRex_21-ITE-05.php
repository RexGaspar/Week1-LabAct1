<?php

// Define the Person class
class Person {
    public $firstName;
    public $lastName;
    private $age;

    // Constructor method
    public function __construct($firstName, $lastName, $age) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
    }

    // Method to get full name
    public function getFullName() {
        return $this->firstName . ' ' . $this->lastName;
    }

    // Method to set the age
    public function setAge($age) {
        $this->age = $age;
    }

    // Method to get the age
    public function getAge() {
        return $this->age;
    }
}

// Define the Car class
class Car {
    public $make;
    public $model;
    protected $year;

    // Constructor method
    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    // Method to get car information
    public function getCarInfo() {
        return $this->make . ' ' . $this->model . ' (' . $this->year . ')';
    }
}

// Instantiate a Person object
$person = new Person('Rex', 'Gaspar', 19);

// Display Person information
echo "Full Name: " . $person->getFullName() . "<br>";
echo "Age: " . $person->getAge() . "<br>";

// Update the age
$person->setAge(20);
echo "Updated Age: " . $person->getAge() . "<br>";

// Instantiate a Car object
$car = new Car('Toyota', 'Camry', 2020);

// Display Car information
echo "Car Info: " . $car->getCarInfo();

?>