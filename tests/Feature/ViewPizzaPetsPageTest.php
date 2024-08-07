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

    #[Test]
    public function the_correct_title_is_seen_on_the_pizza_pets_page()
    {
        $this->get('/pizza/pets')
            ->assertSee(
                '<title>BITCOIN•PEPE•MATRIX x Pizza Pets</title>',
                escape: false
            );
    }

    #[Test]
    public function the_meta_tag_with_the_correct_description_is_seen()
    {
        $this->get('/pizza/pets')
            ->assertSee(
                'meta name="description" content="We are thrilled to announce a collaboration with Pizza Ninjas and Mega Punks on their upcoming Pizza Pets airdrop."',
                escape: false
            );
    }
}
