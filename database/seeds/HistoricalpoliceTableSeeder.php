
<?php

use Illuminate\Database\Seeder;
use App\Models\Historicalpolice;

class HistoricalpoliceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $amount = 10;
        factory(Historicalpolice::class, $amount)->create();
    }
}