<?php
class Mojito {
    public float $alcoholRate = 0.15;
    public array $ingredients = ['rum', 'lime', 'sparkling water', 'mint', 'sugar'];
    public int $price = 8;

    public function __construct(float $alcoholRate = 0.15, array $ingredients = [], int $price = 8) {
        $this->alcoholRate = $alcoholRate;
        $this->ingredients = empty($ingredients) ? $this->ingredients : $ingredients;
        $this->price = $price;
    }

}
