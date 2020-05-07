
<?php

use Illuminate\Database\Seeder;
use App\Models\Funcpriv;

class FuncprivTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $amount = 10;
        factory(Funcpriv::class, $amount)->create();
    }
}