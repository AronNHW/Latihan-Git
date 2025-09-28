<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\News;
use Faker\Factory as Faker;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        // Featured News (1 item)
        News::create([
            'title' => 'HMTI Sukses Gelar Workshop Pengenalan Artificial Intelligence',
            'content' => $faker->paragraphs(3, true),
            'image' => null, // Placeholder for now
            'is_featured' => true,
        ]);

        // Sidebar News (3 items)
        for ($i = 0; $i < 3; $i++) {
            News::create([
                'title' => 'Berita Sidebar ' . ($i + 1) . ': ' . $faker->sentence(5),
                'content' => $faker->paragraphs(2, true),
                'image' => null, // Placeholder for now
                'is_featured' => false,
            ]);
        }

        // General News (10 items)
        for ($i = 0; $i < 10; $i++) {
            News::create([
                'title' => 'Berita Umum ' . ($i + 1) . ': ' . $faker->sentence(7),
                'content' => $faker->paragraphs(4, true),
                'image' => null, // Placeholder for now
                'is_featured' => false,
            ]);
        }
    }
}
