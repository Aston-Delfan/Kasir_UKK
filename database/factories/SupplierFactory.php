<?php

namespace Database\Factories;

use App\Models\Supplier;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Supplier>
 */
class SupplierFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Supplier::class;

    public function definition(): array
    {
        return [
            'nama_perusahaan' => $this->faker->company,
            'nama_kontak'     => $this->faker->name,
            'nomor_telepon'   => $this->faker->phoneNumber,
            'email'           => $this->faker->unique()->safeEmail,
            'alamat'          => $this->faker->address,
        ];
    }
}
