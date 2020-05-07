
<?php

use Illuminate\Database\Seeder;
use App\Models\DependentesInativo;

class DependentesInativoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $amount = 10;
        factory(DependentesInativo::class, $amount)->create();
    }
}