<?php

namespace Tests\Feature;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * Test that the homepage loads successfully with coffee shop brand and features.
     */
    public function test_the_coffee_shop_homepage_loads_successfully(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Ngopi Sama Kamu');
        $response->assertSee('Ruang tenang untuk cerita');
        $response->assertSee('Kopi Susu Kamu');
        $response->assertSee('Pilihan Menu');
        $response->assertSee('Lokasi & Jam', false);
        $response->assertSee('WITA');
        $response->assertSee('instagram.com/ngopisamakamu');
        $response->assertSee('property="og:title"', false);
    }

    /**
     * Test that the custom 404 error page renders properly.
     */
    public function test_custom_404_page_loads_successfully(): void
    {
        $response = $this->get('/halaman-yang-tidak-ada-12345');

        $response->assertStatus(404);
        $response->assertSee('Cangkir kopinya belum tersedia');
        $response->assertSee('Kembali ke Beranda');
    }
}
