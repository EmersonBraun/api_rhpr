
<?php

use Illuminate\Database\Seeder;
use App\Models\Efetivopracas;

class EfetivopracasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $amount = 10;
        factory(Efetivopracas::class, $amount)->create();
    }
}