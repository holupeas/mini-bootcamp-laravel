<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create(); // gunakan faker

        for ($i = 0; $i < 50; $i++) { // looping 50 data
            Mahasiswa::create([ // Eloquent create
                'nim' => $faker->unique()->numerify('##########'),
                'nama' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
