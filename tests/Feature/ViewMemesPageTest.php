<?php

namespace Tests\Feature;

use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

class ViewMemesPageTest extends TestCase
{
    #[Test]
    public function a_request_to_the_memes_page_should_return_a_200_status_code(): void
    {
        $this->get('/memes')
            ->assertOk()
            ->assertViewIs('memes')
            ->assertSee('MEMES');
    }
}
