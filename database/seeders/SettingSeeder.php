<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            ['key' => 'site_name', 'value' => 'My Website'],
            ['key' => 'site_tagline', 'value' => 'Your trusted platform'],
            ['key' => 'site_description', 'value' => 'This is my awesome website.'],
            ['key' => 'site_logo', 'value' => null],
            ['key' => 'site_favicon', 'value' => null],

            ['key' => 'contact_phone', 'value' => '+880123456789'],
            ['key' => 'contact_fax', 'value' => '+880123456789'],
            ['key' => 'contact_email', 'value' => 'info@example.com'],
            ['key' => 'contact_address', 'value' => 'Dhaka, Bangladesh'],
            ['key' => 'google_map_embed', 'value' => null],

            ['key' => 'whatsapp_number', 'value' => null],
            ['key' => 'facebook_url', 'value' => null],
            ['key' => 'instagram_url', 'value' => null],
            ['key' => 'twitter_url', 'value' => null],
            ['key' => 'linkedin_url', 'value' => null],

            ['key' => 'seo_title', 'value' => 'My Website'],
            ['key' => 'seo_description', 'value' => 'Best platform for your needs'],
            ['key' => 'seo_keywords', 'value' => 'website, platform, laravel'],
            ['key' => 'og_image', 'value' => null],

            ['key' => 'maintenance_mode', 'value' => 'false'],
        ];

        DB::table('settings')->insert($settings);
    }
}
