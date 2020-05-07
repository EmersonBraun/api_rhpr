
<?php

use Illuminate\Database\Seeder;
use App\Models\OpmImpMeta4;

class OpmImpMeta4TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $amount = 10;
        factory(OpmImpMeta4::class, $amount)->create();
    }
}