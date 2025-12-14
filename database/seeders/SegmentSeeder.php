<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SegmentSeeder extends Seeder
{
    /**
     * Seed the segments table.
     *
     * Segments are the main sections of the website.
     * Initially only 'Mulher' (Women) and 'Sobre' (About) are active.
     * Other segments (Homem, Criança, Blog) will be activated in future phases.
     */
    public function run(): void
    {
        $now = Carbon::now();

        DB::table('segments')->insert([
            [
                'name' => 'Mulher',
                'slug' => 'mulher',
                'description' => 'Moda feminina com estilo e elegância. Roupas, calçados, acessórios, cosméticos e serviços especiais.',
                'icon' => 'fa-solid fa-venus',
                'is_active' => true,
                'display_order' => 1,
                'meta_title' => 'Moda Feminina - Teu Estilo | Roupas, Calçados e Acessórios',
                'meta_description' => 'Descubra as últimas tendências em moda feminina. Vestidos, calças, blusas, calçados e acessórios com estilo único. Entrega em Luanda.',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Homem',
                'slug' => 'homem',
                'description' => 'Moda masculina com elegância e qualidade. Roupas, calçados e acessórios para o homem moderno.',
                'icon' => 'fa-solid fa-mars',
                'is_active' => false,
                'display_order' => 2,
                'meta_title' => 'Moda Masculina - Teu Estilo | Roupa e Calçado para Homem',
                'meta_description' => 'Estilo e elegância masculina. Camisas, calças, sapatos e acessórios de qualidade para o homem moderno.',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Criança',
                'slug' => 'crianca',
                'description' => 'Moda infantil com conforto e estilo. Roupas, calçados e acessórios para os mais pequenos.',
                'icon' => 'fa-solid fa-child',
                'is_active' => false,
                'display_order' => 3,
                'meta_title' => 'Moda Infantil - Teu Estilo | Roupas para Crianças',
                'meta_description' => 'Roupas confortáveis e estilosas para os mais pequenos. Moda infantil com qualidade e preços acessíveis.',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Blog',
                'slug' => 'blog',
                'description' => 'Novidades, dicas de moda e tendências. Fique por dentro do mundo fashion.',
                'icon' => 'fa-solid fa-newspaper',
                'is_active' => false,
                'display_order' => 4,
                'meta_title' => 'Blog - Teu Estilo | Dicas de Moda e Tendências',
                'meta_description' => 'Fique por dentro das últimas tendências de moda, dicas de estilo e novidades do mundo fashion.',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Sobre',
                'slug' => 'sobre',
                'description' => 'Conheça a história da Teu Estilo, nossa missão e valores. Moda angolana com qualidade internacional.',
                'icon' => 'fa-solid fa-info-circle',
                'is_active' => true,
                'display_order' => 5,
                'meta_title' => 'Sobre Nós - Teu Estilo | A Nossa História',
                'meta_description' => 'Conheça a história da Teu Estilo, a nossa missão e valores. Moda angolana com qualidade internacional.',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);

        $this->command->info('✅ Segments seeded: 5 total (2 active: Mulher, Sobre)');
    }
}
