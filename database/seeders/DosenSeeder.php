<?php

namespace Database\Seeders;

use App\Models\Dosen;
use Illuminate\Database\Seeder;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 20; $i++) {
            Dosen::create([
                'nip' => $faker->unique()->numerify('################'),
                'nama' => $faker->name(),
                'email' => $faker->unique()->safeEmail(),
            ]);
        }
    }
}
