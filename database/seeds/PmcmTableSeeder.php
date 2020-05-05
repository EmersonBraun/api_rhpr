
<?php

use Illuminate\Database\Seeder;
use App\Models\Pmcm;

class PmcmTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $amount = 10;
        factory(Pmcm::class, $amount)->create();
    }
}