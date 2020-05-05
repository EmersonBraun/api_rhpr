
<?php

use Illuminate\Database\Seeder;
use App\Models\Funcoesprivativas;

class FuncoesprivativasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $amount = 10;
        factory(Funcoesprivativas::class, $amount)->create();
    }
}