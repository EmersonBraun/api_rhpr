
<?php

use Illuminate\Database\Seeder;
use App\Models\v0\Inativo;

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