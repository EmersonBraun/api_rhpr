
<?php

use Illuminate\Database\Seeder;
use App\Models\Inativos;

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
        factory(Inativos::class, $amount)->create();
    }
}