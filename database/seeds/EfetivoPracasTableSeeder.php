
<?php

use Illuminate\Database\Seeder;
use App\Models\EfetivoPracas;

class EfetivoPracasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $amount = 10;
        factory(EfetivoPracas::class, $amount)->create();
    }
}