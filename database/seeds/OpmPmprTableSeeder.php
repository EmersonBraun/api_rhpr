
<?php

use Illuminate\Database\Seeder;
use App\Models\OpmPmpr;

class OpmPmprTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $amount = 10;
        factory(OpmPmpr::class, $amount)->create();
    }
}