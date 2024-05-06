<?php

namespace Tests\Feature;

use Tests\TestCase;

class ViewHomepageTest extends TestCase
{
    public function test_a_request_to_the_homepage_should_return_a_200_status_code(): void
    {
        $this->get('/')->assertOk()->assertViewIs('welcome');
    }
}
