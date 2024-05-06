<?php

namespace Tests\Feature;

use Tests\TestCase;

class ViewMemesPageTest extends TestCase
{
    public function test_a_request_to_the_memes_page_should_return_a_200_status_code(): void
    {
        $this->get('/memes')
            ->assertOk()
            ->assertViewIs('memes')
            ->assertSee('MEMES');
    }
}
