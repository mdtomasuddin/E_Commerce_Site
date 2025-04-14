<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $testimonials = [
            [
                'name' => 'John Doe',
                'designation' => ' Doe',
                'image' => 'avatar.jpg',
                'review' => 'This service is absolutely amazing! Highly recommended.',
                'status' => 1,
            ],
            [
                'name' => 'Jane Smith',
                'designation' => 'designer',
                'image' => 'avatar.jpg',
                'review' => 'Great experience! Will definitely use again.',
                'status' => 1,
            ],
            [
                'name' => 'Mark Taylor',
                'designation' => 'engineer',
                'image' => null,
                'review' => 'Very professional and quick to respond.',
                'status' => 1,
            ],
            [
                'name' => 'Sara Ali',
                'designation' => 'manager',
                'image' => 'avatar.jpg',
                'review' => 'Not satisfied with the service. Needs improvement.',
                'status' => 0,
            ],
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::create($testimonial);
        }
    }
}