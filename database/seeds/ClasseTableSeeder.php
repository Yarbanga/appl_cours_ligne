<?php

use Illuminate\Database\Seeder;

class ClasseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classes')->insert([

            ['id' => '1', 'classe' => 'CP1'],
            ['id' => '2', 'classe' => 'CP2'],
            ['id' => '3', 'classe' => 'CE1'],
            ['id' => '4', 'classe' => 'CE2'],
            ['id' => '5', 'classe' => 'CM1'],
            ['id' => '6', 'classe' => 'CM2'],
            ['id' => '7', 'classe' => '6ième'],
            ['id' => '8', 'classe' => '5ième'],
            ['id' => '9', 'classe' => '4ième'],
            ['id' => '10', 'classe' => '3ième'],
            ['id' => '11', 'classe' => '2nd'],
            ['id' => '12', 'classe' => '1ère'],
            ['id' => '13', 'classe' => 'Tle']
           
        ]);
    }
}
