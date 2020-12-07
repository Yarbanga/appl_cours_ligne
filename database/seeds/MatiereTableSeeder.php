<?php

use Illuminate\Database\Seeder;

class MatiereTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('matieres')->insert([

            ['id' => '1', 'matiere' => 'Histoire'],
            ['id' => '2', 'matiere' => 'Géographie'],
            ['id' => '3', 'matiere' => 'Français'],
            ['id' => '4', 'matiere' => 'Anglais'],
            ['id' => '5', 'matiere' => 'SVT'],
            ['id' => '6', 'matiere' => 'Mathématiques'],
            ['id' => '7', 'matiere' => 'Physique'],
            ['id' => '8', 'matiere' => 'Chimie']
        ]);
    }
}
