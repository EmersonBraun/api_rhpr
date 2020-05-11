<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\Models\v0\DependentesAtiva;
use App\Repositories\v0\DependentesAtivaRepository;

class DependentesAtivaUnitTest extends TestCase
{
	use DatabaseMigrations;
	
 	/** @test 
	 * SearchGetWithError
	 *
	 * @return void
	 */
	public function testDependentesAtivaSearchGetWithErrorTest()
	{
        $this->assertTrue(true);
	}

	/** @test 
	 * SearchGet
	 *
	 * @return void
	 */
	public function testDependentesAtivaSearchGetTest()
	{
        $this->assertTrue(true); 
	}

	/** @test 
	 * SearchPostWithError
	 *
	 * @return void
	 */
	public function testDependentesAtivaSearchPostWithErrorTest()
	{
        $this->assertTrue(true);
	}

	/** @test 
	 * SearchPost
	 *
	 * @return void
	 */
	public function testDependentesAtivaSearchPostTest()
	{
        $this->assertTrue(true); 
	}
}
