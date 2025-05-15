<?php

namespace Tests\Feature;

use App\Models\Produk;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProdukTest extends TestCase
{
    use RefreshDatabase;

    public function test_halaman_produk_dapat_diakses()
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user)->get('/produk');
        $response->assertStatus(200);
        $response->assertViewIs('produk.index');
    }

    public function test_produk_bisa_disimpan()
    {
        $user = User::factory()->create();

        $data = [
            'nama' => 'Produk Test',
            'stok' => 10,
            'harga' => 50000,
        ];

        $response = $this->actingAs($user)->post('/produk', $data);
        $response->assertRedirect('/produk');
        $this->assertDatabaseHas('produks', $data);
    }
}
