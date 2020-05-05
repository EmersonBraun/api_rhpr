
<?php

use Illuminate\Database\Seeder;
use App\Models\Opm;

class OpmTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $amount = 10;
        factory(Opm::class, $amount)->create();
    }
}