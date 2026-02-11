<?php

/**
 * INSTRUCTIONS:
 * Write a PHP class named ShoppingCart with the following properties:
 * - items (as an array)
 * - total
 * Implement a method to add items to the cart (each item will be in an array with name and price).
 * Implement a method to display all items.
 * Implement a method to calculate the total cost.
 */
class ShoppingCart
{
    private array $items = [];
    private float $total = 0.0;

    public function addItem(string $name, float $price): void
    {
        $this->items[] = ['name' => $name, 'price' => $price];
        $this->total += $price;
    }

    public function displayItems(): void
    {
        echo "Items in the cart:<br>";
        foreach ($this->items as $item) {
            echo "- " . $item['name'] . ": $" . number_format($item['price'], 2) . "<br>";
        }
    }

    public function calculateTotal(): float
    {
        return $this->total;
    }
}


$cart = new ShoppingCart();

$cart->addItem("Iphone", 1200.00);
$cart->addItem("AirPosds", 180.00);

$cart->displayItems();

echo "Total: $" . $cart->calculateTotal();

?>