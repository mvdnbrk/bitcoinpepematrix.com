<?php

namespace App;

use Illuminate\Support\Str;

class Rune
{
    public string $id;
    public int $number = 0;
    public int $supply = 0;
    public int $decimal = 0;
    public int $premine = 0;
    public int $burned = 0;
    public string $symbol = '';
    public string $ticker = '';
    public string $tickerWithoutSpacers = '';
    public int $etching_block = 0;
    public int $etching_transaction = 0;
    public string $etching_tx = '';

    public function __construct(array $attributes = [])
    {
        foreach ($attributes as $key => $value) {
            if (property_exists($this, $key)) {
                $this->{$key} = $value;
            }
        }

        $this->id = $this->etching_block . ':' . $this->etching_transaction;
        $this->tickerWithoutSpacers = Str::of($this->ticker)->remove('•');
    }
}
