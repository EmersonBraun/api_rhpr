
<?php

use Illuminate\Database\Seeder;
use App\Models\Opmpmpr;

class OpmpmprTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $amount = 10;
        factory(Opmpmpr::class, $amount)->create();
    }
}