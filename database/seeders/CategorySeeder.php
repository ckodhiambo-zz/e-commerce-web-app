<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::firstOrCreate([
            'name' => 'Phones',
            'slug' => 'phone',
        ]);

        Category::firstOrCreate([
            'name' => 'Laptops',
            'slug' => 'laptop',
        ]);

        Category::firstOrCreate([
            'name' => 'Tablets',
            'slug' => 'tablet',
        ]);

        Category::firstOrCreate([
            'name' => 'Desktops',
            'slug' => 'desktop',
        ]);

        Category::firstOrCreate([
            'name' => 'Monitors',
            'slug' => 'monitor',
        ]);

        Category::firstOrCreate([
            'name' => 'Printers',
            'slug' => 'printer',
        ]);

        Category::firstOrCreate([
            'name' => 'Accessories',
            'slug' => 'accessory',
        ]);

        Category::firstOrCreate([
            'name' => 'Software',
            'slug' => 'software',
        ]);

        Category::firstOrCreate([
            'name' => 'Networking',
            'slug' => 'networking',
        ]);

        Category::firstOrCreate([
            'name' => 'Storage',
            'slug' => 'storage',
        ]);

        Category::firstOrCreate([
            'name' => 'Components',
            'slug' => 'component',
        ]);

        Category::firstOrCreate([
            'name' => 'Peripherals',
            'slug' => 'peripheral',
        ]);

        Category::firstOrCreate([
            'name' => 'Gaming',
            'slug' => 'gaming',
        ]);

        Category::firstOrCreate([
            'name' => 'Office',
            'slug' => 'office',
        ]);

        Category::firstOrCreate([
            'name' => 'Audio',
            'slug' => 'audio',
        ]);

        Category::firstOrCreate([
            'name' => 'Video',
            'slug' => 'video',
        ]);

        Category::firstOrCreate([
            'name' => 'TVs',
            'slug' => 'tv',
        ]);

        Category::firstOrCreate([
            'name' => 'Cameras',
            'slug' => 'camera',
        ]);

        Category::firstOrCreate([
            'name' => 'Drones',
            'slug' => 'drone',
        ]);

        Category::firstOrCreate([
            'name' => 'Wearables',
            'slug' => 'wearable',
        ]);

        Category::firstOrCreate([
            'name' => 'Smart Home',
            'slug' => 'smart-home',
        ]);

        Category::firstOrCreate([
            'name' => 'Car Electronics',
            'slug' => 'car-electronics',
        ]);

        Category::firstOrCreate([
            'name' => 'GPS',
            'slug' => 'gps',
        ]);

        Category::firstOrCreate([
            'name' => 'Security',
            'slug' => 'security',
        ]);

        Category::firstOrCreate([
            'name' => 'Smartwatches',
            'slug' => 'smartwatch',
        ]);

        Category::firstOrCreate([
            'name' => 'Fitness',
            'slug' => 'fitness',
        ]);

        Category::firstOrCreate([
            'name' => 'Headphones',
            'slug' => 'headphone',
        ]);

        Category::firstOrCreate([
            'name' => 'Speakers',
            'slug' => 'speaker',
        ]);

        Category::firstOrCreate([
            'name' => 'Home Theater',
            'slug' => 'home-theater',
        ]);

        Category::firstOrCreate([
            'name' => 'Projectors',
            'slug' => 'projector',
        ]);

        Category::firstOrCreate([
            'name' => 'Streaming Media Players',
            'slug' => 'streaming-media-player',
        ]);

        Category::firstOrCreate([
            'name' => 'Smart Speakers',
            'slug' => 'smart-speaker',
        ]);

        Category::firstOrCreate([
            'name' => 'Smart Home Hubs',
            'slug' => 'smart-home-hub',
        ]);

        Category::firstOrCreate([
            'name' => 'Smart Home Sensors',
            'slug' => 'smart-home-sensor',
        ]);

        Category::firstOrCreate([
            'name' => 'Smart Home Security Systems',
            'slug' => 'smart-home-security-system',
        ]);

        Category::firstOrCreate([
            'name' => 'Smart Home Lighting',
            'slug' => 'smart-home-lighting',
        ]);
    }
}
