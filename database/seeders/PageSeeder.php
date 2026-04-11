<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    public function run(): void
    {
        Page::updateOrCreate(
            ['slug' => 'home'],
            [
                'title_en' => 'Home',
                'title_es' => 'Inicio',

                'content_en' => '<h1>Welcome to Bachmann Floors</h1>',
                'content_es' => '<h1>Bienvenido a Bachmann Floors</h1>',

                'is_published' => 1,

                // If your table has these fields:
                'publish_start_at' => now(),
                'publish_end_at' => now()->addYears(10),
            ]
        );
    }
}
