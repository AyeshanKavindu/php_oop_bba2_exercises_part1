<?php
/*
 * INSTRUCTIONS:
 * Create a Game class with the following protected properties:
 * - name
 * - editor
 * - price
 * Add the getters and setters for each property.
 * Below the class, instantiate a Game and display its information.
*/
class Game {
    public function __construct(
     public string $name,
     public string $editor,
     public float $price,
     )
    {
    }
     public function getName(): string
    {
        return $this->name;
    }
     public function getEditor(): string
    {
        return $this->editor;
    }
     public function getPrice(): float
    {
        return $this->price;
    }
     public function setName(string $name): void
    {
        $this->name = $name;
    }
     public function setEditor(string $editor): void
    {
        $this->editor = $editor;
    }
     public function setPrice(float $price): void
    {
        $this->price = $price;
}
     
}
$game = new Game("Call of duty", "Activision", 59.99);     

echo "Game Name: " . $game->getName() . "<br>";
echo "Editor: " . $game->getEditor() . "<br>";
echo "Price: $" . $game->getPrice() . "<br>";    