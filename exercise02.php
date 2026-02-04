<?php

/**
 * INSTRUCTIONS:
 * Write a PHP class named Person with protected properties firstName, lastName, and age.
 * Add a constructor.
 * Add the getters and setters.
 * Implement a method displayInfo() to display the person's information.
 * Create a new object and display its information.
 */

class Person
{
    public function __construct(
        protected string $firstName,
        protected string $lastName,
        protected int $age
    ) {}
    public function getFirstName(): string
    {
        return $this->firstName;
    }   
    public function getLastName(): string
    {
        return $this->lastName;
    }
    public function getAge(): int
    {
        return $this->age;
    }
    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }
    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }
    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    public function displayInfo(): string
    {
        return "Name: {$this->firstName} {$this->lastName}, <br> Age: {$this->age}";
    }

}
$person = new Person("Ayeshan", "Kavindu", 26);
echo $person->displayInfo();

?>