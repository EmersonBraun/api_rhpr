
<?php

use Illuminate\Database\Seeder;
use App\Models\Dependentesinativo;

class DependentesinativoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $amount = 10;
        factory(Dependentesinativo::class, $amount)->create();
    }
}