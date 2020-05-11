<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\Models\Ausencia;
use App\Repositories\AusenciaRepository;

class AusenciaUnitTest extends TestCase
{
    use DatabaseMigrations;

    /** @test 
	 * SearchGetWithError
	 *
	 * @return void
	 */
	public function testAusenciaSearchGetWithErrorTest()
	{
        $this->assertTrue(true);
	}

	/** @test 
	 * SearchGet
	 *
	 * @return void
	 */
	public function testAusenciaSearchGetTest()
	{
        $this->assertTrue(true); 
	}

	/** @test 
	 * SearchPostWithError
	 *
	 * @return void
	 */
	public function testAusenciaSearchPostWithErrorTest()
	{
        $this->assertTrue(true);
	}

	/** @test 
	 * SearchPost
	 *
	 * @return void
	 */
	public function testAusenciaSearchPostTest()
	{
        $this->assertTrue(true); 
	}
}
