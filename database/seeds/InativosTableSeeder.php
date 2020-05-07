
<?php

use Illuminate\Database\Seeder;
use App\Models\Inativo;

class InativosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $amount = 10;
        factory(Inativo::class, $amount)->create();
    }
}