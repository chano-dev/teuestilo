<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CategorySeeder extends Seeder
{
    /**
     * Seed the categories table.
     *
     * Categories are universal (not tied to segments).
     * Initially only 'Roupas' (Clothes) and 'Extra' (Services/Wigs) are active.
     * Other categories will be activated as inventory grows.
     */
    public function run(): void
    {
        $now = Carbon::now();

        DB::table('categories')->insert([
            [
                'name' => 'Roupas',
                'slug' => 'roupas',
                'description' => 'Vestidos, blusas, calças, saias e muito mais. Encontre o estilo perfeito para você.',
                'icon' => 'fa-solid fa-shirt',
                'image_path' => null,
                'is_active' => true,
                'display_order' => 1,
                'meta_title' => 'Roupas Femininas - Teu Estilo | Vestidos, Blusas e Calças',
                'meta_description' => 'Explore nossa coleção de roupas femininas. Vestidos elegantes, blusas modernas, calças versáteis e muito mais.',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Calçados',
                'slug' => 'calcados',
                'description' => 'Saltos, sandálias, sabrinas, chinelos e botas. Conforto e estilo para seus pés.',
                'icon' => 'fa-solid fa-shoe-prints',
                'image_path' => null,
                'is_active' => false,
                'display_order' => 2,
                'meta_title' => 'Calçados Femininos - Teu Estilo | Saltos, Sandálias e Sabrinas',
                'meta_description' => 'Descubra nossa coleção de calçados femininos. Saltos elegantes, sandálias confortáveis e muito mais.',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Acessórios',
                'slug' => 'acessorios',
                'description' => 'Pulseiras, colares, brincos, relógios, óculos e malas. Complete seu look com estilo.',
                'icon' => 'fa-solid fa-gem',
                'image_path' => null,
                'is_active' => false,
                'display_order' => 3,
                'meta_title' => 'Acessórios Femininos - Teu Estilo | Joias e Complementos',
                'meta_description' => 'Acessórios que fazem a diferença. Pulseiras, colares, brincos, relógios e muito mais.',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Cosméticos',
                'slug' => 'cosmeticos',
                'description' => 'Perfumes, maquilhagem, produtos capilares e cuidados com a pele. Beleza e bem-estar.',
                'icon' => 'fa-solid fa-spray-can',
                'image_path' => null,
                'is_active' => false,
                'display_order' => 4,
                'meta_title' => 'Cosméticos - Teu Estilo | Perfumes e Produtos de Beleza',
                'meta_description' => 'Perfumes exclusivos, maquilhagem de qualidade e produtos para cuidados capilares e corporais.',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Extra',
                'slug' => 'extra',
                'description' => 'Serviços especiais: aluguer de vestidos, costura, alfaiataria, perucas e consultoria de estilo.',
                'icon' => 'fa-solid fa-star',
                'image_path' => null,
                'is_active' => true,
                'display_order' => 5,
                'meta_title' => 'Serviços Especiais - Teu Estilo | Aluguer, Costura e Perucas',
                'meta_description' => 'Serviços premium: aluguer de vestidos para eventos, costura personalizada, perucas de qualidade e consultoria de estilo.',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);

        $this->command->info('✅ Categories seeded: 5 total (2 active: Roupas, Extra)');
    }
}
