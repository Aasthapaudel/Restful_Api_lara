<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Device;

class DeviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();

        // Create dummy data for devices table
        for ($i = 0; $i < 5; $i++) {
            Device::create([
                'name' => $faker->word,
            ]);
    }
}
}
