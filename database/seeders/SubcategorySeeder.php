<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SubcategorySeeder extends Seeder
{
    /**
     * Seed the subcategories table.
     *
     * Subcategories are specific to each segment + category combination.
     * Initial launch includes only:
     * - Mulher (Women) + Roupas (Clothes): Vestidos, Blusas, Tops, Casacos, Blazers, Calças, Calções, Saias
     * - Mulher (Women) + Extra: Perucas (Wigs)
     *
     * IMPORTANT: category_id and segment_id must match existing records:
     * - Segments: 1=Mulher, 2=Homem, 3=Criança, 4=Blog, 5=Sobre
     * - Categories: 1=Roupas, 2=Calçados, 3=Acessórios, 4=Cosméticos, 5=Extra
     */
    public function run(): void
    {
        $now = Carbon::now();

        DB::table('subcategories')->insert([
            // ========================================
            // CATEGORY: ROUPAS (id=1) | SEGMENT: MULHER (id=1)
            // ========================================

            // DRESSES
            [
                'category_id' => 1,
                'segment_id' => 1,
                'name' => 'Vestidos',
                'slug' => 'vestidos',
                'description' => 'Vestidos elegantes para todas as ocasiões. Do casual ao formal, encontre o modelo perfeito.',
                'image_path' => null,
                'is_active' => true,
                'display_order' => 1,
                'meta_title' => 'Vestidos Femininos - Teu Estilo',
                'meta_description' => 'Vestidos elegantes, casuais e formais. Encontre o vestido perfeito para cada ocasião.',
                'created_at' => $now,
                'updated_at' => $now,
            ],

            // UPPER BODY - Blouses
            [
                'category_id' => 1,
                'segment_id' => 1,
                'name' => 'Blusas',
                'slug' => 'blusas',
                'description' => 'Blusas modernas e elegantes para o dia a dia e ocasiões especiais.',
                'image_path' => null,
                'is_active' => true,
                'display_order' => 2,
                'meta_title' => 'Blusas Femininas - Teu Estilo',
                'meta_description' => 'Blusas modernas, elegantes e confortáveis. Variedade de estilos para todos os gostos.',
                'created_at' => $now,
                'updated_at' => $now,
            ],

            // UPPER BODY - Tops
            [
                'category_id' => 1,
                'segment_id' => 1,
                'name' => 'Tops',
                'slug' => 'tops',
                'description' => 'Tops estilosos e versáteis. Perfeitos para looks casuais e modernos.',
                'image_path' => null,
                'is_active' => true,
                'display_order' => 3,
                'meta_title' => 'Tops Femininos - Teu Estilo',
                'meta_description' => 'Tops modernos e estilosos. Cropped, regatas e muito mais para seu guarda-roupa.',
                'created_at' => $now,
                'updated_at' => $now,
            ],

            // UPPER BODY - Coats/Jackets
            [
                'category_id' => 1,
                'segment_id' => 1,
                'name' => 'Casacos',
                'slug' => 'casacos',
                'description' => 'Casacos e jaquetas para os dias mais frescos. Estilo e proteção.',
                'image_path' => null,
                'is_active' => true,
                'display_order' => 4,
                'meta_title' => 'Casacos Femininos - Teu Estilo',
                'meta_description' => 'Casacos elegantes e jaquetas modernas. Proteção com estilo para todas as estações.',
                'created_at' => $now,
                'updated_at' => $now,
            ],

            // UPPER BODY - Blazers
            [
                'category_id' => 1,
                'segment_id' => 1,
                'name' => 'Blazers',
                'slug' => 'blazers',
                'description' => 'Blazers sofisticados para um look profissional e elegante.',
                'image_path' => null,
                'is_active' => true,
                'display_order' => 5,
                'meta_title' => 'Blazers Femininos - Teu Estilo',
                'meta_description' => 'Blazers elegantes e sofisticados. Perfeitos para o trabalho e ocasiões formais.',
                'created_at' => $now,
                'updated_at' => $now,
            ],

            // LOWER BODY - Pants/Trousers
            [
                'category_id' => 1,
                'segment_id' => 1,
                'name' => 'Calças',
                'slug' => 'calcas',
                'description' => 'Calças versáteis para todas as ocasiões. Do jeans ao social.',
                'image_path' => null,
                'is_active' => true,
                'display_order' => 6,
                'meta_title' => 'Calças Femininas - Teu Estilo',
                'meta_description' => 'Calças femininas versáteis. Jeans, sociais, leggings e muito mais.',
                'created_at' => $now,
                'updated_at' => $now,
            ],

            // LOWER BODY - Shorts
            [
                'category_id' => 1,
                'segment_id' => 1,
                'name' => 'Calções',
                'slug' => 'calcoes',
                'description' => 'Calções confortáveis para os dias quentes. Estilo e frescura.',
                'image_path' => null,
                'is_active' => true,
                'display_order' => 7,
                'meta_title' => 'Calções Femininos - Teu Estilo',
                'meta_description' => 'Calções femininos estilosos e confortáveis. Perfeitos para o verão angolano.',
                'created_at' => $now,
                'updated_at' => $now,
            ],

            // LOWER BODY - Skirts
            [
                'category_id' => 1,
                'segment_id' => 1,
                'name' => 'Saias',
                'slug' => 'saias',
                'description' => 'Saias elegantes em diversos comprimentos e estilos. Feminilidade em cada peça.',
                'image_path' => null,
                'is_active' => true,
                'display_order' => 8,
                'meta_title' => 'Saias Femininas - Teu Estilo',
                'meta_description' => 'Saias femininas elegantes. Mini, midi e longas para todos os estilos.',
                'created_at' => $now,
                'updated_at' => $now,
            ],

            // ========================================
            // CATEGORY: EXTRA (id=5) | SEGMENT: MULHER (id=1)
            // ========================================

            // WIGS
            [
                'category_id' => 5,
                'segment_id' => 1,
                'name' => 'Perucas',
                'slug' => 'perucas',
                'description' => 'Perucas de qualidade premium. Cabelo natural e sintético em diversos estilos e texturas.',
                'image_path' => null,
                'is_active' => true,
                'display_order' => 1,
                'meta_title' => 'Perucas de Qualidade - Teu Estilo',
                'meta_description' => 'Perucas naturais e sintéticas. Lace front, full lace e diversos estilos. Qualidade garantida.',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);

        $this->command->info('✅ Subcategories seeded: 9 total for initial launch');
        $this->command->info('   📁 Mulher > Roupas: Vestidos, Blusas, Tops, Casacos, Blazers, Calças, Calções, Saias');
        $this->command->info('   📁 Mulher > Extra: Perucas');
    }
}
