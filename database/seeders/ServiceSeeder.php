<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $attr = [
            [
                'slug' => 'web-developer',
                'name' => 'Web Developer',
            ],
            [
                'slug' => 'uiux-designer',
                'name' => 'UI/UX Designer',
            ],
            [
                'slug' => 'graphic-designer',
                'name' => 'Graphic Designer',
            ],
            [
                'slug' => 'mobile-developer',
                'name' => 'Mobile Developer',
            ],
            [
                'slug' => 'game-developer',
                'name' => 'Game Developer',
            ],
            [
                'slug' => 'videographer',
                'name' => 'Videographer',
            ],
            [
                'slug' => 'animator',
                'name' => 'Animator',
            ],
        ];

        Service::insert($attr);
    }
}
