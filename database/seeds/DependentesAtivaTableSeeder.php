
<?php

use Illuminate\Database\Seeder;
use App\Models\DependentesAtiva;

class DependentesAtivaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $amount = 10;
        factory(DependentesAtiva::class, $amount)->create();
    }
}