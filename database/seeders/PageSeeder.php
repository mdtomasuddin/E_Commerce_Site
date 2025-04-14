<?php

namespace Database\Seeders;

use App\Models\Page;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    public function run(): void
    {
        Page::insert([
            [
                'title' => 'About Us',
                'slug' => 'about-us',
                'description' => '<p>We are a dynamic company focused on innovation and user experience.</p>',
                'image' => 'about.jpg',
                'meta_title' => 'About Us - Company Info',
                'meta_description' => 'Learn more about our company, mission, and values.',
                'meta_keywords' => 'about, company, mission, values',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Privacy Policy',
                'slug' => 'privacy-policy',
                'description' => '<p>Your privacy is very important to us. We ensure your data is secure.</p>',
                'image' => 'privacy.jpg',
                'meta_title' => 'Privacy Policy',
                'meta_description' => 'Read our privacy practices and how we handle your data.',
                'meta_keywords' => 'privacy, policy, data protection',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Terms and Conditions',
                'slug' => 'terms-conditions',
                'description' => '<p>By using our website, you agree to these terms and conditions.</p>',
                'image' => 'terms.jpg',
                'meta_title' => 'Terms & Conditions',
                'meta_description' => 'Understand the rules for using our website and services.',
                'meta_keywords' => 'terms, conditions, rules, agreement',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Contact Us',
                'slug' => 'contact-us',
                'description' => '<p>Have any questions? Reach out to our support team anytime.</p>',
                'image' => 'contact.jpg',
                'meta_title' => 'Contact Us',
                'meta_description' => 'Get in touch with our team for inquiries or support.',
                'meta_keywords' => 'contact, support, help, email',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
