<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class BrandSeeder extends Seeder
{
    /**
     * Seed the brands table with popular fashion brands.
     */
    public function run(): void
    {
        $now = Carbon::now();

        $brands = [
            [
                'name' => 'Zara',
                'country_origin' => 'Espanha',
                'description' => 'Marca espanhola de moda rápida com designs modernos e acessíveis.',
                'is_featured' => true,
                'display_order' => 1,
            ],
            [
                'name' => 'H&M',
                'country_origin' => 'Suécia',
                'description' => 'Moda acessível e sustentável para toda a família.',
                'is_featured' => true,
                'display_order' => 2,
            ],
            [
                'name' => 'SHEIN',
                'country_origin' => 'China',
                'description' => 'Moda online com preços imbatíveis e tendências atuais.',
                'is_featured' => true,
                'display_order' => 3,
            ],
            [
                'name' => 'Primark',
                'country_origin' => 'Irlanda',
                'description' => 'Moda e acessórios a preços baixos para toda a família.',
                'is_featured' => false,
                'display_order' => 4,
            ],
            [
                'name' => 'Louis Vuitton',
                'country_origin' => 'França',
                'description' => 'Marca de luxo francesa conhecida por malas, acessórios e prêt-à-porter.',
                'is_featured' => true,
                'display_order' => 5,
            ],
            [
                'name' => 'Chanel',
                'country_origin' => 'França',
                'description' => 'Casa de moda de luxo francesa fundada por Coco Chanel.',
                'is_featured' => true,
                'display_order' => 6,
            ],
            [
                'name' => 'Gucci',
                'country_origin' => 'Itália',
                'description' => 'Marca italiana de luxo com designs ousados e icónicos.',
                'is_featured' => false,
                'display_order' => 7,
            ],
            [
                'name' => 'Nike',
                'country_origin' => 'Estados Unidos',
                'description' => 'Líder mundial em calçado e vestuário desportivo.',
                'is_featured' => false,
                'display_order' => 8,
            ],
            [
                'name' => 'Adidas',
                'country_origin' => 'Alemanha',
                'description' => 'Marca alemã de artigos desportivos e lifestyle.',
                'is_featured' => false,
                'display_order' => 9,
            ],
            [
                'name' => 'Mango',
                'country_origin' => 'Espanha',
                'description' => 'Moda mediterrânica com estilo sofisticado e contemporâneo.',
                'is_featured' => false,
                'display_order' => 10,
            ],
            [
                'name' => 'Bershka',
                'country_origin' => 'Espanha',
                'description' => 'Moda jovem e urbana do grupo Inditex.',
                'is_featured' => false,
                'display_order' => 11,
            ],
            [
                'name' => 'Pull&Bear',
                'country_origin' => 'Espanha',
                'description' => 'Estilo casual e descontraído para jovens.',
                'is_featured' => false,
                'display_order' => 12,
            ],
            [
                'name' => 'Sem Marca',
                'country_origin' => null,
                'description' => 'Produtos sem marca específica ou marca própria Teu Estilo.',
                'is_featured' => false,
                'display_order' => 99,
            ],
        ];

        foreach ($brands as $brand) {
            DB::table('brands')->insert([
                'name' => $brand['name'],
                'slug' => Str::slug($brand['name']),
                'description' => $brand['description'],
                'logo_path' => null,
                'banner_path' => null,
                'country_origin' => $brand['country_origin'],
                'is_active' => true,
                'is_featured' => $brand['is_featured'],
                'display_order' => $brand['display_order'],
                'meta_title' => $brand['name'] . ' - Teu Estilo',
                'meta_description' => $brand['description'],
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }

        $this->command->info('✅ Brands seeded: 13 brands (6 featured: Zara, H&M, SHEIN, Louis Vuitton, Chanel, Gucci)');
    }
}
