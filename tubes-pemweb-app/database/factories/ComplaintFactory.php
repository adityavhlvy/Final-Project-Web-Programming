<?php

namespace Database\Factories;

use App\Models\Complaint;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Complaint>
 */
class ComplaintFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Complaint::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nik' => $this->faker->unique()->numerify('##########'),
            'category' => $this->faker->randomElement(['infrastruktur_fasilitas_umum', 'pelayanan_publik', 'keamanan_ketertiban']),
            'description' => $this->faker->sentence,
            'address' => $this->faker->address,
            'file' => null, // You can modify this based on your needs
            'status' => $this->faker->randomElement(['pending', 'approved', 'rejected']),
            'progress' => $this->faker->randomElement(['on-progress', 'finished']),
        ];
    }
}
