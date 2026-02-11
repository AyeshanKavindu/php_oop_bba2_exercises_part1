<?php

/**
 * INSTRUCTIONS:
 * Refactor the code below in a class called Statistics
 */
class Statistics
{
    private array $numbers;

    public function __construct(array $numbers)
    {
        $this->numbers = $numbers;
    }

    public function getSum(): float
    {
        $sum = 0;
        foreach ($this->numbers as $number) {
            $sum += $number;
        }
        return $sum;
    }

    public function getAverage(): float
    {
        if (count($this->numbers) === 0) {
            return 0;
        }

        return $this->getSum() / count($this->numbers);
    }

    public function getMin(): float
    {
        if (count($this->numbers) === 0) {
            return 0;
        }

        $min = $this->numbers[0];
        foreach ($this->numbers as $number) {
            if ($number < $min) {
                $min = $number;
            }
        }

        return $min;
    }

    public function getMax(): float
    {
        if (count($this->numbers) === 0) {
            return 0;
        }

        $max = $this->numbers[0];
        foreach ($this->numbers as $number) {
            if ($number > $max) {
                $max = $number;
            }
        }

        return $max;
    }

    public function getNumbers(): array
    {
        return $this->numbers;
    }
}

$numbers = [10, 5, 8, 20, 3, 15];
$stats = new Statistics($numbers);

echo "All numbers : " . implode(", ", $stats->getNumbers()) . "<br>";
echo "Sum: " . $stats->getSum() . "<br>";
echo "Average: " . $stats->getAverage() . "<br>";
echo "Min: " . $stats->getMin() . "<br>";
echo "Max: " . $stats->getMax() . "<br>";

