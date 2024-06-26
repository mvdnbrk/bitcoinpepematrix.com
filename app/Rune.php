<?php

namespace App;

class Rune
{
    public int $number = 0;
    public int $supply = 0;
    public int $decimal = 0;
    public int $premine = 0;
    public int $burned = 0;
    public string $symbol = '';
    public string $ticker = '';
    public string $etching_tx = '';

    public function __construct(array $attributes = [])
    {
        foreach ($attributes as $key => $value) {
            if (property_exists($this, $key)) {
                $this->{$key} = $value;
            }
        }
    }
}
