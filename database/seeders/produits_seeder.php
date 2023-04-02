<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// use App\Models\Produits;
use Illuminate\Support\Facades\DB ;
use Nette\Utils\Floats;
// use PhpParser\Node\Expr\Cast\Double;

use Illuminate\Support\Str;
use Illuminate\Support\Double;

class produits_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // public function run()
    // {
    //     DB::table('produits')->insert([
    //         'Titre'=>'NoKiA',
    //         'Prix' => 340.00,
    //     ]);
    // }
    public function run()
    {
        DB::table('produits')->insert([
            'Titre'=>Str::random(8),
            'Prix' =>10
        ]);
    }
}
