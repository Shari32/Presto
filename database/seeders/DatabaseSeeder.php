<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['Elettronica', 'Giochi', 'Abbigliamento', 'Auto e Moto', 'Film e Tv', 'Libri e fumetti', 'Casa e cucina', 'Altro', 'Musica', 'Immobili'];

        foreach ($categories as $category) {
            DB::table('categories')->insert([
                'category'=>$category,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ]);
        }
    }
}
