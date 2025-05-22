<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PalindromFeatureTest extends TestCase
{
    /** @test */
    public function palindrom_form_can_be_accessed()
    {
        $response = $this->get('/palindrom');
        $response->assertStatus(200);
        $response->assertSee('Cek Palindrom');
    }

    /** @test */
    public function palindrom_check_returns_true_for_palindrom()
    {
        $response = $this->post('/palindrom', ['input_text' => 'katak']);
        $response->assertStatus(200);
        $response->assertSee('Palindrom');
        $response->assertViewHas('isPalindrom', true); // Tambahan agar lebih kuat validasinya
    }

    /** @test */
    public function palindrom_check_returns_false_for_non_palindrom()
    {
        $response = $this->post('/palindrom', ['input_text' => 'mobil']);
        $response->assertStatus(200);
        $response->assertSee('Bukan Palindrom');
        $response->assertViewHas('isPalindrom', false);
    }

    /** @test */
    public function palindrom_form_validation_shows_error_for_empty_input()
    {
        $response = $this->from('/palindrom')->post('/palindrom', ['input_text' => '']);
        $response->assertRedirect('/palindrom');
        $response->assertSessionHasErrors('input_text');
    }
}