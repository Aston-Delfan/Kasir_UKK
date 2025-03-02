<?php

namespace Database\Factories;

use App\Models\Produk;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produk>
 */
class ProdukFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Produk::class;
    public function definition(): array
    {
        return [
            'kode'         => $this->faker->unique()->numerify('PRD-####'),
            'nama_produk'  => $this->faker->word,
            'kategori'     => $this->faker->optional()->word, // Bisa bernilai null
            'stok'         => $this->faker->numberBetween(0, 100),
            'harga'        => $this->faker->randomFloat(2, 10000, 100000), // harga antara 10.000 hingga 100.000 dengan 2 digit desimal
        ];
    }
}
