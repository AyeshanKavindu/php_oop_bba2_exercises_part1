<?php

/**
 * INSTRUCTIONS:
 * Import the file from exercise2 to have access to the Person class.
 * Write a class named Employee that inherits from the Person class,
 * and adds the properties salary and position.
 * Override the constructor and call the parent constructor.
 * Override the displayInfo() method to display the salary and position.
 */

require_once 'exercise02.php';

class Employee extends Person
{
    public function __construct(
        string $firstName,
        string $lastName,
        protected int $age,
        protected float $salary,
        protected string $position
    ) {
        parent::__construct($firstName, $lastName, $age);
    }

    public function getSalary(): float
    {
        return $this->salary;
    }

    public function setSalary(float $salary): void
    {
        $this->salary = $salary;
    }

    public function getPosition(): string
    {
        return $this->position;
    }

    public function setPosition(string $position): void
    {
        $this->position = $position;
    }

    public function displayInfo(): string
    {
        return parent::displayInfo() . ", <br> Salary: $" . number_format($this->salary, 2) . ", Position: " . $this->position;
    }
}

$employee = new Employee("Ayeshan", "Kavindu", 26, 50000.00, "Software Engineer");
echo $employee->displayInfo();      