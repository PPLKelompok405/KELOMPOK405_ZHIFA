<?php

namespace Tests\Feature;

use Tests\TestCase;

class PageTest extends TestCase
{
    /**
     * Test halaman beranda dapat diakses.
     */
    public function test_homepage_can_be_accessed(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    /**
     * Test halaman login dapat diakses.
     */
    public function test_login_page_can_be_accessed(): void
    {
        $response = $this->get('/login');
        $response->assertStatus(200);
    }

    /**
     * Test halaman register dapat diakses.
     */
    public function test_register_page_can_be_accessed(): void
    {
        $response = $this->get('/register');
        $response->assertStatus(200);
    }
}