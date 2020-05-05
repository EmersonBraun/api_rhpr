
<?php

use Illuminate\Database\Seeder;
use App\Models\Positions;

class PositionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $amount = 10;
        factory(Positions::class, $amount)->create();
    }
}