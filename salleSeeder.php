<?php

namespace Database\Seeders;
use DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class salleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('salles')->insert([
            'nom'=>'salle2',
            'nbrchaise'=>50,
            'superficie'=>100
        ]);
    }
}
