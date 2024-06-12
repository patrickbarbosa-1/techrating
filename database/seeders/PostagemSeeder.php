<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostagemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('postagens')->insert([
            'titulo' => 'Iphone 15 PRO MAX',
            'conteudo'=> 'Um celular muito sofisticado',
            'user_id' => 1,
            'categoria_id'=> 1,
        ]);

        DB::table('postagens')->insert([
            'titulo' => 'Smart TV Nano Cristal 65" LG 4K HDR 65NANO77SRA',
            'conteudo'=> 'Televisão de útilma geração',
            'user_id' => 1,
            'categoria_id'=> 2,
        ]);

        DB::table('postagens')->insert([
            'titulo' => 'Apple Macbook Pro M3 Pro 14,2" 18GB SSD 1TB Mac OS',
            'conteudo'=> 'Notebook de útilma geração',
            'user_id' => 1,
            'categoria_id'=> 3,
        ]);
    }
}
