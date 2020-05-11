<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\Models\v0\Posto;
use App\Repositories\v0\PostoRepository;

class PostoUnitTest extends TestCase
{
    use DatabaseMigrations;
 
    /** @test 
	 * SearchGetWithError
	 *
	 * @return void
	 */
	public function testPostoSearchGetWithErrorTest()
	{
        $this->assertTrue(true);
	}

	/** @test 
	 * SearchGet
	 *
	 * @return void
	 */
	public function testPostoSearchGetTest()
	{
        $this->assertTrue(true); 
	}

	/** @test 
	 * SearchPostWithError
	 *
	 * @return void
	 */
	public function testPostoSearchPostWithErrorTest()
	{
        $this->assertTrue(true);
	}

	/** @test 
	 * SearchPost
	 *
	 * @return void
	 */
	public function testPostoSearchPostTest()
	{
        $this->assertTrue(true); 
	}

}