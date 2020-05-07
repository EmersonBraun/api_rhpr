
<?php

use Illuminate\Database\Seeder;
use App\Models\FuncPriv;

class FuncPrivTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $amount = 10;
        factory(FuncPriv::class, $amount)->create();
    }
}