<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class CollectionSeeder extends Seeder
{
    /**
     * Seed the collections table with initial seasonal collections.
     */
    public function run(): void
    {
        $now = Carbon::now();

        DB::table('collections')->insert([
            [
                'name' => 'Réveillon 2025',
                'slug' => 'reveillon-2025',
                'description' => 'Coleção especial para a passagem de ano. Vestidos glamorosos, acessórios brilhantes e looks perfeitos para celebrar.',
                'year' => 2025,
                'season' => 'special',
                'launch_date' => '2024-12-01',
                'end_date' => '2025-01-15',
                'image_path' => null,
                'is_active' => true,
                'is_featured' => true,
                'display_order' => 1,
                'meta_title' => 'Coleção Réveillon 2025 - Teu Estilo',
                'meta_description' => 'Looks deslumbrantes para a passagem de ano. Vestidos, acessórios e muito brilho para celebrar 2025 com estilo.',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Dia dos Namorados 2025',
                'slug' => 'dia-dos-namorados-2025',
                'description' => 'Coleção romântica para o Dia dos Namorados. Peças em vermelho, rosa e tons apaixonantes.',
                'year' => 2025,
                'season' => 'special',
                'launch_date' => '2025-01-20',
                'end_date' => '2025-02-28',
                'image_path' => null,
                'is_active' => true,
                'is_featured' => true,
                'display_order' => 2,
                'meta_title' => 'Coleção Dia dos Namorados 2025 - Teu Estilo',
                'meta_description' => 'Peças românticas para o Dia dos Namorados. Vestidos, lingerie e acessórios para surpreender.',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Verão 2025',
                'slug' => 'verao-2025',
                'description' => 'Coleção de verão com peças leves, frescas e coloridas para os dias quentes.',
                'year' => 2025,
                'season' => 'spring_summer',
                'launch_date' => '2024-11-01',
                'end_date' => '2025-03-31',
                'image_path' => null,
                'is_active' => true,
                'is_featured' => false,
                'display_order' => 3,
                'meta_title' => 'Coleção Verão 2025 - Teu Estilo',
                'meta_description' => 'Moda de verão fresca e estilosa. Vestidos leves, shorts e peças perfeitas para o calor angolano.',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);

        $this->command->info('✅ Collections seeded: 3 collections (2 featured: Réveillon 2025, Dia dos Namorados 2025)');
    }
}
