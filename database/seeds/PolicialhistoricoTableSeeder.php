
<?php

use Illuminate\Database\Seeder;
use App\Models\Policialhistorico;

class PolicialhistoricoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $amount = 10;
        factory(Policialhistorico::class, $amount)->create();
    }
}