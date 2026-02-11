<?php

/**
 * INSTRUCTIONS:
 * Create a class named Student that extends Person, with the following property:
 * - grades (an array of grades).
 * Add a getAverage() method that returns the average of the grades.
 * Implement getters and setters to manage the grades array.
 */
class Person
{
    private string $name;
    private int $age;

    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAge(): int
    {
        return $this->age;
    }
}

class Student extends Person
{
    private array $grades = [];

    public function addGrade(float $grade): void
    {
        $this->grades[] = $grade;
    }

    public function setGrades(array $grades): void
    {
        $this->grades = $grades;
    }

    public function getGrades(): array
    {
        return $this->grades;
    }

    public function getAverage(): float
    {
        if (count($this->grades) === 0) {
            return 0.0;
        }

        return array_sum($this->grades) / count($this->grades);
    }
}

$student = new Student("Ayeshan", 26);
$student->addGrade(85.5);
$student->addGrade(90.0);
echo "Student: " . $student->getName() . "<br>";
echo "Average Grade: " . $student->getAverage() . "<br>";

?>

