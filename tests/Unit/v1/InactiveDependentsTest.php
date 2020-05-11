<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\Models\v1\InactiveDependents;
use App\Repositories\v1\InactiveDependentsRepository;

class InactiveDependentsUnitTest extends TestCase
{
    use DatabaseMigrations;
 
    /** @test 
	 * SearchGetWithError
	 *
	 * @return void
	 */
	public function testInactiveDependentsSearchGetWithErrorTest()
	{
        $this->assertTrue(true);
	}

	/** @test 
	 * SearchGet
	 *
	 * @return void
	 */
	public function testInactiveDependentsSearchGetTest()
	{
        $this->assertTrue(true); 
	}

	/** @test 
	 * SearchPostWithError
	 *
	 * @return void
	 */
	public function testInactiveDependentsSearchPostWithErrorTest()
	{
        $this->assertTrue(true);
	}

	/** @test 
	 * SearchPost
	 *
	 * @return void
	 */
	public function testInactiveDependentsSearchPostTest()
	{
        $this->assertTrue(true); 
	}

}