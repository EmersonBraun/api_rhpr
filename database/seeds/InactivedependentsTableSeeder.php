
<?php

use Illuminate\Database\Seeder;
use App\Models\Inactivedependents;

class InactivedependentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $amount = 10;
        factory(Inactivedependents::class, $amount)->create();
    }
}