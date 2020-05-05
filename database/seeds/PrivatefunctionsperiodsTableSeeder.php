
<?php

use Illuminate\Database\Seeder;
use App\Models\Privatefunctionsperiods;

class PrivatefunctionsperiodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $amount = 10;
        factory(Privatefunctionsperiods::class, $amount)->create();
    }
}