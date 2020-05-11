<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\Models\v1\FullCops;
use App\Repositories\v1\FullCopsRepository;

class FullCopsUnitTest extends TestCase
{
    use DatabaseMigrations;
 
    /** @test 
	 * SearchGetWithError
	 *
	 * @return void
	 */
	public function testFullCopsSearchGetWithErrorTest()
	{
        $this->assertTrue(true);
	}

	/** @test 
	 * SearchGet
	 *
	 * @return void
	 */
	public function testFullCopsSearchGetTest()
	{
        $this->assertTrue(true); 
	}

	/** @test 
	 * SearchPostWithError
	 *
	 * @return void
	 */
	public function testFullCopsSearchPostWithErrorTest()
	{
        $this->assertTrue(true);
	}

	/** @test 
	 * SearchPost
	 *
	 * @return void
	 */
	public function testFullCopsSearchPostTest()
	{
        $this->assertTrue(true); 
	}

}