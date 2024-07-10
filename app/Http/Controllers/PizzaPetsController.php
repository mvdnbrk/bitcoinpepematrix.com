<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PizzaPetsController
{
    public function __invoke(): View
    {
        return view('pizza_pets');
    }
}
