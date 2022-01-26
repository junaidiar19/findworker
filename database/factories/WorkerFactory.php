<?php

namespace Database\Factories;

use App\Models\Experience;
use App\Models\Kota;
use App\Models\Provinsi;
use App\Models\Service;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class WorkerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'username' => $this->faker->word() . mt_rand(1, 300),
            'portofolio_link' => $this->faker->url(),
            'phone' => $this->faker->phoneNumber(),
            'provinsi_id' => Provinsi::all()->random()->id,
            'kota_id' => Kota::all()->random()->id,
            'about' => $this->faker->sentence(8),
            'experience' => Experience::all()->random()->name,
            'skills' => implode(',', $this->faker->words(4)),
            'salary_start' => mt_rand(1, 9) . '000000',
            'salary_end' => mt_rand(11, 50) . '000000',
            'service_id' => Service::all()->random()->id,
            'expertise' => Service::all()->random()->name,
            'status' => 'Active',
            'actived_at' => now(),
            'linkedin' => $this->faker->url(),
            'facebook' => $this->faker->url(),
            'twitter' => $this->faker->url(),
            'instagram' => $this->faker->url(),
        ];
    }
}
