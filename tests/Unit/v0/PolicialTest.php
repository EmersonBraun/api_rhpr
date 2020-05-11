<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\Models\v0\Policial;
use App\Repositories\v0\PolicialRepository;

class PolicialUnitTest extends TestCase
{
    use DatabaseMigrations;
 
    /** @test 
	 * SearchGetWithError
	 *
	 * @return void
	 */
	public function testPolicialSearchGetWithErrorTest()
	{
        $this->assertTrue(true);
	}

	/** @test 
	 * SearchGet
	 *
	 * @return void
	 */
	public function testPolicialSearchGetTest()
	{
        $this->assertTrue(true); 
	}

	/** @test 
	 * SearchPostWithError
	 *
	 * @return void
	 */
	public function testPolicialSearchPostWithErrorTest()
	{
        $this->assertTrue(true);
	}

	/** @test 
	 * SearchPost
	 *
	 * @return void
	 */
	public function testPolicialSearchPostTest()
	{
        $this->assertTrue(true); 
	}

}
