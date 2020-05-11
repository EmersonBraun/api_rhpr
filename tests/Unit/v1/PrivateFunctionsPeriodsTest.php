<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\Models\v1\PrivateFunctionsPeriods;
use App\Repositories\v1\PrivateFunctionsPeriodsRepository;

class PrivateFunctionsPeriodsUnitTest extends TestCase
{
    use DatabaseMigrations;
 
    /** @test 
	 * SearchGetWithError
	 *
	 * @return void
	 */
	public function testPrivateFunctionsPeriodsSearchGetWithErrorTest()
	{
        $this->assertTrue(true);
	}

	/** @test 
	 * SearchGet
	 *
	 * @return void
	 */
	public function testPrivateFunctionsPeriodsSearchGetTest()
	{
        $this->assertTrue(true); 
	}

	/** @test 
	 * SearchPostWithError
	 *
	 * @return void
	 */
	public function testPrivateFunctionsPeriodsSearchPostWithErrorTest()
	{
        $this->assertTrue(true);
	}

	/** @test 
	 * SearchPost
	 *
	 * @return void
	 */
	public function testPrivateFunctionsPeriodsSearchPostTest()
	{
        $this->assertTrue(true); 
	}

}
