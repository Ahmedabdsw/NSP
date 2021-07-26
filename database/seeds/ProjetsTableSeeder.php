<?php

use Illuminate\Database\Seeder;

class ProjetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
          DB::table('projets')->insert([
          'id' => 1,  'nom' => 'Projet No 1',  'bailleur' => 'Kamal Ahmed','mao' => 'Med sidi', 'moe' => 'Hamed Ali', 'datedebutpr' => '2018-11-28', 'datefinpr' => '2019-06-28', 'datedebut' => '2018-11-28', 'datefin' => '2019-11-28', 'responsable' => 'Dia Amadou', 'duree'=>'12','tauxavance' => '30%', 'tauxdecaisse' => '25%', 'etat'=>'1'
 
        ]);

             DB::table('projets')->insert([
          'id' => 2,  'nom' => 'Projet No 2',  'bailleur' => 'Med Ahmed','mao' => 'Molay sidi', 'moe' => 'Yacoub Fall', 'datedebutpr' => '2018-11-28', 'datefinpr' => '2019-06-28', 'datedebut' => '2018-11-28', 'datefin' => '2019-11-28', 'responsable' => 'Sidi Ahmedou', 'duree'=>'12','tauxavance' => '37%', 'tauxdecaisse' => '20%', 'etat'=>'1'
 
        ]);
    }
}
