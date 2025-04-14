<?php

namespace Database\Seeders;

use App\Models\Silder;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// class SliderSeeder extends Seeder
// {
//     /**
//      * Run the database seeds.
//      */
//     public function run(): void
//     {
//         //
//     }
// }
class SliderSeeder extends Seeder
{
    public function run(): void
    {
        Silder::insert([
            [
                'title' => 'Amazing Deals Await!',
                'subtitle' => 'Up to 50% off on selected items',
                'description' => 'Grab the best offers today. Limited time only!',
                'image' => 'slider.jpg',
                'link' => '/offers',
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Fresh Collection 2025',
                'subtitle' => 'Trendy fashion & accessories',
                'description' => 'Discover our brand-new arrivals to spice up your style.',
                'image' => 'slider.jpg',
                'link' => '/collection',
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Exclusive Launch',
                'subtitle' => 'Our latest tech just dropped',
                'description' => 'Be the first to explore innovative gadgets & gear.',
                'image' => 'slider.jpg',
                'link' => '/launch',
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}