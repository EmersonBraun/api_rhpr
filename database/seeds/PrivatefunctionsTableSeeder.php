
<?php

use Illuminate\Database\Seeder;
use App\Models\Privatefunctions;

class PrivatefunctionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $amount = 10;
        factory(Privatefunctions::class, $amount)->create();
    }
}