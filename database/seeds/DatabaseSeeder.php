<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AusenciaTableSeeder::class,
            DependentesAtivaTableSeeder::class,
            DependentesInativoTableSeeder::class,
            EfetivoPmprTableSeeder::class,
            EfetivoPracasTableSeeder::class,
            FuncoesPrivativasTableSeeder::class,
            InativosTableSeeder::class,
            OpmImpMeta4TableSeeder::class,
            PmCmTableSeeder::class,
            PolicialHistoricoTableSeeder::class,
            PostoTableSeeder::class,
            ReservaTableSeeder::class,
        ]);
    }
}
