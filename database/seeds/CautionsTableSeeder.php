<?php

use Illuminate\Database\Seeder;

class CautionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('cautions')->insert([
          'id' => 1,  'numero' => str_random(8),
 'dateajout' => '2018-11-22', 'montant' => 11000000.00, 'banque1' => 'BMCI', 'banque2' => '', 'dateacheve' => '2019-11-22', 'fournisseur' => 'Sidi Med Mokhtar', 'datealert1' => '2019-10-22', 'datealert2' => '2019-10-29', 'datealert3' => '2019-12-06', 'etat' => 'initial', 'type' => '1', 'caution_id' => '0', 'projet_id' => '1', 'notification' => '0', 'created_at' => date("Y-m-d H:i:s")
        ]);

 DB::table('cautions')->insert([
          'id' => 2,  'numero' => str_random(8),
 'dateajout' => '2018-11-22', 'montant' => 13000000.00, 'banque1' => 'BMCI', 'banque2' => '', 'dateacheve' => '2018-11-22', 'fournisseur' => 'Sidi Med Mokhtar', 'datealert1' => '2019-10-22', 'datealert2' => '2018-10-29', 'datealert3' => '2018-12-06', 'etat' => 'initial', 'type' => '1', 'caution_id' => '0', 'projet_id' => '1', 'notification' => '0', 'created_at' => date("Y-m-d H:i:s")
        ]);

          DB::table('cautions')->insert([
          'id' => 3,  'numero' => str_random(8),
 'dateajout' => '2018-11-22', 'montant' => 50000000.00, 'banque1' => 'BMCI', 'banque2' => '', 'dateacheve' => '2019-11-22', 'fournisseur' => 'Sidi Med Mokhtar', 'datealert1' => '2019-10-22', 'datealert2' => '2019-10-29', 'datealert3' => '2019-12-06', 'etat' => 'initial', 'type' => '1', 'caution_id' => '0', 'projet_id' => '2', 'notification' => '0', 'created_at' => date("Y-m-d H:i:s")
        ]);

           DB::table('cautions')->insert([
          'id' => 4,  'numero' => str_random(8),
 'dateajout' => '2018-11-22', 'montant' => 10000000.00, 'banque1' => 'BMCI', 'banque2' => '', 'dateacheve' => '2019-08-22', 'fournisseur' => 'Sidi Med Mokhtar', 'datealert1' => '2019-10-22', 'datealert2' => '2019-09-29', 'datealert3' => '2019-10-06', 'etat' => 'initial', 'type' => '1', 'caution_id' => '0', 'projet_id' => '2', 'notification' => '0', 'created_at' => date("Y-m-d H:i:s")
        ]);
    }
}
