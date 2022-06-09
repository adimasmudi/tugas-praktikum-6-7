<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mahasiswa>
 */
class MahasiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'NRP' => '200411100160',
            'nama' => 'Masmudi',
            'email' => 'adimasmudi@gmail.com',
            'alamat' => 'Bangkalan'
        ];
    }
}
