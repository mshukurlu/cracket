<?php

use App\Models\Team;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->truncate();
      Team::create(
          ['name'=>'Royal Challengers Bangalore','icon'=>'C0PrQUne-2L3BgaJM.png'],
          ['name'=>'Delhi Capitals','icon'=>'YLOcwJoe-0Yfo99gN.png'],
          ['name'=>'Mumbai Indians','icon'=>'vRqJruB6-MsdsAkvH.png']
      );
    }
}
