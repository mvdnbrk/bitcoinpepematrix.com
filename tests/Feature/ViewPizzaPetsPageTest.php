<?php

namespace Tests\Feature;

use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

class ViewPizzaPetsPageTest extends TestCase
{
    #[Test]
    public function a_request_to_the_pizza_pets_page_should_return_a_200_status_code(): void
    {
        $this->get('/pizza/pets')
            ->assertOk()
            ->assertViewIs('pizza_pets');
    }
}
